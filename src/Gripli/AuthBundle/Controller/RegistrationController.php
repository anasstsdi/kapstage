<?php
namespace Gripli\AuthBundle\Controller;


use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\Request;
use Gripli\AuthBundle\Document\Company;
use Gripli\AuthBundle\Document\School;


class RegistrationController extends BaseController
{    
     public function registerAction(Request $request)
    {
        $logger = $this->container->get('auth_service.logger');
        $logger->info('Nous avons récupéré le logger registration');
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        

        if ('POST' === $request->getMethod()) {
             $selected_radio = $request->request->get('type');
             if ($selected_radio == 'company') {
                 $company = new Company();
                 $company->setCreated(date('d F Y'));
                 $company->setLastupdate(date('d F Y'));
                 $user = $company;
                }elseif($selected_radio == 'school'){
                $school = new School();
                $school->setCreated(date('d F Y'));
                $school->setLastupdate(date('d F Y'));
                $user = $school;
                }else{
                $user->setCreated(date('d F Y'));
                $user->setLastupdate(date('d F Y'));
                }
                
            $form->setData($user);
            $form->bind($request);

            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
                $userManager->updateUser($user);
                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
            'form' => $form->createView(),
        ));
    }

}

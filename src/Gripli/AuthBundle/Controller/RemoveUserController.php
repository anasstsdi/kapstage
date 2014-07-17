<?php

namespace Gripli\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\User\UserInterface;
class RemoveUserController extends Controller
{
    /**
     * @Route("/remove")
     * @Template()
     */
    public function removeAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $userManager = $this->container->get('fos_user.user_manager');
        $userManager->deleteUser($user);
        $response = new RedirectResponse("profile");
        return $response;
        
    }
}

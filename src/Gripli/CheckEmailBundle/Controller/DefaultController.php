<?php

namespace Gripli\CheckEmailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Gripli\AuthBundle\Document\Company;
use Gripli\AuthBundle\Document\School;
use DominionEnterprises\Mongo\Queue;
class DefaultController extends Controller
{
    /**
     * @Route("/Home", name="email_index")
     * @Template()
     */
    public function indexAction()
    {
     //  $queue = new Queue('mongodb://localhost', 'test_database', 'queue');
       $queue =  $this->container->get('mongomqservice');
       $queue->send(array('popo'));
       


        if ($this->getRequest()->getMethod() == 'POST'){
           /* $dm = $this->get('doctrine_mongodb')->getManager();
            $company = new Company();
            $company->setNameCompany("sopragroup");
            $company->setUsername("sopragroup");
            $company->setEmail("sopragroup@msn..com");
            $dm->persist($company);
            $dm->flush();
            $school = new School();
            $school->setNameSchool("sorbonne");
            $school->setUsername("sorbonne");
            $school->setEmail("sorbonne@email.com");
            $dm->persist($school);
            $dm->flush();*/

            
            $dm = $this->get('doctrine_mongodb')->getManager();
            $repository = $this->get('doctrine_mongodb')
                               ->getManager()
                               ->getRepository('GripliAuthBundle:Users');
           $user = $repository->findOneByEmail($this->getRequest()->get('Email'));
          
           //$company->setNameCompany("Sopragroup");
           //$dm->persist($company);
            //$dm->flush();
          if ($user)
            {
               return array("message" =>"Votre adresse Email existe");
            }else{
               return array("message" =>"Votre adresse Email n'existe pas !!");
            }
         
        }
        return array("message" =>"Merci de renseigner votre adresse Email");
    }

}

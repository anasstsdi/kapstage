<?php

namespace Gripli\CvBundle\Controller;


use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
class DefaultController extends Controller
{
    /**
     * @Route("/cv/{id}",name="cv")
     * @Template()
     */
    public function indexAction($id)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

            $repository = $this->get('doctrine_mongodb')
                               ->getManager()
                               ->getRepository('GripliCvBundle:Cv');
           $cv = $repository->findOneById($id);
           //$user->setLastUpdate( '2014-01-22T14:56:59.301Z');
           $dm->persist($user);
           $dm->flush();
           
           $logger = $this->get('cv_service.logger');
           $logger->info('Nous avons récupéré le logger CV');
           return $this->render('GripliCvBundle:Default:index.html.twig', array(
                'cv' => $cv));
    }
     /**
     * @Route("/list" )
     * @Template()
     */
    public function listAction()
    {
        // call mongo queue
       $queue =  $this->container->get('mongomqservice');

       if ($queue->count(array()) != 0){
       $message = $queue->get(array(), 60);
        echo $queue->count(array());
        $queue->ack($message);
       }

        
        //////////////
        
        $dm = $this->get('doctrine_mongodb')->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

            $repository = $this->get('doctrine_mongodb')
                               ->getManager()
                               ->getRepository('GripliAuthBundle:Users');
           $cv =$user->getCv();
           return $this->render('GripliCvBundle:Default:list.html.twig', array(
                'cv' => $cv));
    }

    
    /**
     * @Route("/getpdf/{id}")
     * @Template()
     */
    public function getpdfAction($id)
    {
//$html = $this->renderView('GripliCvBundle:Default:index.html.twig');
$pdf = $this->container->get("white_october.tcpdf")->create();

    $pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Author');
$pdf->SetTitle('CV');
$pdf->SetSubject('Cvthèque');


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);



$pdf->SetFont('helvetica', '', 10);

$pdf->AddPage();


$html =$this->indexAction($id);


// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('/home/ahaifi/Images/example_061.pdf', 'I');   
}
}
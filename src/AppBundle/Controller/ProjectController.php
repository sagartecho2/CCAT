<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
//use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Student;
use AppBundle\Form\ProjectAssignmentForm;
use AppBundle\Entity\ProjectAssignment;
use AppBundle\Entity\ProjectType;
use AppBundle\Entity\ProjectTitle;
use Symfony\Component\Config\Definition\Exception\Exception;
class ProjectController extends Controller
{


      /**
      *  @author Ryan
      *  Purpose : getting all available subjects
      *  @param type $request
      *  @return JSON
       * @Route("/projects")
       */
  public function getProjects(Request $request)
  {
    $subjectid=$request->request->get('id');
    $projects=$this->getDoctrine()->getRepository('AppBundle:ProjectTitle')->findBytypeid($subjectid);
    if(!$projects)
    {
      throw $this->createNotFoundException('Projects Not Found');
    }
    else {
      $response = $this->get('Utility')->toJson($projects);
      return $response;
    }

  }
  /**
  *  @author Ryan
  *  Purpose : This is used to upload an image for the project
  *  @param type $request
  *  @return Response
   * @Route("/upload")
   */
    public function uploadImageAction(Request $request)
    {
      $uploadedUrl="";
      if($request->getMethod()=="POST")
      {
      //to obtain GET and POST variables.........
        $status="success";
        $uploadedUrl="";
        $image=$request->files->get('img');
        $status=$this->get('Utility')->checkImage($image);
        return new Response(json_encode(array('status'=>$status)));

      }
    }
  /**
  *  @author Sagar
  *  Purpose : This is used to assign teacher to the project that contains event info and to handle transactions
  *             (To save complete information related to form1, form2 and form3)
  *  @param type $request
  *  @return JSON
   * @Route("/project/assignment", name="transaction")
   */
  public function ProjectAssignmentAction(Request $request)
  {
      $formData = $request->request->get('data');                                   
      $em = $this->getDoctrine()->getEntityManager();
      $response = $em->getRepository('AppBundle:ProjectAssignment')->projectAssignment($formData);
      return new JsonResponse($response);                                                                                                                                                                                                                                                                                                                                                          
  }
}

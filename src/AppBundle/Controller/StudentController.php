<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use Doctrine\DBAL\Driver\IBMDB2\DB2Connection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Student;
use AppBundle\Entity\MemberAssignment;

class StudentController extends Controller
{


    /**
    *  @author Ryan
    *  Purpose : Get all default students
    *  @param type $request
    *  @return Json Response
     * @Route("/students")
     */
    public function getAllStudents(Request $request)
    {
        $student=$this->getDoctrine()->getRepository('AppBundle:Student')->findAll();
        $response = $this->get('Utility')->toJson($student);
        return $response;
    }


}

<?php

namespace AppBundle\Controller;
use AppBundle\Form\ProjectAssignmentForm;
use AppBundle\Entity\ProjectAssignment;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use AppBundle\Repository\CustomerRepository;
use AppBundle\Resources\config\doctrine;
class DefaultController extends Controller
{
    /**
    *  @author ryan
    *  Purpose : This is used to get the default form view
    *  @param type $request
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $prjAss = new ProjectAssignment();
        $form = $this->createForm(ProjectAssignmentForm::class, $prjAss);
        $form->handleRequest($request);
        return $this->render(
            'default/index.html.twig',
            array('form' => $form->createView())
        );
    }
}

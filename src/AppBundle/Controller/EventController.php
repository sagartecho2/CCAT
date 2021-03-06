<?php
// src/AppBundle/Controller/EventController.php
namespace AppBundle\Controller;

use AppBundle\Form\EventForm;
use AppBundle\Entity\Event;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\DateTime;
class EventController extends Controller
{
    /**
     *  @author sagar
     *  Purpose : This is used to loading event creation page and create a new event....
     *  @param type $request
     *  @return JSON|partial view
     * @Route("/event/create", name="event_create")
     */
    public function createAction(Request $request)
    {
        $event = new Event();
        $form = $this->createForm(EventForm::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $event = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $response = $em->getRepository('AppBundle:Event')->saveEvent($event);
            return new JsonResponse( $response );
        }
        return $this->render(
            'event/create.html.twig',
            array('form' => $form->createView())
        );
    }
    /**
    *  @author sagar
    *  Purpose : This is used for displaying a particular event in grid
    *  @param type $id
    *  @return partial view (array)
     * @Route("/event/get/{id}", name="event_getdata")
     */
    public function geteventAction($id,Request $request){
        if($id>0){
          $event=$this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
        }else{
          $event = $request->request->get('event');                                   
        }
        if(!$event)
        {
          throw $this->createNotFoundException('Event Not Found');
        }
        else
        {
            $status = array('1'=>'Open','2'=>'Closed','3'=>'On hold','4'=>'Cancelled');
           return $this->render(
               'event/griddata.html.twig',
               array('event' => $event, 'status'=>$status));;
        }
    }
    /**
    *  @author sagar
    *  Purpose : This is used for updating a particular event.....
    *  @param type $id,$request
    *  @return JSON|partial view
     * @Route("/event/update/{id}", name="event_update")
     */
    public function updateAction($id, Request $request){
      $event=new Event();
          if($id>0){
            $event=$this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
          }else{                                   
            $evnt = $request->request->get('event');                                   
            $event->setTitle($evnt["title"]);
            $event->setStartdate(new \DateTime($evnt["startdate"]));
            $event->setEnddate(new \DateTime(                $evnt["enddate"]));
            $event->setIspriority($evnt["ispriority"] == 'true'? true: false                         );
            $event->setStatus($evnt["status"]);
            $event->setDetails($evnt["details"]);
          }
          if (!$event) {
            throw $this->createNotFoundException(
                    'No event found for id ' . $id
            );
          }
          $form = $this->createForm(EventForm::class, $event);
          $form->handleRequest($request);

          if ($form->isSubmitted()) {
              $em->flush();
              $response["status"] = "success";
              $response["id"] = $event->getId();
              return new JsonResponse( $response );
          }
          return $this->render(
              'event/create.html.twig',
              array('form' => $form->createView())
          );
       }
}

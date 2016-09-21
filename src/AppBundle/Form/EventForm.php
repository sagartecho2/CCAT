<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventForm extends AbstractType
{
  /**
  *  @author Sagar
  *  Purpose : This is used for building an Event Form
  *  @param type $builder,$options
   */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('Id', TextType::class, array('attr' => array('readonly'=>true)))
            ->add('Title', TextType::class, array(
                                                  'label' => 'Project Name',
                                                  'attr' => array('readonly'=>true)
                                                ))
            ->add('Details', TextareaType::class, array(
                                                    'label' => 'Event Details',
                                                    'attr'=>array('class'=>'sign-up-input sign-up-text_area  margin_bottom5')
                                                  ))
            ->add('StartDate', DateTimeType::class, array(
                                                      'label' => 'Date',
                                                      'widget' => 'single_text',
                                                      'attr' => array('type'=>"hidden", 'readonly'=>true),
                                                      'date_format' => 'MMM/dd/yyyy hh:mm a',
                                                      'label' => 'Schedule Date and Time'
                                                    ))

            ->add('EndDate', DateTimeType::class, array(
                                                      'label' => 'Date',
                                                      'widget' => 'single_text',
                                                      'attr' => array('type'=>"hidden", 'readonly'=>true),
                                                    ))
            ->add('IsPriority', CheckboxType::class, array(
                                                          'required' => false,
                                                          'label' => 'High',
                                                          'label_attr' => array('class' => 'label_chebox_multiselect'),
                                                          'attr' => array('class' => 'css-checkbox-multiselect')
                                                        ))
            ->add('Status', ChoiceType::class, array('label' => 'Status',
                                                      'attr' => array('class' => 'sign-up-input margin_bottom10'),
                                                      'choices'  => array(
                                                          'Open' => 1,
                                                          'Closed' => 2,
                                                          'On hold' => 3,
                                                          'Cancelled' => 4
                                                      )
            ))->add('TeacherId', TextType::class, array(
                                                      'label' => 'TeacherId',
                                                      'attr' => array('type'=>"hidden", 'readonly'=>true),
                                                    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event',
        ));
    }
}
?>

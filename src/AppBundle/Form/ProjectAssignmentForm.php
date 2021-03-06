<?php

namespace AppBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;                                                                                       
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
use AppBundle\Entity\ProjectType;
use AppBundle\Entity\ProjectTitle;

class ProjectAssignmentForm extends AbstractType
{
  /**
  *  @author Sagar
  *  Purpose : This is used for building the entire Project Assignment Form,the main form
  *  @param type $builder,$options
   */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      //$prjType = new ProjectController();
        $builder
              ->add('AssignedBy', TextType::class, array(
                                                  'label' => 'Name',
                                                  'attr' => array('class'=>"sign-up-input")
                                                ))

                          ->add('ProjTypeID', EntityType::class, array(
                                                                  'label' => 'Subject',
                                                                  'attr' => array('class'=>"sign-up-input",'required'=>'required'),
                                                                  'class' => 'AppBundle:ProjectType',
                                                                  'query_builder' => function (EntityRepository $er) {
                                                                     return $er->createQueryBuilder('d')                                                        
                                                                     ->orderBy('d.typename', 'ASC');
                                                                   },
                                                                   'choice_label' => 'typename',                                                                            
                                                            ))
              ->add('TeacherID', EntityType::class, array(
                                                    'label' => 'Employee',
                                                    'attr' => array('class'=>"sign-up-input",'required'=>'required'),
                                                    'class' => 'AppBundle:Teacher',
                                                    'query_builder' => function (EntityRepository $er) {
                                                                                             return $er->createQueryBuilder('d')                                                        
                                                                                             ->orderBy('d.firstName', 'ASC');
                                                   },
                                                   'choice_label' => 'firstName',                                                                            
                                    ))
              ->add('ProjTitleID', EntityType::class, array(
                                                      'label' => 'Topic',
                                                      'attr' => array('class'=>"sign-up-input"),
                                                      'mapped'=>false,
                                                      'class' => 'AppBundle:ProjectTitle',
                                                      'query_builder' => function (EntityRepository $er) {
                                                             return $er->createQueryBuilder('d')                                                        
                                                             ->orderBy('d.title', 'ASC');
                                                       },
                                                       'choice_label' => 'title',                                                                            
                                                  ))
              ->add('Logo', TextType::class, array(
                                                    'label' => 'Logo',
                                                    'required'=>false,
                                                    'attr'=>array('type'=>'hidden')
                                                  ))
              ->add('LogoDesc', TextareaType::class, array(
                                                  'label' => 'Logo Description',
                                                  'attr'=>array('class'=>'sign-up-input sign-up-text_area')
                                                ))
              ->add('IsChild', CheckboxType::class, array(
                                                      'required' => false,
                                                      'label' => 'Below 10 Years of Age',
                                                      'label_attr' => array('class' => 'label_chebox_multiselect'),
                                                      'attr' => array('class' => 'css-checkbox-multiselect')
                                                    ))
               ->add('Guardian', CheckboxType::class, array(
                                                          'required' => false,
                                                          'label' => 'Guardian/Mentor',
                                                          'label_attr' => array('class' => 'label_chebox_multiselect'),
                                                          'attr' => array('class' => 'css-checkbox-multiselect')
                                                        ))
                ->add('EventTitle', TextType::class, array(
                                                        'label' => 'Project Name',
                                                        'attr'=>array('class'=>'sign-up-input')
                                                      ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ProjectAssignment',
        ));
    }
}
?>

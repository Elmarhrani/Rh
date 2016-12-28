<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 23/12/16
 * Time: 00:29
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('required' => true))
            ->add('prenom', TextType::class, array('required' => true))
            ->add('email', EmailType::class, array('required' => true))
            ->add('adresse', TextType::class, array('required' => true))
            ->add('dateNaiss', DateType::class, array('widget' => 'single_text', 'html5' => false, 'format' => 'dd-MM-yyyy', 'attr' => array('form-element' => 'datepicker-component')))
            ->add('niveau', ChoiceType::class, array('choices'  => array(
                'Aucun'    => 'Aucun',
                'primaire' => 'primaire',
                'Collège'  => 'Collège',
                'lycée'    => 'lycée',
                'bac'      => 'bac',
                'bac +1'   => 'bac +1',
                'bac +2'   => 'bac +2',
                'bac +3'   => 'bac +3',
                'bac +4'   => 'bac +4',
                'bac +5'   => 'bac +5',
                'Autre'    => 'Autre',
            ),
            ))
            ->add('CIN', TextType::class, array('required' => true))
            ->add('CNSS', TextType::class, array('required' => true))
            ->add('tel', TextType::class, array('label' => 'Téléphone', 'attr' => array('form-element' => 'phone')));
        if ($options['with_image']) {
            $builder
                ->add('image', FileType::class, array('required' => false, 'data_class' => null));
        }
        $builder
            ->add('sitFamilaile', ChoiceType::class, array(
                'choices'  => array(
                    'Célibataire' => 'Célibataire',
                    'Marié'       => 'Marié',
                    'divorci'     => 'Divorci',
                ),
                'label' => 'Situation familaile',
            ))
            ->add('nbreEnfant', ChoiceType::class, array('choices'  => range(0, 50, 1), 'label' => "Nombre d'enfants"));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User',
            'with_image' => true,
        ));
    }
}
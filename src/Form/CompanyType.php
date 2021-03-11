<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('companySize',ChoiceType::class,array(
            'choices'  => array(
                'Start Up / Tpu' => "Start Up/Tpu",
                'PME' => "PME",
                'GE' => "GE",
            ),
            'expanded' => true,
            'multiple' => false,
            'mapped' => false
        ))
            ->add('companyGroup',ChoiceType::class,array(
                'choices'  => array(
                    'Oui' => "Oui",
                    'Non' => "Non",
                   
                ),
                'expanded' => true,
                'multiple' => false,
                'mapped' => false
            ))
            ->add('employeesNumber')
            ->add('transportationMeans')
            ->add('livingSpace')
            ->add('nomadicEmployees')
            ->add('ecoGestures')
            ->add('objectives')
            ->add('transitionType')
            ->add('numberOfCompaniesConcerned')
            ->add('enregistrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}

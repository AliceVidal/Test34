<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('companySize', ChoiceType::class,array(
            'choices'  => array(
                'Start-Up / TPE' => "Start-Up/TPE",
                'PME' => "PME",
                'GE' => "GE",
            ),
            'expanded' => true,
            'multiple' => false,
            'mapped' => false,
            'label' => "Quelle est la taille de votre entreprise ?"
        ))
            ->add('companyGroup', ChoiceType::class,array(
                'choices'  => array(
                    'Oui' => "Oui",
                    'Non' => "Non",
                   
                ),
                'expanded' => true,
                'multiple' => false,
                'mapped' => false,
                'label' => "Faites-vous partie d'un groupe d'entreprise ?"
            ))


            ->add('livingSpace', ChoiceType::class,array(
                'choices'  => array(
                    'Open space' => "Open space",
                    'Bureaux individuels' => "Bureaux individuels",
                    'Bureaux partagés' => "Bureaux partagés",
                ),
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
                'label' => "Quels sont vos espaces de travail ?"
            ))

            ->add('objectives', ChoiceType::class,array(
                'choices'  => array(
                    'Changement des comportements' => "Changement des comportements",
                    'Bien-être es collaborateurs' => "Bien-être es collaborateurs",
                    'Respect des nouvelles normes' => "Respect des nouvelles normes",
                    'Réduction des coûts' => "Réduction des coûts",
                ),
                'expanded' => true,
                'multiple' => true,
                'mapped' => false,
                'label' => "Quels sont vos objectifs face à cette transition ?"
            ))

            ->add('transitionType', ChoiceType::class,array(
                'choices'  => array(
                    'Premiers pas' => "Premiers pas",
                    'Poursuivre vos premiers efforts' => "Poursuivre vos premiers efforts",
                    'Un changement radical' => "Un changement radical",
                    'Autre' => "Autre",
                   
                ),
                'expanded' => true,
                'multiple' => false,
                'mapped' => false, 
                'label' => "Quel type de transition souhaitez-vous ?"
            ))
            
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

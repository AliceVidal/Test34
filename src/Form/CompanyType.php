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
        ->add('employeesNumber', ChoiceType::class,array(
            'choices'  => array(
                '1-10 employés' => "1-10 employés",
                '11-50 employés' => "11-50 employés",
                '+ de 50 employés' => "+ de 50 employés",
            ),
            'expanded' => true,
            'multiple' => false,
            'mapped' => false,
            'label' => "bllrlfglfgdlfgd"
        ))
        ->add('companySize', ChoiceType::class,array(
            'choices'  => array(
                'Start-Up / TPE' => "Start-Up/TPE",
                'PME' => "PME",
                'GE' => "GE",
            ),
            'expanded' => true,
            'multiple' => false,
            'mapped' => false
        ))
            ->add('companyGroup', ChoiceType::class,array(
                'choices'  => array(
                    'Oui' => "Oui",
                    'Non' => "Non",
                   
                ),
                'expanded' => true,
                'multiple' => false,
                'mapped' => false
            ))
            ->add('numberOfCompaniesConcerned')

            ->add('transportationMeans', ChoiceType::class,array(
                'choices'  => array(
                    'En voiture / co-voiturage' => "En voiture / co-voiturage",
                    'En transports en commun' => "En transports en commun",
                    'En vélo / trottinette / marche' => "En vélo / trottinette / marche",
                    'Autres (vaisseau spatial)' => "Autres (vaisseau spatial)",
                   
                ),
                'expanded' => true,
                'multiple' => false,
                'mapped' => false
            ))
            ->add('livingSpace', ChoiceType::class,array(
                'choices'  => array(
                    'Open space' => "Open space",
                    'Bureaux individuels' => "Bureaux individuels",
                    'Accueil' => "Accueil",
                    'Cafétéria' => "Cafétéria",
                    'Salle de pause' => "Salle de pause",
                    'Cantine' => "Cantine",
                    'Salle de réunion' => "Salle de réunion",
                    'Autres' => "Autres",
                   
                ),
                'expanded' => true,
                'multiple' => true,
                'mapped' => false
            ))

            ->add('nomadicEmployees', ChoiceType::class,array(
                'choices'  => array(
                    'Aucun' => "Aucun",
                    '1-5' => "1-5",
                    '+ de 5' => "+ de 5",
                ),
                'expanded' => true,
                'multiple' => false,
                'mapped' => false
            ))

            ->add('ecoGestures')

            ->add('objectives', ChoiceType::class,array(
                'choices'  => array(
                    'Prise de conscience et changement des comportements' => "Prise de conscience et changement des comportements",
                    'Bien-être es collaborateurs' => "Bien-être es collaborateurs",
                    'Respect des nouvelles normes' => "Respect des nouvelles normes",
                    'Réduction des coûts' => "Réduction des coûts",
                ),
                'expanded' => true,
                'multiple' => true,
                'mapped' => false
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
                'mapped' => false
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

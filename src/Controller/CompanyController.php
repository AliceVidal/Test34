<?php

namespace App\Controller;


use App\Entity\Company;
use App\Form\CompanyType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompanyController extends AbstractController
{
  
    public function create(Request $request)
    {
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $company->setCompanySize( 
                $form->get('companySize')->getData()  
            );

            if( $form->get('companyGroup')->getData() == 'Oui' )
                {
                $company->setCompanyGroup(true);
            }else{
                $company->setCompanyGroup(false);
            }

            $company->setLivingSpace( 
                $form->get('livingSpace')->getData()  
            );

            $company->setObjectives( 
                $form->get('objectives')->getData()  
            );

            $company->setTransitionType( 
                $form->get('transitionType')->getData()  
            );

            $em = $this->getDoctrine()->getManager();

            $em->persist($company);
            $em->flush();
        }

        return $this->render('company/create.html.twig',[
            "form" => $form->createView()
        ]);
    }
}

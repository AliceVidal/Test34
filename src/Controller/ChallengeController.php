<?php

namespace App\Controller;

use App\Entity\Challenge;
use App\Form\ChallengeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChallengeController extends AbstractController
{
    /**
     * @Route("/challenge", name="challenge")
     */

    public function challengeBack(Request $request)
    {
        $allChallenges = $this->getDoctrine()->getRepository(Challenge::class)->findAll();

        $challenge = new Challenge();
        $form = $this->createForm(ChallengeType::class, $challenge);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $challenge->setChallengeName( 
                $form->get('challengeName')->getData()  
            );

            $em = $this->getDoctrine()->getManager();

            $em->persist($challenge);
            $em->flush();
        }

        return $this->render('challenge/showAll.html.twig',[
            "form" => $form->createView(),
            "allChallenges" => $allChallenges
        ]);
    }


    public function update($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $challenge = $em->getRepository(Challenge::class)->find($id);

        $formChallenge = $this->createForm(ChallengeType::class, $challenge);

        $formChallenge->handleRequest($request);

        if($formChallenge->isSubmitted() && $formChallenge->isValid())
        {
            $em->persist($challenge);
            $em->flush();

            return $this->redirect($this->generateUrl("backoffice_challenge"));
        }

        return $this->render('challenge/update.html.twig', 
        [
        "formChallenge" => $formChallenge->createView()
        ]);

    }


    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $challenge = $em->getRepository(Challenge::class)->find($id);

        $em->remove($challenge);
        $em->flush();

        return $this->redirect(($this->generateUrl('backoffice_challenge')));
    }

}



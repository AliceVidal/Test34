<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    public function showAll()
    {
        $allUsers = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('user/showAll.html.twig',[
            'allUsers' => $allUsers
        ]);
    }
}

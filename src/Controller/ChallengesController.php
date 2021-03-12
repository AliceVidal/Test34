<?php 
#*****************************************************************
# CHALLENGE CONTROLLER *******************************************
#*****************************************************************
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#............................................................

class ChallengesController extends AbstractController
{
    /**
     * @Route("/challenges", name="challenges")
     */

# CHALLENGES Fonctions =========================================
    public function challenges_show()
    {
        #return new Response('<h1>Liste des Challenges</h1>');
        return $this->render('challenges/index.html.twig', [
            'controller_name' => 'ChallengesController',
        ]);
    }

    #------------------------
    public function challenges_add()
    {
    	return new Response('<h1>Ajouter un challenge</h1>');
    }

    #------------------------
    public function challenges_edit($id)
    {
    	return new Response('<h1>Modifier le challenge : ' .$id. '</h1>');
    }

    #------------------------
    public function challenges_remove($id)
    {
    	return new Response('<h1>Supprimer le challenge : ' .$id. '</h1>');
    }
    
#=================================================================
}

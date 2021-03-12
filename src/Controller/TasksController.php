<?php 
#*****************************************************************
# TASKS (Taches) CONTROLLER***************************************
#*****************************************************************
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#............................................................

class TasksController extends AbstractController
{
    /**
     * @Route("/tasks", name="tasks")
     */

# TASKS (taches) ==================================================
    #------------------------
    public function tasks_show()
    {
        return new Response('<h1>Liste des taches </h1>');
    }

    #------------------------
    public function tasks_add()
    {
    	return new Response('<h1>Ajouter une tache</h1>');
    }

    #------------------------
    public function tasks_edit($id)
    {
    	return new Response('<h1>Modifier la "Task" : ' .$id. '</h1>');
    }

    #------------------------
    public function tasks_remove($id)
    {
    	return new Response('<h1>Supprimer la "Tasks" : ' .$id. '</h1>');
    }
    
#=================================================================
}
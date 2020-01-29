<?php


namespace App\controllers;


use App\db\entitites\User;

class UsersController extends ControllerAuth
{

    public function index()
    {
        $users = $this->doctrineManager->em->getRepository(User::class)->findAll();
        $this->viewManager->renderTemplate('users.twig.html',['users'=>$users, 'user'=>$this->user->email]);

    }
}
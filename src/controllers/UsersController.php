<?php


namespace App\controllers;


use App\db\entitites\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = $this->doctrineManager->em->getRepository(User::class)->findAll();
        \Kint::dump($users);
    }
}
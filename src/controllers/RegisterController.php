<?php


namespace App\controllers;


use App\db\entitites\User;

class RegisterController extends Controller
{

    public function index()
    {
        $this->viewManager->renderTemplate('register.twig.html');
    }

    public function register(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword(sha1($password));
        $this->doctrineManager->em->persist($user);
        $this->doctrineManager->em->flush();
        echo ($user->getId());

    }
}
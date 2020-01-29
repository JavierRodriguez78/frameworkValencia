<?php


namespace App\controllers;


use App\db\entitites\User;

class LoginController extends Controller
{

    private $error;
    public function index()
    {
        $this->viewManager->renderTemplate('login.twig.html');
    }

    public function login(){
       $email = $_POST['email'];
        $password = $_POST['password'];
        $repository = $this->doctrineManager->em->getRepository(User::class);
        $user = $repository->findByEmail($email);
        if(!$user){
            $this->error ="Email o Password Incorrecto";
              $this->viewManager->renderTemplate('login.twig.html',['error'=>$this->error]);
        }
        if ($user[0]->getPassword() !== sha1($password)){
            $this->error ="Email o Password Incorrecto";
            $this->viewManager->renderTemplate('login.twig.html',['error'=>$this->error]);
        }

        $this->redirectTo('users');

    }
}
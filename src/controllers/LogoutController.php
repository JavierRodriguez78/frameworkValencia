<?php


namespace App\controllers;


class LogoutController extends ControllerAuth
{

    public function index()
    {
      $this->sessionManager->remove('user');
      $this->redirectTo('login');
    }
}
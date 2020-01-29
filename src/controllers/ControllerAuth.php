<?php


namespace App\controllers;

use App\DoctrineManager;
use App\LogManager;
use App\SessionManager;
use App\ViewManager;
use MongoDB\Driver\Session;

abstract class ControllerAuth
{
    protected $viewManager;
    protected $doctrineManager;
    protected $logManager;
    protected $sessionManager;
    protected $user;

    public function __construct(SessionManager $sessionManager, LogManager $logManager, ViewManager $viewManager, DoctrineManager $doctrineManager)
    {
        $this->viewManager = $viewManager;
        $this->doctrineManager = $doctrineManager;
        $this->logManager = $logManager;
        $this->sessionManager= $sessionManager;

        $this->logManager->info("Controlador cargado->".get_class($this));

        if (!$this->sessionManager->get('user')) return $this->redirectTo('login');
        $this->user = $this->sessionManager->get('user')[0];
    }

    public function redirectTo(string $page){
        $host = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/$page");
    }

    public abstract function index();
}
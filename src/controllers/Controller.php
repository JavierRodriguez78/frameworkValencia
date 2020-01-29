<?php


namespace App\controllers;

use App\DoctrineManager;
use App\ViewManager;

abstract class Controller
{
    protected $viewManager;
    protected $doctrineManager;

    public function __construct(ViewManager $viewManager, DoctrineManager $doctrineManager)
    {
        $this->viewManager = $viewManager;
        $this->doctrineManager = $doctrineManager;
    }

    public function redirectTo(string $page){
        $host = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/$page");
    }

    public abstract function index();
}
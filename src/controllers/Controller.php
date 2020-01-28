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

    public abstract function index();
}
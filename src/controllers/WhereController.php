<?php


namespace App\controllers;


use App\ViewManager;

class WhereController extends Controller
{
    public function index()
    {

        $this->viewManager->renderTemplate("where.twig.html");
    }
}
<?php


namespace App\controllers;


use App\ViewManager;

class AboutController
{
    public function index()
    {
        $viewManager = new ViewManager();
        $viewManager->renderTemplate("about.twig.html");
    }
}
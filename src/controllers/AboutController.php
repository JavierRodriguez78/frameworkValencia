<?php


namespace App\controllers;


use App\ViewManager;

class AboutController extends Controller
{
    public function index()
    {

        $this->viewManager->renderTemplate("about.twig.html");
    }
}
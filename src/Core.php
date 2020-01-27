<?php

namespace  App;
class Core
{
    public function __construct()
    {
      $viewManager = new ViewManager();
      $viewManager->renderTemplate("index.twig.html");
    }
}
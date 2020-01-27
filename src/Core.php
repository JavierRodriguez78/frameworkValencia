<?php

namespace  App;
class Core
{
    public function __construct()
    {
        $logManager = new LogManager();
        $logManager->info("Iniciando la aplicación");
      $viewManager = new ViewManager();
      $viewManager->renderTemplate("index.twig.html");
    }
}
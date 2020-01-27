<?php

namespace  App;

use App\routing\Web;
use \DI\Container;
use \DI\ContainerBuilder;

class Core
{
    private $container;
    private $logger;
    private $routeManager;

    public function __construct()
    {
      $this->container= $this->createContainer();
        $this->logger = $this->container->get(LogManager::class);

    }

    public function init(){
        $this->logger->info("Iniciando la aplicación");
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $this->routeManager = $this->container->get(RouteManager::class);
        $this->routeManager->dispatch($httpMethod, $uri, Web::getDispatcher());
    }

    public function createContainer():Container{
        $containerBuilder = new ContainerBuilder();
        $containerBuilder->useAutowiring(true);
        return $containerBuilder->build();
    }


}
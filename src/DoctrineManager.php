<?php


namespace App;

use App\config\Config;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class DoctrineManager
{
    public $em;

    public function __construct()
    {
        $dbconfig = Config::getDB();
        $paths=[
            dirname(__DIR__).'/db/entities',
            dirname(__DIR__).'/db/repositories'
        ];
        $isDevmode = true;
        $config =
            Setup::createAnnotationMetadataConfiguration($paths,$isDevmode,null,null,false);
        AnnotationRegistry::registerLoader('class_exists');
        $this->em = EntityManager::create($dbconfig, $config);
    }

}
<?php

use App\Models\ORM\Helpers\UserMailer;
use Slim\Container;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager as DoctrineEntityManager;
//
require_once ROOT_DIR.'/config/config.php';

//instanciamos contenedor
$container = new Container(
  $app_config
);

//gestor de entidades
$container['entity-manager']=function(Container $container){

  //Create a simple "default" Doctrine ORM configuration for Annotations
  $config = Setup::createAnnotationMetadataConfiguration(
    [
      ROOT_DIR.'/'.$container['doctrine']['entityPath']
    ], 
    $container['doctrine']['settings']['isDevMode'], 
    $container['doctrine']['settings']['proxyDir'], 
    $container['doctrine']['settings']['cache'], 
    $container['doctrine']['settings']['useSimpleAnnotationReader']
  );
  //conexion
  $conn = $container['doctrine']['conn'];

  //obtenemos gestor de entidades
  return DoctrineEntityManager::create($conn, $config);

};
//motor de plantilla
$container['twig']=function(Container $container){

  $view = new \Slim\Views\Twig(
    ROOT_DIR.'/'.$container['views']['dir'],
    $container['views']['config']
  );

  $router = $container->get('router');
  $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
  $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));
  return $view;

};

return $container;
<?php

use Slim\Container;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager as DoctrineEntityManager;
use App\OWM\EntityManager\BigQueryEntityManager;


require_once ROOT_DIR.'/config/config.php';


$container = new Container(
  $app_config
);

$container['entity-manager']=function(Container $container){

  $config = Setup::createAnnotationMetadataConfiguration(
    [
      ROOT_DIR.'/'.$container['doctrine']['entityPath']
    ], 
    $container['doctrine']['settings']['isDevMode'], 
    $container['doctrine']['settings']['proxyDir'], 
    $container['doctrine']['settings']['cache'], 
    $container['doctrine']['settings']['useSimpleAnnotationReader']
  );

  $conn = $container['doctrine']['conn'];

  return DoctrineEntityManager::create($conn, $config);

};

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


$container['owm-entity-manager']=function(Container $container){

  return new BigQueryEntityManager($container['google']['bigquery']);

};

return $container;
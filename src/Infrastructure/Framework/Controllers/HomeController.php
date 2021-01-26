<?php

namespace App\Infrastructure\Framework\Controllers;

use Psr\Container\ContainerInterface as ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Psr\Http\Message\ResponseInterface as ResponseInterface;
use Core\Infrastructure\Framework\Controllers\Controller as Controller;

//controlador de inicio
class HomeController extends Controller{

  public function __construct(ContainerInterface $container){

    $this->container=$container;
    $this->twig=$this->container['twig'];    
    $this->em = $this->container['entity-manager'];

  }

  public function index(RequestInterface $request, $response){

    $viewModel=[];
    $this->twig->render($response,'layouts/home/index.php',$viewModel);

  }

}


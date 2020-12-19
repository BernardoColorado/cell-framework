<?php
//
namespace App\Controllers;
//
use Psr\Container\ContainerInterface as ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Psr\Http\Message\ResponseInterface as ResponseInterface;
use Core\Controllers\Controller as Controller;

//controlador de inicio
class UserController extends Controller{

  public function __construct(ContainerInterface $container){

    //contenedor
    $this->container=$container;
    $this->twig=$this->container['twig'];
    
    //orm y entidades
    $this->entityManager = $this->container['entity-manager'];

  }

  public function login(RequestInterface $request, $response){

    //
    $viewModel=[];
    $this->twig->render($response,'layouts/home/index.php',$viewModel);

  }

}


<?php
//
namespace App\Infrastructure\Http\Controllers;
//
use Psr\Container\ContainerInterface as ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Psr\Http\Message\ResponseInterface as ResponseInterface;
use Core\Infrastructure\Http\Controllers\Controller as Controller;

//controlador de inicio
class IrisController extends Controller{

  public function __construct(ContainerInterface $container){

    //contenedor
    $this->container=$container;
    $this->twig=$this->container['twig'];
    //orm
    $this->entityManager = $this->container['entity-manager'];

  }

  public function index(RequestInterface $request, $response){

    $viewModel=[];
    $this->twig->render($response,'layouts/home/index.php',$viewModel);

  }

}


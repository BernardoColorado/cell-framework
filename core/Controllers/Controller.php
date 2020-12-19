<?php

namespace Core\Controllers;

use Psr\Container\ContainerInterface as ContainerInterface;
use Core\Controllers\ControllerInterface as ControllerInterface;

abstract class Controller implements ControllerInterface{

    //container main dependency
    protected $container;
    //usuario principal repositorio y modelo simple
    protected $entityManager;
    //inyeccion del contenedor de dependencias
    public abstract function __construct(ContainerInterface $container);

}

?>
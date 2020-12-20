<?php

namespace Core\Infrastructure\Http\Controllers;

use Psr\Container\ContainerInterface as ContainerInterface;
use Core\Infrastructure\Http\Controllers\ControllerInterface as ControllerInterface;

abstract class Controller implements ControllerInterface{

    protected $container;
    protected $entityManager;
    
    public abstract function __construct(ContainerInterface $container);

}

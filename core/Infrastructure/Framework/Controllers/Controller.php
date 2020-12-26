<?php

namespace Core\Infrastructure\Framework\Controllers;

use Psr\Container\ContainerInterface as ContainerInterface;
use Core\Infrastructure\Framework\Controllers\ControllerInterface as ControllerInterface;

abstract class Controller implements ControllerInterface{

    protected $container;
    protected $em;
    
    public abstract function __construct(ContainerInterface $container);

}

<?php

namespace Core\Infrastructure\Http\Controllers;
use Psr\Container\ContainerInterface as ContainerInterface;

interface ControllerInterface{
  
  public function __construct(ContainerInterface $container);

}
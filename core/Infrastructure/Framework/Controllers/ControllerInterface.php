<?php

namespace Core\Infrastructure\Framework\Controllers;
use Psr\Container\ContainerInterface as ContainerInterface;

interface ControllerInterface{
  
  public function __construct(ContainerInterface $container);

}
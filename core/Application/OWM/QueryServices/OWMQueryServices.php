<?php

namespace Core\Application\OWM\QueryServices;

use Core\Infrastructure\OWM\EntityManager\BaseOWMEntityManager;

abstract class OWMQueryService{

  protected $em;

  public abstract function __construct(BaseOWMEntityManager $em);
  public abstract function read(array $args):array;

}
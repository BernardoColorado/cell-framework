<?php

namespace Core\Application\OWM\Repositories;

use Core\Application\OWM\EntityManager\BaseOWMEntityManager;

abstract class BaseRepository{

  protected $em;

  public function __construct(BaseOWMEntityManager $em){

    $this->em = $em;
    
  }

  public abstract function findOne(string $id):array;
  public abstract function findAll(array $order=[],string $orientation='ASC'):array;

}
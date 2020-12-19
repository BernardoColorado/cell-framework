<?php

namespace Core\OWM\Repositories;

use Core\OWM\EntityManager\BaseBigQueryEntityManager;

abstract class BaseRepository{

  protected $em;

  public function __construct(BaseBigQueryEntityManager $em){

    $this->em = $em;
    
  }

  public abstract function find(string $id):array;
  public abstract function findAll(array $order=[]):array;

}
<?php

namespace Core\OWM\Repositories;

use Core\OWM\EntityManager\BaseBigQueryEntityManager;

abstract class BaseRepository{

  protected $em;

  public function __construct(BaseBigQueryEntityManager $em){

    $this->em = $em;
    
  }

  public abstract function findOne(string $id):array;
  public abstract function findAll(array $order=[],string $orientation='ASC'):array;

}
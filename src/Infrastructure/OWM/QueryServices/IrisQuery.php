<?php

namespace App\OWM\QueryServices;

use Core\Infrastructure\OWM\EntityManager\BaseOWMEntityManager;

class IrisFindAllQuery{

  protected $em;

  public function __construct(BaseOWMEntityManager $em){
    
    $this->em = $em;
    $this->repository = $this->em->createRepository('iris');

  }

  public function read($owmQueryTicket):array{

    return $this->repository->findAll();

  }

}
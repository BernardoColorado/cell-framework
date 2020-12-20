<?php

namespace App\OWM\QueryServices;

use Core\OWM\EntityManager\BaseBigQueryEntityManager;

class IrisFindAllQuery{

  protected $em;

  public function __construct(BaseBigQueryEntityManager $em){
    
    $this->em = $em;
    $this->repository = $this->em->createRepository('iris');

  }

  public function read($bigQueryQueryTicket):array{

    return $this->repository->findAll();

  }

}
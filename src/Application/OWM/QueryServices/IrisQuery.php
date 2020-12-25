<?php

namespace App\OWM\QueryServices;

use Core\Application\OWM\QueryServices\OWMQueryService;
use Core\Infrastructure\OWM\EntityManager\BaseOWMEntityManager;

class IrisFindAllQuery extends OWMQueryService{

  protected $em;

  public function __construct(BaseOWMEntityManager $em){
    
    $this->em = $em;
    $this->repository = $this->em->createRepository('iris');

  }

  public function read(array $args):array{

    return $this->repository->findAll();

  }

}
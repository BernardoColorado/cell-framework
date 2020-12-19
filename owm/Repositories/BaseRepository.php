<?php

namespace OWM\Repositories;

use OWM\EntityManager\BaseBigQueryEntityManager;

abstract class BaseRepository{

  protected $em;

  public function __construct(BaseBigQueryEntityManager $em){

    $this->em = $em;
    
  }


}
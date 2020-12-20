<?php

namespace App\OWM\QueryServices;

use Core\Infrastructure\OWM\EntityManager\BaseBigQueryEntityManager;

abstract class BigQueryQueryService{

  protected $em;

  public abstract function __construct(BaseBigQueryEntityManager $em);
  public abstract function read($queryTicket):array;

}
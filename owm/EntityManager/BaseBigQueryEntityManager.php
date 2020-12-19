<?php

namespace OWM\EntityManager;

use Google\Cloud\BigQuery\BigQueryClient;

abstract class BaseBigQueryEntityManager{

  public abstract function createRepository(string $table):?object;
  public abstract function query(string $query):?object;

}
 
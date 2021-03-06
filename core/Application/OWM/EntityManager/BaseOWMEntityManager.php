<?php

namespace Core\Application\OWM\EntityManager;

use Google\Cloud\BigQuery\BigQueryClient;

abstract class BaseOWMEntityManager{

  public abstract function createRepository(string $table):?object;

  public function query(string $sql):?object{

    $jobConfig = $this->bigQueryClient->query($sql);
    $job = $this->bigQueryClient->startQuery($jobConfig);

    $result = $job->queryResults();

    return $result;

  } 

}
 
<?php

namespace App\Application\OWM\QueryServiceMediators;

use Core\Application\Mediators\MediatorInterface;
use Core\Application\Mediators\ColleageInterface;

class BigQuerySampleMediator implements MediatorInterface{

  protected $colleages = [];

  public function subscribeColleage(string $label,ColleageInterface $colleage):void{
    $this->colleages[$label]=$colleage;
  }

}
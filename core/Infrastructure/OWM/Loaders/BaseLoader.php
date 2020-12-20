<?php

namespace Core\OWM\Loaders;

use Core\OWM\EntityManager\BaseBigQueryEntityManager;

abstract class BaseLoader{

  protected $em;

  public function __construct(BaseBigQueryEntityManager $em){

    $this->em = $em;
    
  }

  public abstract function setSchema($schema):void;
  public abstract function setFile($file):void;
  public abstract function setOptions():void;

}
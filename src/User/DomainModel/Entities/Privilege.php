<?php

namespace App\User\DomainModel\Entities;

abstract class Privilege{
  
  protected $id;
  protected $level;
  protected $name;

  public function setLevel(int $level):void{
    $this->level = $level;
  }
  public function getLevel():int{
    return $this->level;
  }
  public function setName(string $name):void{
    $this->name = $name;
  }
  public function getName():string{
    return $this->name;
  }

}

<?php

namespace App\User\DomainModel\Entities;

class Privilege{
  
  protected $id;
  protected $level;
  protected $name;

  public function __construct(int $id,int $level,string $name){
    $this->setId($id);
    $this->setLevel($level);
    $this->setName($name);
  }
  public function setId(int $id):void{
    $this->level = $id;
  }
  public function getId():int{
    return $this->id;
  }
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

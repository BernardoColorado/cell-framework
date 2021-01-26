<?php

namespace App\User\DomainModel\Entities;

abstract class Privilege{
  
  protected $id;
  protected $level;
  protected $name;
  protected $users=[];

  public abstract function setLevel(int $level):void;
  public abstract function getLevel():int;
  public abstract function setName(string $name):void;
  public abstract function getName():string;
  public abstract function getUsers():array;
  public abstract function addUser(User $user):void;

}

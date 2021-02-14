<?php

namespace App\User\DomainModel\Entities;
use DateTimeInterface;

abstract class User{

  protected $id;
  protected $nickname;
  protected $password;
  protected $createdDateTime;
  protected $privilege;

  public abstract function setEmail(string $email):void;
  public abstract function getEmail():string;
  public abstract function setNickname(string $nickname):void;
  public abstract function getNickname():string;
  public abstract function setPassword(string $password):void;
  public abstract function validatePassword(string $password):bool;
  public abstract function getCreatedDateTime():DateTimeInterface;
  public abstract function setPrivilege(Privilege $privilege):void;
  public abstract function getPrivilege():Privilege;

}
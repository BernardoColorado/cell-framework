<?php

namespace App\DomainModel\Entities;
use DateTimeInterface;

class User{

  protected $id;
  protected $nickname;
  protected $password;
  protected $createdDateTime;

  public function setNickname(string $nickname):void{
    $this->nickname = $nickname;
  }
  public function getNickname():string{
    return $this->nickname;
  }
  public function setPassword(string $password):void{
    $this->password=password_hash($password,PASSWORD_BCRYPT,['cost'=>10]);
  }
  public function validatePassword(string $password):bool{
    return password_verify($password,$this->password);
  }
  public function getCreatedDateTime():DateTimeInterface{
    return $this->createdDateTime;
  }

}
<?php

namespace App\Infrastructure\Doctrine\Entities;
use App\DomainModel\Entities\User;
use DateTimeInterface;

class DoctrineUser extends User{

  protected $id;
  protected $nickname;
  protected $password;
  protected $createdDateTime;

  public function __construct(string $nickname,string $password){

    $this->setNickname($nickname);
    $this->setPassword($password);

  }

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
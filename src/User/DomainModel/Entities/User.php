<?php

namespace App\User\DomainModel\Entities;
use DateTimeInterface;

class User{

  protected $id;
  protected $nickname;
  protected $password;
  protected $createdDateTime;
  protected $privilege;

  public function __construct(int $id=null,string $nickname=null,string $email=null,string $password=null,DateTimeInterface $createdDateTime=null,Privilege $privilege=null){
    $this->setId($id);
    $this->setNickname($nickname);
    $this->setEmail($email);    
    $this->setPassword($password);
    $this->setCreatedDateTime($createdDateTime);
    $this->setPrivilege($privilege);
  }
  public function setId(int $id):void{
    $this->id = $id;
  }
  public function getId():int{
    return $this->id;
  }
  public function setEmail(string $email):void{
    $this->email = $email;
  }
  public function getEmail():string{
    return $this->email;
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
  public function setCreatedDateTime(DateTimeInterface $createdDateTime):void{
    $this->createdDateTime = $createdDateTime;
  }
  public function getCreatedDateTime():DateTimeInterface{
    return $this->createdDateTime;
  }
  public function setPrivilege(Privilege $privilege):void{
    $this->privilege = $privilege;
  }
  public function getPrivilege():Privilege{
    return $this->privilege;
  }

}
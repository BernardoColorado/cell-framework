<?php

namespace App\User\Infrastructure\Doctrine\Entities;
use App\User\DomainModel\Entities\User;
use DateTimeInterface;
/**
 * @ORM\Table(name="users")
 */
class DoctrineUser extends User{
  /** 
   * @ORM\Id
   * @ORM\Column(type="integer", name="id")
   * @ORM\GeneratedValue
   */
  protected $id;
  /** 
   * @ORM\Column(type="string", length=64, name="nickname", unique=true) 
   */
  protected $nickname;
  /** 
   * @ORM\Column(type="string", length=256, name="nickname", unique=true) 
   */
  protected $password;
  /**
   * @ORM\Column(name="created_at", type="datetime", options={"default": "CURRENT_TIMESTAMP"})
   */
  protected $createdDateTime;

  public function __construct(
    string $nickname,
    string $email,
    string $password
    ){
    $this->setNickname($nickname);
    $this->setEmail($email);    
    $this->setPassword($password);
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
  public function getCreatedDateTime():DateTimeInterface{
    return $this->createdDateTime;
  }

}
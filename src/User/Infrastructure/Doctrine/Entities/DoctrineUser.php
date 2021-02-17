<?php

namespace App\User\Infrastructure\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;
use App\User\DomainModel\Entities\Privilege;
use App\User\DomainModel\Entities\User;
use DateTimeInterface;
/**
 * @ORM\Entity(repositoryClass="App\User\Infrastructure\Doctrine\Repositories")
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
   * @ORM\Column(type="string", length=256, name="nickname", unique=true) 
   */
  protected $nickname;
  /** 
   * @ORM\Column(type="string", length=256, name="email", unique=true) 
   */
  protected $email;
  /** 
   * @ORM\Column(type="string", length=256, name="password") 
   */
  protected $password;
  /**
   * @ORM\Column(name="created_at", type="datetime", options={"default": "CURRENT_TIMESTAMP"}) 
   */
  protected $createdDateTime;
  /**
   * @ORM\ManyToOne(targetEntity="DoctrinePrivilege", inversedBy="users")
   * @ORM\JoinColumn(name="id_privilege",referencedColumnName="id", onDelete="CASCADE")
   */
  protected $privilege;

  public function __construct(int $id=null,string $nickname=null,string $email=null,string $password=null,DateTimeInterface $createdDateTime=null,Privilege $privilege=null){
    parent::__construct($id,$nickname,$email,$password,$createdDateTime,$privilege);
  }

}
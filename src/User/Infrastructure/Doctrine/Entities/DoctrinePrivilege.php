<?php

namespace App\User\Infrastructure\Doctine\Entities;

use Doctrine\ORM\Mapping as ORM;
use App\User\DomainModel\Entities\Privilege;
/**
 * @ORM\Entity(repositoryClass="App\User\Infrastructure\Doctrine\Repositories")
 * @ORM\Table(name="privileges")
 */
abstract class DoctrinePrivilege extends Privilege{
  /** 
   * @ORM\Id
   * @ORM\Column(type="integer", name="id")
   * @ORM\GeneratedValue
   */
  protected $id;
  /** 
   * @ORM\Column(type="integer", name="level", unique=true) 
   */
  protected $level;
  /** 
   * @ORM\Column(type="string", length=256, name="name", unique=true) 
   */
  protected $name;

  public function __construct(int $id,int $level,string $name){
    parent::__construct($id,$level,$name);
  }

}

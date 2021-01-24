<?php

namespace App\Infrastructure\Doctrine\Entities;
use App\DomainModel\Entities\User;
use DateTimeInterface;

class DoctrineUser extends User{

  protected $id;
  protected $nickname;
  protected $password;
  protected $createdDateTime;

}
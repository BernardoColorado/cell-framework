<?php

namespace App\DomainModel\Repositories;

use App\DomainModel\Entities\User;

abstract class UserRepository{

  public abstract function findOneByNickname(string $nickname):User;
  public abstract function findOneByEmail(string $email):User;
  public abstract function findAll(array $order):array;
  
}
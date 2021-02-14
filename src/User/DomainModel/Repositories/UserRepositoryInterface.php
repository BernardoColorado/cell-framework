<?php

namespace App\User\DomainModel\Repositories;

use App\User\DomainModel\Entities\User;

interface UserRepositoryInterface{

  public function findOneByNickname(string $nickname):?User;
  public function findOneByEmail(string $email):?User;
  public function alreadyExists(string $nickname,string $email):bool;
  public function save(User $user):void;

}
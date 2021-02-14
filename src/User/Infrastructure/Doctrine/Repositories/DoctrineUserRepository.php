<?php

namespace App\User\Infrastructure\Doctrine\Repositories;

use Doctrine\ORM\EntityRepository as Repository;
use App\User\DomainModel\Repositories\UserRepositoryInterface as UserRepositoryInterface;
use App\User\DomainModel\Entities\User as User;

class DoctrineUserRepository extends Repository implements UserRepositoryInterface{

  public function findOneByNickname(string $nickname):?User{

    $doctrineUser = $this->findOneBy(['nickname'=>$nickname]);

    if(!isset($doctrineUser)){

      return null;

    }

    else{

      $user = new User();

      $user->setId($doctrineUser->getId());
      $user->setNickname($doctrineUser->getNickname());
      $user->setEmail($doctrineUser->getEmail());
      $user->setPrivilege($doctrineUser->getPrivilege());
      $user->setCreatedDateTime($doctrineUser->getCreatedDateTime());
      $user->setPrivilege($doctrineUser->getPrivilege());

      return $user;

    }

  }
  public function findOneByEmail(string $email):?User{

    $doctrineUser = $this->findOneBy(['nickname'=>$email]);

    if(!isset($doctrineUser)){

      return null;

    }

    else{

      $user = new User();

      $user->setId($doctrineUser->getId());
      $user->setNickname($doctrineUser->getNickname());
      $user->setEmail($doctrineUser->getEmail());
      $user->setPrivilege($doctrineUser->getPrivilege());
      $user->setCreatedDateTime($doctrineUser->getCreatedDateTime());
      $user->setPrivilege($doctrineUser->getPrivilege());

      return $user;

    }

  }
  public function alreadyExists(string $nickname,string $email):bool{
    return false;
  }
  public function save(User $user):void{
    $em = $this->getEntityManager();
    $em->persist($user);
    $em->flush();
  }
}

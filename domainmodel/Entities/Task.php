<?php

namespace DomainModel\Entities;
use DomainModel\Entities\User;
use DateTimeInterface;

class Task{

  protected $id;
  protected $title;
  protected $description;
  protected $createdDateTime;
  protected $user;

  public function setTitle(string $title):void{
    $this->title = $title;
  }
  public function getTitle():string{
    return $this->title;
  }

  public function setUser(User $user):void{
    $this->user = $user;
  }

  public function getUser():User{
    return $this->user;
  }

}
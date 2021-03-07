<?php

namespace User\Application\Services;
use App\DomainModel\Factories\UserFactory;

class UserSigninService{

  protected $em;
  protected $factory;
  protected $repository;

  public function __construct($em){

    $this->em = $em;
    
  }
  
  public function execute(array $payload):void{

    

  }

}
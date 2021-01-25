<?php

namespace App\DomainModel\Factories;

use App\User\DomainModel\Entities\User;

abstract class UserFactory{

  public abstract function create():User;

}
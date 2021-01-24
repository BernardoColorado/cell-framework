<?php

namespace App\DomainModel\Factories;

use App\DomainModel\Entities\User;

abstract class UserFactory{

  public abstract function create():User;

}
<?php

namespace Http\Validators;

use Http\Dtos\CleanRequestInterface;
use Http\Dtos\RequestErrorsInterface;

interface RequestValidatorInterface{

  public function validateFields():bool;
  public function getValidationErrors():RequestErrorsInterface;
  public function getCleanRequest():CleanRequestInterface;
  
}
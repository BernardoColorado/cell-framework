<?php

namespace Core\Infrastructure\Framework\Validators;

use Core\Infrastructure\Framework\Dtos\CleanRequestInterface;
use Core\Infrastructure\Framework\Dtos\RequestErrorsInterface;

interface RequestValidatorInterface{

  public function validateFields():bool;
  public function getValidationErrors():RequestErrorsInterface;
  public function getCleanRequest():CleanRequestInterface;
  
}
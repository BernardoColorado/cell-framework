<?php

namespace Core\Validators;

use Core\Dtos\RequestErrorsInterface;
use Core\Dtos\CleanRequestInterface;

interface RequestValidatorInterface{

  public  function validateFields():bool;
  public  function getValidationErrors():?RequestErrorsInterface;
  public  function getCleanRequest():CleanRequestInterface;

}
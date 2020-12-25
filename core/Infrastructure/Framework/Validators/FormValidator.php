<?php

namespace Http\Validators;

use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Http\Dtos\CleanRequestInterface;
use Http\Dtos\RequestErrorsInterface;

abstract class FormValidator implements RequestValidatorInterface{

  public abstract function setRequest(RequestInterface $request):void;
  public abstract function validateFields():bool;
  public abstract function getValidationErrors():RequestErrorsInterface;
  public abstract function getCleanRequest():CleanRequestInterface;
  
}
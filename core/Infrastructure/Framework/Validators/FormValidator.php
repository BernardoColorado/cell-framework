<?php

namespace Core\Infrastructure\Framework\Validators;

use Psr\Http\Message\ServerRequestInterface as RequestInterface;

use Core\Infrastructure\Framework\Dtos\CleanRequestInterface;
use Core\Infrastructure\Framework\Dtos\RequestErrorsInterface;


abstract class FormValidator implements RequestValidatorInterface{

  public abstract function setRequest(RequestInterface $request):void;
  public abstract function validateFields():bool;
  public abstract function getValidationErrors():RequestErrorsInterface;
  public abstract function getCleanRequest():CleanRequestInterface;
  
}
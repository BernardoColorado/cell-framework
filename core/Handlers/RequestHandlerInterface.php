<?php

namespace Core\Handlers;

use Core\Dtos\Errors\RequestErrorsInterface;
use Core\Validators\RequestValidatorInterface;

interface RequestHandlerInterface{

  public function setValidator(RequestValidatorInterface $validator):void;
  public function setErrorHandler(ErrorHandlerInterface $errorHandler):void;
  public function setTicketFactory($ticketFactory):void;

}
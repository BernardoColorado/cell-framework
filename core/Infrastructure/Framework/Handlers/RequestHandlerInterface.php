<?php

namespace Core\Handlers;

use Http\Validators\RequestValidatorInterface;

interface RequestHandlerInterface{

  public function setValidator(RequestValidatorInterface $validator):void;
  public function setTicketFactory($ticketFactory):void;

}
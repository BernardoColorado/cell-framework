<?php

namespace Core\Infrastructure\Framework\Handlers;

use Core\Infrastructure\Validators\RequestValidatorInterface;

interface RequestHandlerInterface{

  public function setValidator(RequestValidatorInterface $validator):void;
  public function setTicketFactory($ticketFactory):void;

}
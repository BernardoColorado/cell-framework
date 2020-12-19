<?php

namespace Core\Handlers;

use Core\Dtos\RequestErrorsInterface;
use Core\Dtos\ServiceErrorsInterface;
use Core\Dtos\QueryErrorsInterface;

interface ErrorHandlerInterface{

  public function setQueryErrors(QueryErrorsInterface $queryErrors):void;
  public function setRequestErrors(RequestErrorsInterface $requestErrors):void;
  public function setServiceErrors(ServiceErrorsInterface $serviceErrors):void;

}
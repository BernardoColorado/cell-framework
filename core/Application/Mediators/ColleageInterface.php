<?php

namespace Core\Application\Mediators;

interface ColleageInterface{

  public function subscribeMediator(MediatorInterface $mediator):void;
  
}
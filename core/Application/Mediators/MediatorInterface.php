<?php

namespace Core\Application\Mediators;

interface MediatorInterface{

  public function subscribeColleage(string $label,ColleageInterface $colleage):void;

}
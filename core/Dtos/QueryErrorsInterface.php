<?php

namespace Core\Dtos;

interface QueryErrorsInterface{
  
  public function setErrors(array $errors):void;
  public function getErrors():array;

}
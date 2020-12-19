<?php

namespace Core\Dtos;

interface ServiceErrorsInterface{

  public function setErrors(array $errors):void;
  public function getErrors():array;

}
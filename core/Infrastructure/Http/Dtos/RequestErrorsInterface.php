<?php

namespace Http\Dtos;

interface RequestErrorsInterface{
  
  public function setErrors(array $errors):void;
  public function getErrors():array;

}
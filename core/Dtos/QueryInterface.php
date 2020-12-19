<?php

namespace Core\Dtos\Errors;

interface QueryInterface{

  public function getLabel():string;
  public function getArguments():?array;

}
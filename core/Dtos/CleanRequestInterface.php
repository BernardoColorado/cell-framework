<?php

namespace Core\Dtos;

interface CleanRequestInterface{

  public function setFields(array $fields):void;
  public function getFields():array;
  
}
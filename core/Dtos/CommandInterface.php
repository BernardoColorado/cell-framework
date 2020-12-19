<?php

namespace Core\Dtos;

interface CommandInterface{

  public function setTask(object $task):void;
  public function getTask():object;
  public function getLabel():string;

}
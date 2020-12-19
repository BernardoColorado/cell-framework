<?php

namespace Core\Services;

interface CommandServiceInterface{

  public function execute($task):void;

}
<?php

namespace Core\Infrastructure\Framework\Presenters;

interface PresenterInterface{

  public function setViewModel(string $label,array $model):void;

}
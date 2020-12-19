<?php
namespace Core\Observers;
use Core\Observers\ObserverInterface;

interface SubjectInterface{
  public function subscibe(ObserverInterface $observer):void;
  public function notify():void;
}
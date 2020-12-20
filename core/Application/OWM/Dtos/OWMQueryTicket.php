<?php

namespace Core\Application\OWM\Dtos;

class OWMQueryTicket{

  protected $args;
  protected $domain;
  protected $subdomain;
  protected $operation;

  public function __construct(string $domain=null,string $subdomain=null, string $operation=null,array $args=[]){
    
    $this->domain =$domain;
    $this->subdomain = $subdomain;
    $this->operation = $operation;
    $this->args = $args;

  }

  public function setDomain(string $domain):void{
    $this->domain = $domain;
  }

  public function getDomain():?string{
    return $this->domain;
  }

  public function setSubdomain(string $subdomain):void{
    $this->subdomain = $subdomain;
  }

  public function getSubdomain():string{
    return $this->domain;
  }

  public function setOperation(string $operation):void{
    $this->operation = $operation;
  }

  public function getOperation():string{
    return $this->operation;
  }

  public function setArgs(array $args):void{
    $this->args = $args;
  }

  public function getArgs():?array{
    return $this->args;
  }

}
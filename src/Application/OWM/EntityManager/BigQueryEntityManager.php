<?php

namespace App\Application\OWM\EntityManager;

use App\Application\OWM\Repositories\IrisRepository;
use Core\Application\OWM\EntityManager\BaseOWMEntityManager;
use Google\Cloud\BigQuery\BigQueryClient;

class OWMEntityManager extends BaseOWMEntityManager{

  protected static $instance = null;
  protected static $repositories = [];
  protected $bigQueryClient;
   
  //protected constructor
  public function __construct(array $settings){
    $this->bigQueryClient = new BigQueryClient($settings);
  }

  //singleton function
  public static function instanciate(array $settings):self{

    if (!isset(self::$instance)) {
      self::$instance = new self($settings);
    }
    return self::$instance;

  }

  //table repo pool
  public function createRepository(string $table):?object{

    switch ($table) {
      case 'iris':
        if(!isset(self::$repositories['iris'])){
          self::$repositories['iris'] = new IrisRepository(self::$instance);
        }
        return self::$repositories['iris'];
        break;
      
      default:
        return null;
        break;
    }

  }

}
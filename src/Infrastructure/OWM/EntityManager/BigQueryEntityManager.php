<?php

namespace App\OWM\EntityManager;

use App\Repositories\IrisRepository;
use Core\OWM\EntityManager\BaseBigQueryEntityManager;
use Google\Cloud\BigQuery\BigQueryClient;

class BigQueryEntityManager extends BaseBigQueryEntityManager{

  //single instance
  protected static $instance = null;
  //repo pool
  protected static $repositories = [];
  //nested BQ client
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
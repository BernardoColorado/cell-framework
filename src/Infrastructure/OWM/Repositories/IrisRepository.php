<?php 

namespace App\Repositories;

use Core\OWM\EntityManager\BaseBigQueryEntityManager;
use Core\OWM\Repositories\BaseRepository;

class IrisRepository extends BaseRepository{

  protected $em = null;

  public function __construct(BaseBigQueryEntityManager $em){

    $this->em = $em;
    
  }

  public function findOne(string $id):array{

    return [];

  }

  public function findAll(array $order=[],string $orientation='ASC'):array{

    $orders=implode(',',$order);
    $sql = "SELECT * FROM `sample_dwh.iris` ORDER BY $orders $orientation;";
    $result = $this->em->query($sql);
    $result->rows();

    $rows=[];

    foreach ($result->rows() as $row){
      
      $rows[]=$row;

    }

    return $rows;

  }

}



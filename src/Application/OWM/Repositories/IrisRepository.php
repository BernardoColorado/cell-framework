<?php 

namespace App\Application\OWM\Repositories;

use Core\Application\OWM\EntityManager\BaseOWMEntityManager;
use Core\Application\OWM\Repositories\BaseRepository;

class IrisRepository extends BaseRepository{

  protected $em = null;

  public function __construct(BaseOWMEntityManager $em){

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



<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentModel extends Model
{
    public function getData()
    {
        $query= $this->db->query("SELECT * FROM equipment");
        return $query->getResult();
    }
    // protected $table      = 'equipment';
    // protected $primaryKey = 'id';

    // // protected $useAutoIncrement = true;

    // protected $returnType     = 'object';
    // // protected $useSoftDeletes = true; 

    // protected $allowedFields = ['nolambung', 'status','waktu','driver', 'id_project'];



    // public function getEquipment($slug=false)
    // {
    //     if($slug== false){
    //         return $this->findAll();
    //     }
    //     return $this->where([
    //         'id'=>$slug
    //     ])->first();
    // }

}

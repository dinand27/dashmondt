<?php

namespace App\Controllers;
use App\Models\EquipmentModel;

class Home extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        $query= $db->query("SELECT * FROM equipment WHERE id_project = 1");
        $data= $query->getResultArray();

        $query2= $db->query("SELECT * FROM equipment WHERE id_project = 2");
        $data2= $query2->getResultArray();

        $query3= $db->query("SELECT * FROM equipment WHERE id_project = 3");
        $data3= $query3->getResultArray();

        $query4= $db->query("SELECT * FROM equipment WHERE id_project = 4");
        $data4= $query4->getResultArray();


        $row= array(
            'title' => 'Tampil data Dashboard',
            'kkbm' =>$data,
            'kbdm' => $data2,
            'rbdm' => $data3,
            'rkbm' => $data4,

        );        
        
        return view('home', $row);
    }


    
    
}

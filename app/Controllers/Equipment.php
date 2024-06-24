<?php

namespace App\Controllers;
use App\Models\EquipmentModel;

class Equipment extends BaseController
{
    protected $modelUnit;
    
    public function __construct()
    {
        $this->modelUnit= new EquipmentModel();
    }


    public function index()
    {

        $getData = $this->modelUnit->getData();
        $data= array(
            'title' => 'All Data Equipment',
            'dataUnit' => $getData,
        );

        return view('equipment/index', $data);
    }

    public function detail($slug)
    {
        $unitmodel = new EquipmentModel();
        $data= [
            'title'=>'Detail Unit',
            'dataunit'=>$unitmodel->getEquipment($slug)
        ];
        // dd($data);
        return view('equipment/detail', $data);
        
    }
    
    public function get_all()
    {
        $eModel = new EquipmentModel() ;
        $data = $eModel->findAll();
        dd($data);

        return view('equipment/alldata',[
            'title' => 'All data Dumptruck',
            'Alldata' => 'alldatya',
        ]);
    }
}

?>
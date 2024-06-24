<?php

namespace App\Controllers;
use App\Models\EquipmentModel;

class Equipment extends BaseController
{
    // protected $modelUnit;
    // protected $table;
    
    // public function __construct()
    // {

    //     $this->modelUnit= new EquipmentModel();
    // }


    public function index()
    {

        // $getData = $this->modelUnit->getData();
        // $data= array(
        //     'title' => 'All Data Equipment',
        //     'dataUnit' => $getData,
        // );
        $equipmodel = new EquipmentModel();
        $getAlldata = $equipmodel->findAll();
        $data = array(
            'dataUnit' => $getAlldata,
            'title' => 'Alldata',
        );

        return view('equipment/index', $data);
    }

    public function create_data()
    {
        return view('equipment/create_data');

    }


    public function storing()
    {
        $equipmodel = new EquipmentModel();
        $equipmodel->insert($this->request->getPost());
        return redirect()->to(base_url('equipment'));

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
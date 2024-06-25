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
        $data = array(
            'title' => 'Create Data'
        );
        return view('equipment/create_data', $data);

    }


    public function storing()
    {
        $equipmodel = new EquipmentModel();
        $equipmodel->insert($this->request->getPost());
        return redirect()->to(base_url('equipment'));

    }


    public function formEditData($id= false)
    {
        $equipmodel = new EquipmentModel();
        $data_id = $equipmodel->find($id);
        $data= array(
            'detail' => $data_id,
            'title' => 'Edit Data Equipment'
        );

        return view('equipment/detail', $data);
    }

    public function prosesdata()
    {
        $equipmodel = new EquipmentModel();
        $equipmodel->update($this->request->getPost('id_unit'), $this->request->getPost());
        return redirect()->to(base_url('equipment'));

    }

    public function hapusdata($id=false)
    {
        $equipmodel = new EquipmentModel();
        $equipmodel->delete($id);
        return redirect()->to(base_url('equipment'));
    }

    
    public function data_dashboard()
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
        return view('tampildata',$row);
    }
    

}

?>
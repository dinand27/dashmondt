<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    protected $table      = 'project';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['nm_project', 'description'];



}

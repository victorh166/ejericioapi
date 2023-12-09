<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Apit extends ResourceController
{
    protected $modelName = 'App\Models\PersonasModel'; 

    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }

}


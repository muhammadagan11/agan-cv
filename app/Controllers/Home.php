<?php

namespace App\Controllers;

use App\Models\BiografiModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new BiografiModel();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}
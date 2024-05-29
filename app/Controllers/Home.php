<?php

namespace App\Controllers;

use App\Models\MyModel;

class Home extends BaseController
{

    public function index()
    {
        $model = new MyModel();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}

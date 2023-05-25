<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MapsModel;

class Maps extends BaseController
{
    public function index()
    {
        $model = new MapsModel();
        $data = [
            'title' => 'GeoMaps | First Project CI',
            'mapsData' => $model->getRegenciesCustom()
        ];
        // dd($model->getRegenciesCustom());
        return view('maps/index', $data);
        // echo "Controller Maps Method Index";
    }
}

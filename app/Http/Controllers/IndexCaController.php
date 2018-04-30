<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class IndexCaController extends Controller
{
    public function indexCa()
    {
        return view('index-ca');
    }
}
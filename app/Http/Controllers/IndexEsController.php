<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class IndexEsController extends Controller
{
    public function indexEs()
    {
        return view('index-es');
    }
}
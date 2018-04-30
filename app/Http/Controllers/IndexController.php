<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class IndexController extends Controller
{
    public function index()
    {
       return view('index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class IndexController extends Controller
{
    public function index()
    {
        $company = Company::find(1);
        
        //dump($company);
        

        return view('index');
    }
}
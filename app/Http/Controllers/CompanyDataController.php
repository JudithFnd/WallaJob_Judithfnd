<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class CompanyDataController extends Controller
{
    public function companyData()
    {
       return view('company_data');
    }
}
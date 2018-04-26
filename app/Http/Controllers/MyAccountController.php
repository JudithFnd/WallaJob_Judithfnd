<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class MyAccountController extends Controller
{
    public function myAccount()
    {
        $company = Company::find(1);
        
        //dump($company);
        

        return view('my-account');
    }
}
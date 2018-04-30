<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class MyAccountController extends Controller
{
    public function myAccount()
    {
        return view('my-account');
    }
}
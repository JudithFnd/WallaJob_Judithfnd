<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class ChangePassword extends Controller
{
    public function changePassword()
    {
        return view('change-password');
    }
}
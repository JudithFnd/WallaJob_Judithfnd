<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Users;

class AccountsController extends Controller
{
    public function accountProfessional()
    {
       return view('account_professional');
    }
}
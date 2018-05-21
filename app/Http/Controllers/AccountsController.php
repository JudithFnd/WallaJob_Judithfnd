<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\CompanyOffers;

class AccountsController extends Controller
{
    public function accountProfessional()
    {
       return view('account_professional');
    }

    public function accountCompany()
    {
       return view('account_company');
    }
}
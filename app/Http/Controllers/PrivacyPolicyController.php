<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class PrivacyPolicyController extends Controller
{
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
}
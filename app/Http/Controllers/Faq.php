<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class Faq extends Controller
{
    public function faq()
    {
        return view('faq');
    }
}
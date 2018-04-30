<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class AboutController extends Controller
{
    public function about()
    {
        return view('about');
    }
}
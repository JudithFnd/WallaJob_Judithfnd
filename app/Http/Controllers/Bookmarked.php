<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class Bookmarked extends Controller
{
    public function bookmarked()
    {
        return view('bookmarked');
    }
}
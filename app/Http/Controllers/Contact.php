<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class Contact extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
    }
}
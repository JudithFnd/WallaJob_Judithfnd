<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Company;

class NotificationsController extends Controller
{
    public function notifications()
    {
        return view('notifications');
    }
}
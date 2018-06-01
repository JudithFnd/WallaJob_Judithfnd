<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\CompanyOffers;

class IndexController extends Controller
{
    public function index()
    {
        $offers = CompanyOffers::all();
       return view('index',  ['companyOffers' => $offers], ['offerCategories' => Category::all()]);
    }
    
}
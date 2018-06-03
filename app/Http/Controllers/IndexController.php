<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\CompanyOffers;
use App\PublicationsProfessional;

class IndexController extends Controller
{
    public function index()
    {
        $offers = CompanyOffers::all();        
        $users = User::all();
        $publicationsProfessionals = PublicationsProfessional::all();                

       return view('index',  ['users' => $users,                               
                              'companyOffers' => $offers, 
                              'publicationsProfessionals' => $publicationsProfessionals,
                              'offerCategories' => Category::all()
                              ]);
    }  

}
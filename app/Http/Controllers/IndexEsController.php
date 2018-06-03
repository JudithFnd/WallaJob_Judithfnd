<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\CompanyOffers;
use App\PublicationsProfessional;


class IndexEsController extends Controller
{
    public function indexEs()
    {
        $offers = CompanyOffers::all();        
        $users = User::all();
        $publicationsProfessionals = PublicationsProfessional::all();
        
       return view('index-es',  ['users' => $users,                               
                              'companyOffers' => $offers, 
                              'publicationsProfessionals' => $publicationsProfessionals,
                              'offerCategories' => Category::all()
                              ]);
    }
}
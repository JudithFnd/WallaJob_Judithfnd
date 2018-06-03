<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Category;
use App\CompanyOffers;
use App\PublicationsProfessional;


class IndexCaController extends Controller
{
    public function indexCa()
    {
        $offers = CompanyOffers::all();        
        $users = User::all();
        $publicationsProfessionals = PublicationsProfessional::all();
        
       return view('index-cat',  ['users' => $users,                               
                              'companyOffers' => $offers, 
                              'publicationsProfessionals' => $publicationsProfessionals,
                              'offerCategories' => Category::all()
                              ]);
    }
}
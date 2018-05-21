<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\CompanyOffers;

class CompanyOfferController extends Controller
{
    public function companyOffer()
    {
       return view('company_offer', ['offerCategories' => Category::all()]);
    }
    
    public function store(Request $request)
    {    
        $this->validate(request(), [
            'name' => 'required',
            'vacancies' => 'required',
            'status' => 'required'
        ]);

        $offer = new CompanyOffers;
        $offer->id_company = $request->id_company;
        $offer->name = $request->name;
        $offer->description = $request->description;
        //$offer->publication_date = null;
        $offer->vacancies = $request->vacancies;
        $offer->id_category = $request->id_category;
        $offer->status = $request->status;
        $offer->salary = $request->salary;

        $offer->save(); 
        // un altre forma de fer-ho  CompanyOffers::create($request->all());
           //dump($offer);
        return view('account_company'); // compact per imprimir               

    }

}
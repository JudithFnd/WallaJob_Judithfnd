<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\PublicationsProfessional;

class PublicationProfessionalController extends Controller
{
    public function publicationProfessional() // create publication professonal view
    {
       return view('publication_professional', ['offerCategories' => Category::all()]);
    }
    
    public function store(Request $request) // store the data publication
    {    
        $this->validate(request(), [
            'name' => 'required',           
            'status' => 'required'
        ]);

        $publication = new PublicationsProfessional;
        $publication->id_professional = $request->id_professional;
        $publication->name = $request->name;
        $publication->short_description = $request->short_description;
        $publication->description = $request->description;
        $publication->id_category = $request->id_category;
        $publication->city = $request->city;
        $publication->status = $request->status;
        $publication->price = $request->price;

        $publication->save(); 
        

        return view('account_professional'); // compact per imprimir               

    }
    
    public function publishedOffers() // published offers view
    {
        $offers = CompanyOffers::all();
       return view('offers', ['companyOffers' => $offers], ['offerCategories' => Category::all()]);
    }

    public function show($id)
    {
        $offerDetails = CompanyOffers::find($id);
        return view('show_offer', ['offerDetails' => $offerDetails], ['offerCategories' => Category::all()]);
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UsersProfessionals;
use App\Category;
use App\PublicationsProfessional;

class PublicationProfessionalController extends Controller
{
    public function publicationProfessional() // create publication professional view
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
        $publication->type_professional = $request->type_professional;
        $publication->short_description = $request->short_description;
        $publication->description = $request->description;
        $publication->id_category = $request->id_category;
        $publication->city = $request->city;
        $publication->status = $request->status;
        $publication->price = $request->price;

        $publication->save(); 
        

        return view('account_professional'); // compact per imprimir               

    }
    
    public function publishedProfessionals() // published offers view
    {
        $publications = PublicationsProfessional::all();
       return view('publications', ['publicationsProfessionals' => $publications, 'offerCategories' => Category::all()]);
    }

    public function show($id) // show publication
    {
        $publicationDetails = PublicationsProfessional::find($id);
        $user = $publicationDetails->user; 
        $professionalUser = $user->userProfessional;
        return view('show_publication',  ['professionalUser' => $professionalUser,  'publicationDetails' => $publicationDetails, 'offerCategories' => Category::all()]);
    }

    public function contactProfessional($id) // contact professional
    {        
        
        $user = User::find($id);
        $professionalUser = $user->userProfessional;                        
        return view('contact_professional', ['userInformation' => $user, 'professionalInformation' => $professionalUser]);
    }
}
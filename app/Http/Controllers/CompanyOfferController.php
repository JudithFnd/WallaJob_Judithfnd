<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\CompanyOffers;
use App\OfferInscriptions;
use Illuminate\Support\Facades\Auth;


class CompanyOfferController extends Controller
{
    public function companyOffer() // create company offer view
    {
       return view('company_offer', ['offerCategories' => Category::all()]);
    }
    
    public function store(Request $request) // store the data offers
    {    
        $this->validate(request(), [
            'name' => 'required',
            'vacancies' => 'required',
            'status' => 'required'
        ]);

        $offer = new CompanyOffers;
        $offer->id_company = $request->id_company;
        $offer->name = $request->name;
        $offer->work_schedule = $request->work_schedule;
        $offer->short_description = $request->short_description;
        $offer->description = $request->description;
        //$offer->publication_date;
        $offer->vacancies = $request->vacancies;
        $offer->id_category = $request->id_category;
        $offer->city = $request->city;
        $offer->status = $request->status;
        $offer->salary = $request->salary;

        $offer->save(); 
        // un altre forma de fer-ho  CompanyOffers::create($request->all());

        return view('account_company'); // compact per imprimir               

    }
    
    public function publishedOffers() // published offers view
    {
        $offers = CompanyOffers::all();
       return view('offers', ['companyOffers' => $offers, 'offerCategories' => Category::all()]);
    }

    public function show(Request $request, $id)
    {
        $flashMessage = $request->session()->get('inscription_status');
        
        $offerDetails = CompanyOffers::find($id);
        
        return view('show_offer', ['offerDetails' => $offerDetails, 'offerCategories' => Category::all()]);
    }

    public function inscribe(Request $request, $offerId)
    { 
        $inscription = new OfferInscriptions;          
        $inscription->id_professional =  Auth::user()->userProfessional->id;
        $inscription->id_offer = $offerId;
        $inscription->save();

        $request->session()->flash('inscription_status', 'You have been subscribed succesfully');

        return redirect()->route('show_offer', ['id' => $offerId]);
    }

}
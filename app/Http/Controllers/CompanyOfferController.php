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

        $statusMessage = 'You are already subscribed to this offer';
        $cssClass = 'alert-danger';

        $user = Auth::user();
        
        if ($user->type_user === 1) { // check tpe user
            $statusMessage = 'Companies cant subscribe to offers';    
        } else {
            $professionalUserId = $user->userProfessional->id;
            $offer = OfferInscriptions::where('id_offer','=', $offerId)
                                      ->where('id_professional','=', $professionalUserId)
                                      ->get();
            
            if ($offer->isEmpty()) { // if this user don't have a subscription in the offer, save the subscription in db
                $inscription = new OfferInscriptions;          
                $inscription->id_professional =  $professionalUserId;
                $inscription->id_offer = $offerId;
                $inscription->save();
                $statusMessage = 'You have been subscribed succesfully';
                $cssClass = 'alert-success';
            } 
        }       

        $request->session()->flash('inscription_status', $statusMessage);
        $request->session()->flash('inscription_status_color', $cssClass);
        
        return redirect()->route('show_offer', ['id' => $offerId]);
    }

        
    public function searchName(Request $request)
    {
          
        $search = CompanyOffers::Search($request->name)->get();    
      
        return view('result_search')->with('search', $search);
    }

}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UsersCompnay;

class CompanyDataController extends Controller
{
    public function companyData()
    {
       return view('company_data');
    }

    public function store(Request $request) // store the data company
    {    
        $this->validate(request(), [
            'cif' => 'required' 
        ]);

        $userCompany = new UsersCompnay;
        $userCompany->id_user = $request->id_user;
        $userCompany->name = $request->name;
        $userCompany->cif = $request->cif;
        $userCompany->country = $request->country;
        $userCompany->city = $request->city;
        $userCompany->direction = $request->direction;
        $userCompany->phone_number = $request->phone_number;
        $userCompany->contact_name = $request->contact_name;
        $userCompany->url_image = $request->url_image;
  
        $userCompany->save(); 


        return view('account_company');       

    }
}
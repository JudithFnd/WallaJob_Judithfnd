<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UsersProfessionals;
use App\Category;
use Illuminate\Support\Facades\Auth;

class CurriculumController extends Controller
{
    public function curriculum()
    {
       return view('curriculum');
    }

    public function store(Request $request) // store the data company
    {    
        $this->validate(request(), [
            'dni' => 'required' 
        ]);

        $userProfessional = new UsersProfessionals;
        $userProfessional->id_user = $request->id_user;
        $userProfessional->name = $request->name;
        $userProfessional->surname = $request->surname;
        $userProfessional->surname2 = $request->surname2;
        $userProfessional->birthdate = $request->birthdate;
        $userProfessional->dni = $request->dni;
        $userProfessional->sex = $request->sex;
        $userProfessional->country = $request->country;
        $userProfessional->city = $request->city;
        $userProfessional->direction = $request->direction;
        $userProfessional->phone_number = $request->phone_number;        
        $userProfessional->studies = $request->studies;
        $userProfessional->work_experience = $request->work_experience;
        $userProfessional->image = $request->image;
  
        $userProfessional->save(); 


        return view('account_professional');       

    }

    public function show()
    {        
        $curriculum = Auth::user()->userProfessional;
        return view('my_curriculum', ['cv' => $curriculum]);
    }
}
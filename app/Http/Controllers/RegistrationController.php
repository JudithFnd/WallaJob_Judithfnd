<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Users;

 
class RegistrationController extends Controller
{
	public function create()
	{
	    return view('create');
	}

 public function store(Request $request)
    {    	    	


        $this->validate(request(), [
            'name' => 'required',
            'type_user' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);


        $user = new Users;
        $user->name = $request->name;
        $user->type_user = intval($request->input('type_user'));
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        auth()->login($user);
        
        return redirect()->to('/');
    }
}


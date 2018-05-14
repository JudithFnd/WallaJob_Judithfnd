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
        $user->type_user = intval($request->input('type_user')); // change it to integer
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        $view = '';
        if ($user->type_user === 0) {
        	$view = 'account_professional';
        } else if ($user->type_user === 1) {
        	$view = 'account_company';
        }

        
        auth()->login($user);
        
        return view($view);
    }
}


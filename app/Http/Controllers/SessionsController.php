<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create() //show view login
    {
        return view('login');
    }
    
    public function myAccount() // return to the user profile
    {

       $user = Auth::user();

        $view = '';
        if ($user->type_user === 0) {
        	$view = 'account_professional';
        } else if ($user->type_user === 1) {
        	$view = 'account_company';
        }

        return view($view);
    }

    public function store(Request $request) // authenticate user
    {
    
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
                
        $user = Auth::user();

        $view = '';
        if ($user->type_user === 0) {
        	$view = 'account_professional';
        } else if ($user->type_user === 1) {
        	$view = 'account_company';
        }

        return view($view);
    }
    
   public function destroy() // logout
    {
        auth()->logout();
        
        return redirect()->to('/');
        
    }
}

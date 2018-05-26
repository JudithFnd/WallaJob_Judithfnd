<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('login');
    }
    
    public function myAccount()
    {
        return view('account_company');
    }

    public function store(Request $request)
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
    
   public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
        
    }
}

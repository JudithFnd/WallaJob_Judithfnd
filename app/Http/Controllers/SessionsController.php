<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('my-account');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return view('account_professional');
    }
    
   /* public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }*/
}

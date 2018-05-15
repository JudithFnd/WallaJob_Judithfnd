<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Users;
 
class SessionsController extends Controller
{
    public function create()
    {
        return view('my-account');
    }
    
    public function store(Request $request)
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        } else {
           return view('/'); 
        }
        
       
    }
    
   /* public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }*/
}

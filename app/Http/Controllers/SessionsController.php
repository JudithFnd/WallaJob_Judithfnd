<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('login');
    }
    
    public function store(Request $request)
    {
        if (auth()->attempt(request(['type_user', 'email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        $user = new User;
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
        return view($view);
    }
    
   public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}

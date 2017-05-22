<?php
namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class EntrepriseLoginController extends Controller
{

 	public function __construct(){
 		$this->middleware('guest:entreprise');
 	}

    public function showLoginForm(){
  	 	return view('auth.entreprise-login');
    }

    public function login(Request $request){
   		// Validate the form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);
   		// Attempt to log the admin in 
    	
    	if(Auth::guard('entreprise')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
    		// if successful, then redirect to their intended location
    		return redirect()->intended(route('entreprise.dashboard'));
    	}
   		

   		// if unsuccessful, then redirect back to the login with the form data
   		return redirect()->back()->withInput($request->only('email' , 'remember')); 
    }
}

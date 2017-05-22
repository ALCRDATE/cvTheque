<?php

namespace App\Http\Controllers\Auth;

use App\Entreprise;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class EntrepriseRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/entreprise';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:entreprise');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function showRegisterForm(){
        return view('auth.entreprise-register');
    } 

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'raison_social' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Entreprise
     */

    protected function create(array $data)
    {
        return Entreprise::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'raison_social' => $data['raison_social'],
            'password' => bcrypt($data['password']),
        ]);

        if(Auth::guard('entreprise')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // if successful, then redirect to their intended location
            return redirect()->intended(route('entreprise.dashboard'));
        }
    }
}

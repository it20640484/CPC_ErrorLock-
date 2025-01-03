<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'epfno' => ['required', 'numeric','digits:6'],
            'username' => ['required', 'string', 'max:10'],
            'fullname' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'contactno' => ['required', 'numeric','digits:10'],
            'password' => ['required', 'string', 'max:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data 
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'epfno' => $data['epfno'],
            'username' => $data['username'],
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'contactno' => $data['contactno'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

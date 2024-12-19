<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{

    use ErrorUsers;

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
            'name' => ['required', 'string', 'max:20'],
            'contactno' => ['required', 'numeric','digits:10'],
            'date' => ['required', 'numeric','birth_date'],
            'location' => ['required', 'string'],
            'section' => ['required', 'string'],
            'devicename' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'model' => ['required', 'string'],
            'serialno' => ['required', 'numeric','digits:6'],
            'issue' => ['required', 'string', 'max:600'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'epfno' => $data['epfno'],
            'name' => $data['name'],
            'contactno' => $data['contactno'],
            'date' => $data['date'],
            'location'=> $data['location'],
            'section'  => $data['section' ],
            'devicename' => $data['devicename' ], 
            'brand'=> $data['brand'],
            'model'=> $data['model'],
            'serialno'=> $data['serialno'],
            'issue'=> $data['issue'],
        ]);
    }
}


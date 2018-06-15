<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Astronomer;
use App\ResearcherFellowship;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = '/home';

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
        if($data['astrotype'] == 1){
            return Validator::make($data, [
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|string|max:20|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'institution' => 'required|string|exists:institutions,name'
            ]);
        }
        else{
            return Validator::make($data, [
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|string|max:20|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $astronomer = new Astronomer;
        $astronomer->username = $data['username'];
        $astronomer->password = Hash::make($data['password']);
        $astronomer->first_name = $data['fname'];
        $astronomer->last_name = $data['lname'];

        $astronomer->save();

        if($data['astrotype'] == 1){
            $researcher = new ResearcherFellowship;
            $researcher->id = $astronomer->id;
            $inst = DB::table('institutions')->where('name', '=', $data['institution'])
            ->get();
            $researcher->institution_id = $inst[0]->id;
            $researcher->save();
        }

        return User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'first_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'last_name' => 'required',
            'address' => 'required',
            'city_town' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'twitter' => '',
            'referral' => '',
            'info' => 'required',
            'commitment' => 'required',
            'community' => 'required',
            'new_member' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'email' => $data['email'],
        'first_name', 'email', 'password', 'last_name', 'address', 'city_town', 'province', 'postal_code', 'phone_number', 'twitter', 'referral', 'info', 'commitment', 'community', 'new_member',
            'password' => bcrypt($data['password']),
            'last_name' => $data['last_name'],
            'address' => $data['address'],
            'city_town' => $data['city_town'],
            'province' => $data['province'],
            'postal_code' => $data['postal_code'],
            'phone_number' => $data['phone_number'],
            'twitter' => $data['twitter'],
            'referral' => $data['referral'],
            'info' => $data['info'],
            'commitment' => $data['commitment'],
            'community' => $data['community'],
            'new_member' => $data['new_member'],
        ]);
    }
}

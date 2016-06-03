<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;


class User extends Authenticatable
{


    use Billable;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'email', 'password', 'last_name', 'address', 'city_town', 'province', 'postal_code', 'phone_number', 'twitter', 'referral', 'info', 'commitment', 'community', 'new_member',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];




}

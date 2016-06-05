<?php

namespace App\Http\Utilities;

class Referral

{
	protected static $referrals = [
	   "100 Women Calgary",
	   "Calgary Herald",
	   "Manitoba",
	   "Nouveau-Brunswick",
	   "Terre-Neuve-et-Labrador",
	   "Nouvelle-Écosse",
	   "Territoires du Nord-Ouest",
	   "Nunavut",
	   "Ontario",
	   "Île-du-Prince-Édouard",
	   "Québec",
	   "Saskatchewan",
	   "Yukon"
	];

	public static function all()
	{
		return array_keys(static::$referrals);
	}
			
}
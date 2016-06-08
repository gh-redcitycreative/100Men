<?php

namespace App\Http\Utilities;

class Referral

{
	protected static $referrals = [
	   "100 Women Calgary"				=>"1",
	   "Calgary Herald"					=>"2",
	   "Calgary Sun"					=>"3",
	   "Facebook"						=>"4",
	   "Friends"						=>"5",
	   "Instagram"						=>"6",				
	   "Roadsign/Billboard"				=>"7",
	   "Radio - JackFM"					=>"8",
	   "Radio - SportsNet 960 The Fan"	=>"9",
	   "Twitter"						=>"10",
	   "Other"							=>"11"
	];

	public static function all()
	{
		return array_keys(static::$referrals);
	}
			
}
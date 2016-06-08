<?php

namespace App\Http\Utilities;

class Province

{
	protected static $provinces = [
	   "Alberta" 					=> "AB",
	   "British Columbia" 			=> "BC",
	   "Manitoba" 					=> "MB",
	   "New Brunswick" 				=> "NB",
	   "Newfoundland and Labrador" 	=> "NL",
	   "Nova Scotia"	 			=> "NS",
	   "Northwest Territories" 		=> "NT",
	   "Nunavut" 					=> "NU",
	   "Ontario" 					=> "ON",
	   "Prince Edward Island" 		=> "PE",
	   "Quebec" 					=> "QC",
	   "Saskatchewan" 				=> "SK",
	   "Yukon"  					=> "YT"
	];

	public static function all()
	{
		return array_keys(static::$provinces);
	}
			
}
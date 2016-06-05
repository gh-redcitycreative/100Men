<?php

namespace App\Http\Utilities;

class Province

{
	protected static $provinces = [
	   "Alberta" 					=> "AB",
	   "Colombie-Britannique" 		=> "BC",
	   "Manitoba" 					=> "MB",
	   "Nouveau-Brunswick" 			=> "NB",
	   "Terre-Neuve-et-Labrador" 	=> "NL",
	   "Nouvelle-Écosse" 			=> "NS",
	   "Territoires du Nord-Ouest" 	=> "NT",
	   "Nunavut" 					=> "NU",
	   "Ontario" 					=> "ON",
	   "Île-du-Prince-Édouard" 		=> "PE",
	   "Québec" 					=> "QC",
	   "Saskatchewan" 				=> "SK",
	   "Yukon"  					=> "YT"
	];

	public static function all()
	{
		return array_keys(static::$provinces);
	}
			
}
<?php

	//--------- Task 1 -----------------
	function repeat($arr){
		return json_encode(array_merge($arr,$arr,$arr));
	}
	
	//--------- Task 2 -----------------
	function reformat($str){
		$str = preg_replace('/[aeiou]/i', '', $str); // Remove vowels
		$firstLetter = strtoupper(substr($str,0,1)); // First letter to uppercase
		$lowerString = strtolower(substr($str,1)); // Rest of the string to lowercase
		return $firstLetter.$lowerString; // Concatenate first letter and rest of the string
	}

	echo repeat([1,2,3]);
	echo "<br>";
	echo reformat("liMeSHArp DeveLoper TEST");

?>
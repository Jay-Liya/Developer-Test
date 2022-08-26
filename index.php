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

	//--------- Task 3 -----------------
	function next_binary_number($arr){

		//------Convert binary to decimal---------
		$num= 0;
		$position = 0;

		for($i=count($arr)-1; $i>-1;$i--){
			$position == 0 ? $position=1 : $position *= 2;
			$num += $arr[$i]*$position;
		}
		//----------------------------------------

		//--------Convert decimal to binary----------
		$resultArr = array();

		for($j=$num+1; $j>1;$j/=2){
			array_push($resultArr,$j%2);
		}

		if($num == 0 || $resultArr[count($resultArr)-1]==0){
			array_push($resultArr,1);
		}

		return json_encode(array_reverse($resultArr));
	}

	// Test cases
	echo repeat([1,2,3]);
	echo "<br>";
	echo reformat("liMeSHArp DeveLoper TEST");
	echo "<br>";
	echo next_binary_number([1,0,0,0,0,0,0,0,0,1]);

?>
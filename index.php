<?php
	foreach ($argv as $i=>$arg )
	{
	    if ( $arg == "lime_tests" )
	    { 
	    	$input_arr = preg_split( '/[()]/', $argv[$i+1] );
	    	lime_tests($input_arr[0],$input_arr[1]);
	    }
	}

	function lime_tests($task,$para) {
		
		if($task == "repeat"){ // Task 1 

			$nums = str_replace(['[', ']'], '', $para);
			echo "[".$nums.",".$nums.",".$nums."]";
		}
		else if($task == "reformat"){ // Task 2

			$str = preg_replace('/[aeiou]/i', '', $para); // Remove vowels
			$firstLetter = strtoupper(substr($str,0,1)); // First letter to uppercase
			$lowerString = strtolower(substr($str,1)); // Rest of the string to lowercase
			echo $firstLetter.$lowerString; // Concatenate first letter and rest of the string
			
		}
		else if($task == "next_binary_number"){ // Task 3

			$int_arr = json_decode('[' . $para . ']', true);
			$num_digits = count($int_arr[0]);

			for($i=$num_digits-1;$i>-1;$i--){

				if($int_arr[0][$i] == 1){
					$int_arr[0][$i] = 0;
					if($i==0){
						$int_arr[0] = array_merge([1],$int_arr[0]);
					}
				}
				else {
					$int_arr[0][$i] = 1;
					break;
				}
			}

			echo json_encode($int_arr[0]);
		}
		else {
			echo "Please type one of these tasks; repeat, reformat or next_binary_number";
		}
	}

?>
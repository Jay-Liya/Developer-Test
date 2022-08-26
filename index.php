<?php

	//--------- Task 1 -----------------
	function repeat($arr){
		return json_encode(array_merge($arr,$arr,$arr));
	}
	echo repeat([1,2,3]);
?>
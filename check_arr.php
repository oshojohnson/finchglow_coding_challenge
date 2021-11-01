<?php
	//initialize target value
	$target_value =6;
	$array= array(2,4,5,7,8,9,15);
	$length= count($array);
	function get_index($target_value,$array,$length){
		for($i=0;$i<$length;$i++){
		if($array[$i]==$target_value){
			return $i;
		}
		else if($array[$i]>$target_value){
			return $i;
		}
		
	  }
	  return $length;
	}
	echo get_index($target_value,$array,$length);

?>
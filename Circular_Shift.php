<?php
	$arr = array(1,2,3,4,5,6);
	
	$circular_shift = 2;
	
	function shift($arr,$circular_shift)
  {
    $k = $circular_shift % count($arr);
    
    while($k-- > 0){
      $tmp = $arr[0];
      for ($i = 1; $i < count($arr); $i++)
          $arr[$i - 1] = $arr[$i];
      $arr[count($arr) - 1] = $tmp;
    }
    return $arr;
      
  }
	
	print_r(shift($arr,$circular_shift));
?>
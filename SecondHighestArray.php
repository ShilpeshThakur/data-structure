<?php
	$arr = array(1,4,7,10,5,10,8);
	
	$highest = $second_highest = 0;
	
	
	foreach($arr as $element)
	{
	  if($element > $highest)
	  {
	    $second_highest = $highest;
	    $highest = $element;
	  }
	  if($highest > $element && $element > $second_highest)
	  {
	    $second_highest = $element;
	  }
	}
	
	echo "Highest ".$highest."\n";
	echo "Second Highest ".$second_highest;
?>
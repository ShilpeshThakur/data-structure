<?php
	//Find if two people ever meet after same number of jumps
	function checkCrossing($p1,$s1,$p2,$s2)
	{
	  if(($p1 >= $p2 && $s1 > $s2) || ($p2 >= $p1 && $s2 > $s1))
	  {
	    return false;
	  }
	  
	  if(($s1 > $s2 && ($p2 - $p1) % ($s1-$s2) == 0 )||
	      ($s2>$s1 && ($p1 - $p2) % ($s2-$s1) == 0 ))
	      {
	        return true;
	      }
	   else{
	     return false;
	   }
	}
	
	
	$p1 = 0;
	$p2 = 6;
	$s1 = 8;
	$s2 = 5;
	
	if(checkCrossing($p1,$s1,$p2,$s2))
	{
	  echo "Yes";
	}
	else{
	  echo "No";
	}
?>

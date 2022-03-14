<?php
	// if a row/column consists of any 0 make entire row and colum of that element as 0.
  
	function ZeroMatrix($matrix,$m,$n)
	{
	  $result_arr = array();
	  for($i = 0 ; $i < $m ; $i++)
	  {
	    for($j = 0 ; $j < $n ; $j++)
	    {
	      $result_arr[$i][] = 1;
	    }
	  }
	  
	  for($i = 0 ; $i < $m ; $i++)
	  {
	    for($j = 0 ; $j < $n ; $j++)
	    {
	      if($matrix[$i][$j] == 0)
	      {
	        for($k = 0 ; $k < $n ; $k++)
	        {
	          $result_arr[$i][$k] = 0;
	        }
	        for($k = 0 ; $k < $m ; $k++)
	        {
	          $result_arr[$k][$j] = 0;
	        }
	      }
	    }
	  }
	  return $result_arr;
	}
	
	$arr = array(array(2,3,5,6),array(0,11,12,15),array(0,55,44,65));
	$m = 3;
	$n = 4;
	$res = ZeroMatrix($arr,$m,$n);
	  
	 for($i = 0 ; $i < $m ; $i++)
	  {
	    for($j = 0 ; $j < $n ; $j++)
	    {
	      echo $arr[$i][$j]." ";
	    }
	    echo "\n";
	  }
	  echo "\n";
	 for($i = 0 ; $i < $m ; $i++)
	  {
	    for($j = 0 ; $j < $n ; $j++)
	    {
	      if($res[$i][$j] == 0)
	      {
	         echo $res[$i][$j]." ";
	      }
	      else{
	        echo $arr[$i][$j]." ";
	      }
	    }
	    echo "\n";
	  }
	
?>

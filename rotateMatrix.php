<?php
	//rotate matrix clockwise
	
	function rotateMatrix(&$mat)
	{
	  $size = count($mat[0]);
	  
	  for($x = 0 ; $x < $size/2 ; $x++)
	  {
	    for($y = $x ; $y < $size - $x - 1 ; $y++)
	    {
	      /* anti-clockwise start */
	      
	     // $temp = $mat[$x][$y];
	      
	     // $mat[$x][$y] = $mat[$y][$size - 1 - $x];
	      
	     // $mat[$y][$size - 1 - $x] = $mat[$size - 1 - $x][$size - 1 - $y];
	      
	     // $mat[$size - 1 - $x][$size - 1 - $y] = $mat[$size - 1 - $y][$x];
	      
	     // $mat[$size - 1 - $y][$x] = $temp;
	     
	     /* end*/
	     
 	      $temp = $mat[$x][$y];
	      
	      $mat[$x][$y] = $mat[$size - 1 - $y][$x];
	      
	      $mat[$size - 1 - $y][$x] = $mat[$size - 1 - $x][$size - 1 - $y];
	      
	      $mat[$size - 1 - $x][$size - 1 - $y] = $mat[$y][$size - 1 - $x];
	      
	      $mat[$y][$size - 1 - $x] = $temp;
	    }
	  }
	}
	
	function printMatrix(&$mat)
	{
	   $size = count($mat[0]);
	  
	  for($x = 0 ; $x < $size ; $x++)
	  {
	    for($y = 0 ; $y < $size ; $y++)
	    {
	      echo $mat[$x][$y]." ";
	    }
	    echo "\n";
	  }
	}
	
	
	$mat =  array(array(1, 2, 3, 4),
              array(5, 6, 7, 8),
              array(9, 10, 11, 12),
              array(13, 14, 15, 16));
 
 
// Print rotated matrix
printMatrix($mat);

// displayMatrix($mat);
rotateMatrix($mat);
 
// Print rotated matrix
printMatrix($mat);
?>

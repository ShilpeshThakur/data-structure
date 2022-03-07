<?php
  // Number of square matrices with all 1s
  
  function countmatrix($arr)
  {
    for($index = 1 ; $index < count($arr) ; $index++)
    {
      for($s_index = 1 ; $s_index < count($arr[$index]) ; $s_index++)
      {
        if($arr[$index][$s_index] == 0)
        {
          continue;
        }
        $arr[$index][$s_index] = min(min($arr[$index][$s_index-1],$arr[$index-1][$s_index]),$arr[$index-1][$s_index-1])+1;
      }
    }
    
    $count = 0;
    for($index = 0 ; $index < count($arr) ; $index++)
    {
      for($s_index = 0 ; $s_index < count($arr[$index]) ; $s_index++)
      {
        $count += $arr[$index][$s_index];
      }
    }
    
    return $count;
  }
  
  $arr = array(array(1,1,1),array(1,0,1),array(1,1,1));
  
  echo countmatrix($arr);
?>

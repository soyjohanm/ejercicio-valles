<?php 

  function countingValleys($s) {
    $count = 0;
      for ($i=0; $i<strlen($s); $i++) {
        $siguiente = ($i == (strlen($s)-1)) ? $i : $i+1;
          if($s[$i] == 'D') {
            if ($s[$i] == $s[$siguiente]) { 
			  $count++; 
			  $i++; 
			  if ($i == (strlen($s)) ) { $count--; break; } 
			}
          }	
      }
    return $count;
  }

  $s = "UDDDUDUU";
  $total=countingValleys($s);

  echo $total;
?>
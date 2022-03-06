<?php
  function Diffdate($d1, $d2) 
  {
      $diff = strtotime($d2) - strtotime($d1); 
      return abs(round($diff / 86400));
  }
  $d1 = "1-03-2022";
  $d2 = "6-03-2022";
  $dateDiff = Diffdate($d1, $d2);
  echo"Difference between two dates: ". $dateDiff . " Days ";

  
   $arr = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
   echo "<br>original Array : <br>";
   print_r($arr);
   $arr = array_flip($arr);
   $arr = array_flip($arr);
   $arr= array_values($arr);
   echo "<br>updated Array :<br> ";
   print_r($arr);
?>
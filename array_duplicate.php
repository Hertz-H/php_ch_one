<?php
  
  
   $arr = array(1, 5, 2, 5, 1, 3, 2, 4, 5);
   echo "<br>original Array : <br>";
   print_r($arr);
   $arr = array_flip($arr);
   $arr = array_flip($arr);
   $arr= array_values($arr);
   echo "<br>updated Array :<br> ";
   print_r($arr);

   
?>
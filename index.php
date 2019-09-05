<?php 
function LongestWord($sen) {  
  // code goes here
  $sen = preg_replace("/[^A-Za-z0-9 ]/", ' ', $sen);
  $sen = preg_replace('!s+!', ' ', $sen);
  $senArr = explode(" ",$sen);
  $max = 0;
  for($i=0;$i<sizeof($senArr);$i++){
      if(strlen($senArr[$i])>$max){
          $max = strlen($senArr[$i]);
          $sen = $senArr[$i];
      }
  }
  return $sen; 
}   
// keep this function call here  
print_r (LongestWord(fgets(fopen('php://stdin', 'r'))));  

?>
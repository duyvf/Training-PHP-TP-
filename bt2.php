<?php 

function LetterChanges($str) { 
$str="a"; 
  $arr = str_split($str);
  $let = range("a","z");
  $vow = array('a', 'e', 'i', 'o', 'u');
  foreach($arr as $key => $value){
    if(in_array($value,$let)){
      $arr[$key] = $value=='z' ? 'a' : ++$value; 
      if(in_array($arr[$key],$vow)){
         $arr[$key] = strtoupper($arr[$key]); 
      }
    } else {
      $arr[$key] = $value; 
    }
  }
  // code goes here
  return join("",$arr); 
         
}   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo LetterChanges(fgets(fopen('php://stdin', 'r')));  

?>
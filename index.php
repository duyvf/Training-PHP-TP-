<?php 

function LongestWord($sen)

{ 
  $sen="toi dan là thuc tap sinh tại AHT ";
    $sen = preg_replace('/[^a-z ^1-9\s]/i', '', $sen);
    $arr = explode(" ", $sen);
    $sen = '';
    foreach($arr as $word) {
        if(strlen($word) > strlen($sen)){
            $sen = $word;
        }
    }

  return $sen; 
         
}
   
// keep this function call here  
echo LongestWord(fgets(fopen('php://stdin', 'r')));  

?>

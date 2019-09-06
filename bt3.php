<?php
function phoneNumber(array){
  let phoneNum = '';
  for(var i = 0; i < array.length;i++){
    let num = array[i];
    if(i === 0) phoneNum += '(';
    if(i === 3 ) phoneNum += ') ';
    if( i === 6) phoneNum += '-';
    phoneNum += num.toString();
  }
  return phoneNum;
 
}


phoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]);
?>
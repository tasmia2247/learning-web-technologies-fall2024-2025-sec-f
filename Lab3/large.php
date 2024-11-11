<?php
 
function large($value1=1,$value2=2,$value3=4){

if($value1>$value2 && $value1>$value3){
    echo "$value1 is largest";   
}

else if($value2>$value1 && $value2>$value3){
    echo "$value2 is largest";   
}
else{

    echo "$value3 is largest";   
}
 

} 

large(20);
 
?>
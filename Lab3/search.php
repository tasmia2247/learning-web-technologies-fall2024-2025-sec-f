<?php
 
Function Search($value1=0,$i=0,$limit=20){
 
  while($i<$limit+1){
    if($i==$value){
        echo "{$i} is Founded";
    }
    else{
        "{$value} is not founded ";
    }
    $i++;
  }
 
}
 
 
Search(7,1);
 
 
 
?>
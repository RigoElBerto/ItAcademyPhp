<?php


if (isBitten()){
    echo "Charlie bit me!";
} else{
    echo "Charlie did not bit me!";
}


//function that returns true or false with a 50% of chance 
function isBitten(): bool{
    $bites = false;
    $num = rand(1,2);
    if($num == 1){
        return true;
    } 

    else {  
        return false;
     }

}
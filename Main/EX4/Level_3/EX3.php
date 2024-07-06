<?php


$array = [10, 20, 5, 3, 7, 13, 11, 23];

print_r(array_reduce($array, 'isPrimo'));
    

    function isPrimo($total, $num) {
        $isPrimo = true; 
        for($i = 2; $i < $num && $isPrimo; $i++){
            if($num % $i ==0){

                $isPrimo = false;
            }
        }

        if($isPrimo){
            $total += $num;
        }
        return $total;
    }

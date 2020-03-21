<?php 

triangle(5);

function triangle($int){
    if (is_int($int)){
        if ($int > 0){
            for ($i = 1; $i <= $int; $i++){
                for ($j = 1; $j <= $i; $j++){
                    echo "#";
                }
                echo "\n";
            }
        } else {
            echo "Must bigger than 0";
        }
    } else {
        echo "Must be integer";
    }
}
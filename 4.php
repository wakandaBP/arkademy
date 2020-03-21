<?php 

print_r(longlest("Ini teks untuk percobaan!"));

function longlest($string){
    $str = preg_replace('/[^A-Za-z0-9\- ]/', '', $string);

    $all = explode(" ",$str);
    $map =  array_combine($all,array_map('strlen',$all));
    $long = array_keys($map,max($map));
    return $long[0];
}
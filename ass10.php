<?php

function reverse($string){
    $rev="";
    $i=0;
    while(!empty($string[$i])){
        $rev=$string[$i].$rev;
        $i++;
    }
    echo $rev;
}
reverse('test');
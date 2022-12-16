<?php

$animal = [
    'cat',
    'dog',
    'fish'
];

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';

}

function club($age){
    if($age>=18)
    {
        echo "Allowed";
    }else{
        echo "Not Alowwed";
    }
}

club(19);
dd($animal);


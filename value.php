<?php

$array = ['1', '2', '3'];

$item = '4';

function addItemToArray($array, $item)
{
    array_push($array, $item);
    return $array;
}

function addItemToArray2(&$array, $item)
{
    array_push($array, $item);
}

var_dump(addItemToArray($array, $item));

var_dump($array);

addItemToArray2($array, $item);

var_dump($array);
<?php

define("PI", 3.14);

function circleArea($radius){
    $result = PI * $radius * $radius;
    return $result;
}

echo circleArea(10) . PHP_EOL;
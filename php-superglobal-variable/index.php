<?php

$text = "Selamat datang!";

function sayHello(){
    echo $GLOBALS['text'] . PHP_EOL;
}

sayHello();
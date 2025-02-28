<?php

$text = "Selamat datang!";

function sayHello(){
    global $text;
    echo $text . PHP_EOL;
}

sayHello();
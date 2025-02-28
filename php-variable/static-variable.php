<?php

function countNumber(){
    static $number = 0;
    echo $number . PHP_EOL;
    $number++;
}

countNumber();
countNumber();
countNumber();
countNumber();
countNumber();
countNumber();
countNumber();
countNumber();
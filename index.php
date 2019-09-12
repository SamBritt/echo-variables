<?php

$greeting = "What's up";
$name = "Sam";

echo 'my first line of PHP';
//php -S localhost: whatever port
//serves php to browser

//use nl2br with \n sequence to break lines
echo nl2br("\n $greeting");
echo nl2br("\n $greeting"." $name?");
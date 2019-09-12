<?php
//php -S localhost: whatever port
//serves php to browser


$greeting = "What's up";

//super global
//Gets value associated with url parameter: e.g. name=Sam
//NOT SECURE. Allows people to inject code >:O
//Wrap w/htmlspecialchars function to 'sanitize input'. Guilt until proven innocent!
$name = htmlspecialchars($_GET['name']);

//normal array
$names = [
    'Sam',
    'John',
    'Lary',
    'Mickey'
];
$names[] = 'Timmy';
//Associative array w/ key/value pairs
$person = [
    'age' => 31,
    'name' => 'Sam',
    'eyeColor' => 'blue'
];
$person['hair'] = 'blonde';

require 'index.view.php';

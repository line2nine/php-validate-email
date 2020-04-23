<?php

function validateEmail($str)
{
    $regexp = '/^[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        return true;
    }
    return false;
}

$emailOne = "abc@gmail.com";
$emailTwo = "abc%gmail.com";
$emailThree = "ajdsf33iadoj@hotmail.com";
$emailFour = "@#!abc@gmail.com";

echo validateEmail($emailFour);
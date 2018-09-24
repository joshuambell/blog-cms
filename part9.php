<?php
    ini_set('display_errors', 1);    // Show errors for debugging
?>

$firstName = "Jane";                                //String type variable
$lastName = "Doe";                                  //String type variable
$age = 35;                                        //Integer type variable
$married = true;                                  //Boolean type variable
$childrenName = array("Alice", "Bob");             //Array type variable

$fullName = $firstName . " " . $lastName;          //Concatenation operator
$dogYears = $age/7;                                //Arithmemtic operator
$isAdult = $dogYears > 4;                          //Comparison operator
$isSettled = $isAdult and $married;                //Integer type variable
  
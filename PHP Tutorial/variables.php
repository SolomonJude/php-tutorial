<?php

echo "Variables: Variables are \"containers\" for storing information.";

echo "<br><br>";

$firstName = "Solomon";
$surName = "Jude";

echo "$firstName $surName is an agent of change, an inspirer in actions and thoughts ";

echo "<br><br>";

echo "PHP has three different variable scope, namely;";
echo "<br>";
echo "Global scope, Local scope, and Static scope";

echo "<br><br>";

// GLOBAL SCOPE
echo "GLOBAL SCOPE: A variable declared outside a function is called a GLOBAL SCOPE and can only be accessed
    ootside the function";

$x = "Ifeanyichukwu";

function justMe(){
    // using x inside the function will generate an error
    echo " My name is $x";
}

justMe();
echo "<br>";
//using x outside the function will not generate an error
echo "My name is $x";

echo "<br><br>";


//LOCAL SCOPE
echo "LOCAL SCOPE: A variable declared within a function is called a LOCAL SCOPE and can only be accessed 
    within the function";

echo "<br>";


function justMe1(){
    $y = "Franklin";

    echo "My name is $y";
}
justMe1();

//global keyword
echo "The \"global\" keyword is used to access global variables from within a function.";

echo "<br><br>";

$a = 3;
$b = 2;

function justMe2(){
    global $a, $b;
    $a += $b;
}
justMe2();
echo $a;

echo "<br><br>";
// echo and print statement
echo "the echo statement and print statement are both used to output data to the screen.";
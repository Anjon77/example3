<?php

$condition1 = true;
$condition2 = false;
$condition3 = false;

if ($condition1 && $condition2 && $condition3) {
    echo "All are  true";
}elseif($condition1 && $condition2){
    echo "1 and 2 ";
}elseif($condition1){
    echo "2";
}else{
    echo "3";
}



// $year = 2024;
// if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0) ) {
//     echo "wow, {$year} is leap yea.";
// }else{
//     echo "{$year} is not leap year.";
// }



// Leap year logic

// $year = 2004;

// if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
//     echo " {$year} is a leap year.";
// }elseif($year % 4 == 0 && $year % 100 == 0){
//     echo "{$year} is a leap year";
// }elseif ($year % 4 == 0) {
//     echo "{$year} is a leap year";
// }else{
//     echo "{$year} is not leap year";
// }

// leap year count rule....
// leap year logic

// $year = 2021;

// if ($year % 4 == 0 && $year % 100 == 0 && $year %400 == 0) {
//     echo "{$year} year is leap year";
// } elseif($year % 4 == 0 && $year %100 == 0) {
//     echo "{$year} year is leap year.";
// }elseif( $year % 4 == 0){
//     echo "{$year} year is leap year.";
// }else{
//     echo "{$year} year is not leap year.";
// }

    







// Even and odd number and ...
//  Logical operator
// $num = 11;

// if ($num % 2 == 0) {
//     echo "It's even number";
// }else{
//     echo "It's odd number";
// }

//  Logical operator

/*
$age = 6;

if ( $age >= 13 && $age <= 19) {
    echo "You are teenager.";
}elseif( $age <= 12 ){
    echo "You are Child.";
}elseif( $age >= 20 && $age <= 40 ){
    echo "You are adult.";
}elseif( $age >= 41 && $age <= 55 ) {
    echo "You are Middle age.";
}else{
    echo "You are old age";
}
*/

// $x = 12;
// $y = 122;

// if ($x != $y) {
//     echo "x is not equal to y.";
// }elseif($x == $y){
//     echo "x is equal to y";
// }




// $x = 100;
// $y = 333;

// if ($x == $y) {
//     echo "x and y has same money.";
// }elseif($x != $y){
//     echo "x is not equal to y.";
// }elseif($x > $y){
//     echo "x has more money than y.";
// }elseif ( $x < $y) {
//     echo "y has more money than x.";
// }elseif ($x >= $y) {
//     echo "x has more or same money than y.";
// }elseif($x <= $y){
//     echo "y has more or same money than x.";
// }else{
//     echo "Amount of money is not figure out here.";
// }




?>
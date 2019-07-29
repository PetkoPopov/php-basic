<?php
//7-function/callable.php
// тип данни  колабъл , анонимни (ламбда ) функции 
// 
//
/**
 * 
 * the same things like the others functions 
 */
$func= function (){
    echo 'This is callable function';
};
// echo $func; --> not work display  ;
$fileContent= file_get_contents('../example_users.json');
$users=json_decode($fileContent,true);


$sortingCallback=function($a,$b){
   // space-ship operator дава -1 ако ляво е по голямо 
    // нула ако са равни 
    // и +1 ако б е по голямо 
    return $a['first_name']<=>$b['first_name'] ;
};

usort($users,$sortingCallback);


// да сложа екс дебъг 
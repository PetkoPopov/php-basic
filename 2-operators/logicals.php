<?php

//1.логически оператори резултата е булев 
// 2.работят с булеви стойности и техни еквиваленти 
//3.изпълняват логически функциии 
//4.Булев еквивален на другите типове 
//еквиваленти на FALSE null,0. '' , '0'
//false==null , false==0 false=="",false=='0'


//еквиваленти на труе -всички други стойности
 
///логическо 'И' сравнямва две стойст ако и двете са истина е TRUE  (символ &&)
/*var_dump(
  false&&false,//false
        true&&false,//false
        true&&true,//true
        
);
*/
//логическо ИЛИ дава тру ако поне единия операнд е тру 
//символно е ||
/*var_dump(
        true||true,//true
        true||false,//true
        false||false,//false       
        );
 
 */



//логическо отрицание "НЕ" унарен оператор който обръща булевата стойност 
$a=true;
$b=!$a;//$b=false
//$a^$b;//xor изключващо или 
//приоритети 
$а=true && false||!true;
//echo !$a;//извежда единица 

$b=false && true || !false;
echo $b;

<?php
//иползва два поперанда за своето действие 
// оператор за присвояване -->символа "равно"
//задава левия операн на десния операнд преди "равното"
$myVar1=222;
$myVar2=$myVar1;
//$a=$s=$d=$f=3;//лоша практика да не се прави 
//
//аритметични :
$sum=1+2;
$sub=5-2;
$mul=2*3;
$del=8/4;
$exp=3**2;//степенуване
//приоритети 
$myVar=(2*9)+(12/3);//samo malki skobi 
//echo $myVar;

// Оператор за конкантенация(залепяне на низове)
//символа е точка .
$string1="this is first string";
$string2='This is second string';
$myString=$string1 . $string2;//залепя двата стринга
echo $myString2=$string1.' '.$string2;


$string1=$string1.$string2;
//съкратено присвояване 
//
//////////////
/////////
$string1.=$string2;//съкратено конкантениране 
//////////////////////

//
//съкр аритметични операции 
$а=10 ;
//$а=$а+5;//дълъг вариант
$а+=5;
$а-=5;
$а*=5;
$а/=5;
//съкратени варианти

// оператори за сравнение булев резултат
$a=1;
$b=3;
var_dump(
   $a==$b,//проверка за равенство на стойност в случая false
   //$a='1',// true защото не проверява типа 
       $a===$b,//false diferent type
        $a>$b,//false\
        $a<$b,//true
        $a<=$b,//true 
        $a!=$b,//различна ли е а от б 
        $a!='1',//false couse value is equale no matters of types
        $a!=='1',//true
        
        
        
        
 );

$mod=5%3;//dawa 2 ostatayk ot delene 
// проверка за четност 
//$numm%2==0




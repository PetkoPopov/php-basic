<?php

//цикли са конст кои при дадено условие повтар код или
// блок с код известен или неисвестен брой пъти
// 
//do-while  първо изпл блока с кода сле което проверява условието и ако е истина повтаря блока
$count=1;
do{//първо се изпълнява кода 
    echo $count++;
    echo 'this is the body of the block';
    echo'<br/>';
    if($count>13){
        echo'end of performans';
        break;
    }
}while(rand(1,10)>1);//после се проверява условието 
<?php

//if-else условна конструкция която проверява булевата стойност
$randomInt=rand(1,19);
if($randomInt>5){
    echo$randomInt. 'The num is bigger the five';
}else if($randomInt==5){
    echo 'FIVE';
}
else{
    echo 'The value is smaller the five'.$randomInt;
}
//може даа имаме само един ИФ
//можем да имаме нула или мног ЕЛСИФ  конструкции
//може да имаме само един елсе блок незадължителен но ако го има да е в края на консрукцията
//можем да имаме иф без елсиф или без елс но не и без ИФ

if(true)echo 12;






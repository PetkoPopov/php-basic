<?php
//types.php
//
// числа ,цели, десетични
$myIntVar=100;//direktno izoiswaane
$myFloatVar=3.14;//izpolzwa se tochka
//var_dump($myFloatVar,$myIntVar);
//символни низиве->стрингове
//стойността се загр от кав или апострофи 
$myStringVar='some \'string\'';
$myStringVar2="other string";
//var_dump($myStringVar,$myStringVar2);
  $myHTMLVar='<h1 class="heading">hello world</h1>';
  $myStringVar3="value of PI={$myFloatVar}";
  $myStringVar4='true';//ще изведе  'труе'
$myStringVar3;
//още един тип числа в двоична бройна система 
$binaryInt=0b1111;
echo $binaryInt;
$octInt=023455432;
echo $octInt;
///шестнайсетична бройна система 0-9 а-ф
// булев тип (логически , bool , boolean)
//името джордж бул 
 $myBoolVar=true;//логичска истина 
$myBoolVar2=false;//на екрана не излиза ниищо
//трети тип логически данни е нулата NUllable 
//за създаване на променлива стойност
//за освбождаване на памет 
$myNullableVar=null;
//Ресурси ->резултат от друга функция 
//служи единствено за подаване към други функции .не се извежда на екрана 
//изтриване на променлива 
//1.Като просвоим null като промен продължава да същ но е освобод памет 
//2.Като използваме функция unset() i подадем промен , промен се зтрива и немогат да се ползват 
unset($myBoolVar,$myIntVar);
echo $myBoolVar;//дава грешка че няма такава промменлива 
//може да създадем изцяло нова променлива пак със същото име



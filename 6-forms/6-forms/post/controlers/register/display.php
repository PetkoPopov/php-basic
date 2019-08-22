<?php
//controlers/register/display.php
// 
//ако сесийанта променлива съществува и не е празна 
//пренасочваме потребителя към ИНДЕКСА
//
echo 'Controlers/register/dipslay.php'; 

if(!empty($_SESSION['logged'])){
    
   // header('Location: index.php');
    //exit();
    redirect();
}
$viewFile=VIEWS_DIR.'/register.php';//показва  формата за регистрация 
//$viewFile;die;//създава път до папка вю и файла РЕГИСТЕР.пхп
//
if(!empty($_GET['error']))
{
    
    $errorMessage='';
    switch($_GET['error'])
    {
    case 1:
        $error='email required';
        break;
    case 2:
        $errorMessage='first name required ';
        break;        
    case 3:
        $errorMessage='last name required';
        break;
    case 4:
        $errorMessage='password required';
        break;
    case 5:
        $errorMessage='confirm The password';
        break;
    case 6:
        $errorMessage='Terms are not accepted';
        break;
    case 7:
        $errorMessage='not enought lenght';
        break;
    case 8:
        $errorMessage='The password is not confirmed';
        break;
    default:
        $errorMessage='error ocurred';
}
}
require_once VIEWS_DIR.'/template.php';//викаме темплейта тук в него е добавен
//$viewFile който пък е пътя до формата 

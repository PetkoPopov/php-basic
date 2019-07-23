<?php

///controlers/login/procces.php


//1. проверка дали имейл и АРЛОА СА ВЪВЕДЕНИ 
//2.ПРОВЕРКА ДАЛИ ИМА ЗАпИС В ПАПКА Уузерс 
//
//ако някое условие не е изпълненео се връщаме във формат аза вход със събщение за грешка 
//ако са изпълнени го изпращаме към началната страница 
//
//

//1.
$error=0;
if(empty($_POST['email']))
{
    $error=1;
    
}elseif(empty($_POST['password']))
{
    $error=2;
    
}

if($error){
    header('Location: index.php?page=login&error'.$error);
    exit();
}
$userFile= DATA_DIR . '/users';
$fileContent= file_get_contents($userFile);
$users=json_decode($fileContent,true);


if(array_key_exists($_POST['email'], $users))
{
    $user=$users[$_POST['email']];
    if(password_verify($_POST['password'], $user['password']))
    {
        //..ако всичко е ок използваме бисквитки 
        $_SESSION['logged']=true;
        $_SESSION['user']=$user;
        header('Location: index.php');
        exit();
        
    }else
    {
        header('Location: index.php?page=login&error=3');
        exit();
    }
    
}else
{
    header('Location: index.php?page=login&error=4');
    exit();
}









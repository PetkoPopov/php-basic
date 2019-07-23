<?php

//controllers/register/procces.php
//
//post изпращща в тялото на ч тп заявката 
//не в УРЛ 
//1.валидиране на данни и дали данните ги има (попълнени )
//2.проверка за дължина на парола 
//3.проверка за правилна потвърдена парола 
//4. proверяваме маила  дали вече дали не е регистриран 
//
//
//
//Ако нещо не е е изпълнено връщаме формата със съобщение за грешка 
//
//Ако всичко  е изпълненo  записваме в data/users.
//след което шренасочваме към формата за вход с успешна регистрация 
//
//

$error=0;
if(empty($_POST['email'])){
    $error=1;
}
elseif(empty($_POST['first_name']))
{
    $error=2;
}
elseif(empty($_POST['last_name']))
{
    $error=3;
}
elseif(empty($_POST['password']))
{
$error=4;    
}
elseif(empty($_POST['confirm_password']))
{
$error=5;    
}
elseif(empty($_POST['terms'])||$_POST['terms']!=='yes')
{
    $error=6;
}
elseif(strlen($_POST['password'])<6)
{
    $error=7;
}
elseif($_POST['password']!==$_POST['confirm_password'])
{
    $error=8;
}

if($error)
{
//пренасочваме къ старницата за регистрация  с кода на грешката
    //izpra]ame na http към респонса браузъра ще зареди урл с гет параметър 
    header('Location: index.php?page=register&error='.$error);
    exit();   
}

$user=[
    'email'=>$_POST['email'],
    'firstname'=>$_POST['first_name'],
    'lastName'=>$_POST['last_name'],
    'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
    'created_on'=>date('d.m.Y, H:i:s'),// 22.07.2019, 20:32:55
    'modified_on'=>date('d.m.Y, H:i:s')
];
 $userFile= DATA_DIR . '/users';
 $fileContent= file_get_contents($userFile);
 $users=json_decode($fileContent,true);
// var_dump($fileContent);
 $email=$user['email'];
if(!array_key_exists($email, $users))
{
    $users[$email]=$user;
    $userString=json_encode($users);
    file_put_contents($userFile,$userString);
    header('Location: index.php?page=login&register=1');
    exit();
    
}else
{
    header('Location: index.php?page=register&error=9');
    exit();
    
}





























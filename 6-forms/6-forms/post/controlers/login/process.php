<?php

//controls/логин/process.php

//1. проверка дали имейл и АРЛОА СА ВЪВЕДЕНИ 
//2.ПРОВЕРКА ДАЛИ ИМА ЗАпИС В ПАПКА Уузерс 
//
//ако някое условие не е изпълненео се връщаме във формат аза вход със събщение за грешка 
//ако са изпълнени го изпращаме към началната страница 
//
//

//1.
echo'controlers/login/procces.php';
//
//
if(!empty($_SESSION['logged'])){
    //header('Location: index.php');
    //exit();
    redirect();
}
$error=0;
if(empty($_POST['email']))
{
    $error=1;
    
}elseif(empty($_POST['password']))
{
    $error=2;
    
}

if($error){
    //header('Location: index.php?page=login&error'.$error);//когато получи такава заявка тя се изпълнява като ГЕТ метод 
    //exit();
    $param['error']=$error;
    redirect('login',$param);
}
$userFile= DATA_DIR . '/users';       /////////          от папка узерс 
$fileContent= file_get_contents($userFile);///всемаме данните на потребителя 
$users=json_decode($fileContent,true);///////

if(array_key_exists($_POST['email'], $users))
{
    $user=$users[$_POST['email']];//масив сс данните на потребителя
    
    if(password_verify($_POST['password'], $user['password']))
    {
        //..ако всичко е ок използваме бисквитки 
        $_SESSION['count']=0;
        $_SESSION['logged']=true;
        $_SESSION['user']=$user;//отива в вюз/темплейт.пхп
                                  //
                                  //
                                  //
        //print_r($_SESSION);die;//сложено за разработка не забравяй да го махнеш
                                 //
                                 //
                                 //ако е жълто си го махнал ;)
                                 //
       // header('Location: index.php');
       // 
        //exit();
       redirect();
        
    }else
    {
        //header('Location: index.php?page=login&error=3');
        //exit();
        $param['error']=3;
        redirect('login',$param);
    }
    
}else
{
   // header('Location: index.php?page=login&error=4');
   // exit();
    $param['error']=4;
    redirect('login',$param);
}









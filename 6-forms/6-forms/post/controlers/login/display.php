<?php

//controlers//login//display.php
//
//controlers/login/procces.php
//ако сесийанта променлива съществува и не е празна 
//пренасочваме потребителя към ИНДЕКСА
//
echo 'controlers//login//display.php';//die;

if(!empty($_SESSION['logged'])){
    //header('Location: index.php');
   // exit();
   redirect();
}
if(!empty($_SESSION['user']))
{
$user=$_SESSION['user'];
}
$viewFile=VIEWS_DIR . '/login.php';

require_once VIEWS_DIR . '/template.php';
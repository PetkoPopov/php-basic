<?php
//controlers/home/display.php
//този файл показва начална страница 
if(empty($_SESSION['logged'])){
    //header('Location: index.php?page=login');
   // exit();
   redirect('login');
}
$user=$_SESSION['user'];  
$viewFile=VIEWS_DIR.'/index.php';//този инддекс е във папка вюз 
//това НЕ Е основния индекс който  прави пътищата 
//отива(слага вю в темплате) в controlers/home/template.php

require_once VIEWS_DIR.'/template.php';//извиква темплейта тук и го отваря 
                                   /////


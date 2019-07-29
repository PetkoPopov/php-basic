<?php
session_start();
include_once'function.php';



//6-forms/post/index.php
//1.система за регистрация 
//2.сиистема за вход 
//3.разглеждане на потребител
//4.редакция
//5.изход на системата 
//
//всички заявки ще минават през индекс.пчп
//какво действие ще предприемем ще зависи от URL параметър-а "page"
//действията са два вида покзване на форма и обработка на данните 
// кое от т= двете ще се изпълнява зависи от http метода 
//ако е GET заявка ще показваме формата 
//ако е POST ще обработваме данните 
//
//
//
//
//пример получена GET->index.php?page=login  показва формата за вход
// получена POST->index.php?page=login  ще обработва формата 

//фаилове и папки 
//1.папка views съдържа изгледи (хтмл+пхп)
//2.папка controllers sydyrva logika 
//2.1 за всяка страница име отделна папка 
//2.2. за всяка папка има два фаила за показване и за вю
//display.php-показва конкретна старница 
//process.php-обработва данните 
//3. папка data-съдържа данни за потребители 
//

// "вълшебна константа" има стойността на пълния път до файла с който работим 
//стартира сесия като изпраща бисквитка с уникален код 
//нарича се сессия защото ше бъде унищожена след затварян ена ТАБА
//след атартиране иммаме достъп до масива СЕССИОН който няма предварително дефинирани ключови стойности 
//а ние го допълваме с инфо което ние искаме 
// 
// 
//

//дефинираме пътища до съответните папки-директории 
define('VIEWS_DIR',__DIR__.'/views');
define('CONTROLERS_DIR',__DIR__.'/controlers');
define('DATA_DIR',__DIR__.'/data');
// до съответните файлове 
 define('DISPLAY_FILE','/display.php');
define('PROCESS_FILE','/process.php');
define('URL_PARAM','page');//url 
define('HOME_PAGE','home');
//използваме урл_парам защото паже-то може да го сменим след време 
if(!empty($_GET[URL_PARAM])){//тук започва кода ако има заявка тръгва 
    $page=$_GET[URL_PARAM];
}else
{
    $page=HOME_PAGE;
}
  
$dir=CONTROLERS_DIR.'/'.$page;//води ни в контролерс папки с логика
if($_SERVER['REQUEST_METHOD']=='GET'){
    //ako е гет взема файла и показва съдържание
    $file=DISPLAY_FILE;
}else if($_SERVER['REQUEST_METHOD']=='POST'){
  //ако е пост извежда фаил за обработка на данни 
    $file=PROCESS_FILE;
    
}else{
    //...
    http_response_code(405);
    exit();
    
}
$filePath=$dir.'/'.$file;

if(!file_exists($filePath)){
    //ако файла не съществува пращаме грешка 
     
    http_response_code(404);//за браузера трябва да знае че няма такъв реззултат 
    
    exit();
}

require_once $filePath;








    






























<?php 
//require_once './src/Database/AdapterInterface.php';
//require_once'./src/Database/MysqlAdapter.php';

$autoloadCallback=function($className){
    $filePath='./src/'.str_replace('\\','/',$className).'.php';
    require_once $filePath;
}
  ;
  spl_autoload_register($autoloadCallback);//намира къде е класа и г изарежда автоматично бе да пишем РЕКУАРЕД_ОнСЕ
//използване MYSQ_ АДАПТЕР от пространството датабасе
//use Database\MySQL\Adapter as MySQLAdapter;
//  use Database\AdapterFactory;
//  use Database\AdapterInterface;
////$factory=new AdapterFactory();
//$db=$factory->create('mysql');     
use Models\Country;
use Models\City;


//$db=new MySQLAdapter(); 
//var_dump();
////
////
// class ExtendedFactory extends AdapterFactory{
//     public static function create(string $type): AdapterInterface{
//         //self  е контекста на класа който се извиква 
//         //имаме втори статичен контекст който е ""статик""
//         var_dump(__METHOD__);
//         return parent::create($type);
//     }
// }
//
try{
    //$country=Country::find('BGR');
    $city=City::find(450);
echo $city->id.': '.$city->name.' ('.$city->population.')';
//    $db= ExtendedFactory::factory('mysql');
//    var_dump($db->fetch('country'));
    
    
    
} catch (Exception $ex) {
    
   echo $ex->getMessage(); 

}


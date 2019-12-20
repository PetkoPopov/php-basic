<?php

//require_once './src/Database/AdapterInterface.php';
//require_once'./src/Database/MysqlAdapter.php';

$autoloadCallback = function($className) {
    $filePath = './src/' . str_replace('\\', '/', $className) . '.php';
    //echo $filePath;die;
    require_once $filePath;
}
;
spl_autoload_register($autoloadCallback); //намира къде е класа и г изарежда автоматично бе да пишем РЕКУАРЕД_ОнСЕ
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
//
//
// class ExtendedFactory extends AdapterFactory{
//     public static function create(string $type): AdapterInterface{
//         //self  е контекста на класа който се извиква 
//         //имаме втори статичен контекст който е ""статик""
//         var_dump(__METHOD__);
//         return parent::create($type);
//     }
// }
//
try {
    //$country=Country::find('BGR');
    $city = City::find(42); //отиваме в МОДЕЛ.пхп//числото във find(?) ще се сравнява с праймери кий на талицата
    echo $city->id . ': ' . $city->name . ' (' . $city->population . ')';

    $city=new City();
    $city->population=23000;
    $city->name='karlovo';
//$city=City->
    ///$city->values['Name'=>'karlovo'];
//$city->loaded=true;
var_dump($city);
echo '<br/>';
var_dump($city->values);
    //var_dump($city->loaded);
//    $values = [
//        'Name' => 'Karlovo'
//    ];
    //var_dump($adapter);
    //$dbAdapter->insert('City', $values);
    // $city=City::save();
    //$city=City:: values('kalrovo',10000);
//    
//echo $city->name;
//echo '<br/>';
//echo $city->population;
//echo $city->table;
//$city->save('kalrovo',10000);
//    $db= ExtendedFactory::factory('mysql');
//    var_dump($db->fetch('country'));
} catch (Exception $ex) {

    echo $ex->getMessage();
}


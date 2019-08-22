<?php

// 2-инцапсулатион.php 

//Принципи на ООП -наследяване , инкапсулация(херметизация) и полиморфизъм 

//херметизация


class myTestClass{
    public $someProp=124;
   private $aPrivate='this is rivate prop ';
    public function someMethod()
    {
        return $this->aPrivate;
    }
}
$object= new myTestClass();
//publicмогат да бъдат достъпвани извън тялото на класа
echo $object->someProp;
echo'<br/>';
echo $object->someMethod();
//echo'<pre>';
//var_dump($_SERVER);
//echo'</pre>';
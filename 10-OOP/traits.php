<?php
//10-ооп/траитс.пхп

//TRAIT oop sструктура със фрагменти от класове - пропъртита методи констани и т.н 
// като целта на тази фрагменти е да се иползварт в класовете и да се избягва повторно писане на код 

// от трейтовете немогата да се създават обекти 
// те не са класаве те са по скоро Шаблони 
trait MyTestTrait{
    public $MyProp='sdfghj';
    public function myMethod(){
        var_dump(__METHOD__);
    }
}



class MyClass{
    use MyTestTrait;
}

class MySEcondClass{
    use MyTestTrait;
}
$object=new MyClass();
echo $object->MyProp;
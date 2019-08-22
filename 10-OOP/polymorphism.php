<?php

//4-polimorfism.php
// възможност да работим с един обект без значение неговия конкретен клас 

//интерефейси обектна структура която дефинира какви методи ТРЯБВА да съдържа 
//един обект който използва въпросния интерфейс 
//
interface DoSomethingInterface{
    public function doSomething():string;
    const INTERFACE_CONST='this is interface';
}

interface SomeInterface extends DoSomethingInterface{
    
}
interface SecondInterface extends DoSomethingInterface{
    
}
//поддържат и множествено наследяване 
interface ManyInterfaces extends DoSomethingInterface, SecondInterface{
    //''
}
//edin klas trqbwa da implementira можество интерфейси като трябва задължително 
//да имплементира всички методи или да се ообяви за обстрактен 
abstract class BaseClass implements DoSomethingInterface{
    //abstract public function doSomething():string;
}

class ConcreteClassB extends baseClass{
    public function doSomething():string
    {
        return __METHOD__;
    }
}
class ConcreteClassA extends baseClass{
    public function doSomething():string
    {
        return 'do something';
    }
}
class ConcreteC extends stdClass implements DoSomethingInterface{
    public function doSomething():string
    {
        return 'concrete classC';
    }
}

$objectA=new ConcreteClassA;
$objectB=new ConcreteClassB;
//function test_polymorph(ConcreteClassA $object){
//function test_polymorph(BaseClass $object){
function test_polymorph(DoSomethingInterface $object){
    echo $object->doSomething();
}
test_polymorph($objectA);
echo'<br/>';
test_polymorph($objectB);
echo '<br/?>';
$objectC=new ConcreteC();
test_polymorph($objectC);

var_dump(
        !($objectA instanceof BaseClass),
$objectB instanceof BaseClass,
$objectC instanceof BaseClass,
        $objectA instanceof DoSomethingInterface
        
        
        
        );













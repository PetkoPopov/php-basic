<?php
//3- inheritance.php


// наследяване 
/**
 * абстарктните задължително се наследяват и немогат да се правят обекти 
 * 
 */
abstract class Device{
    
    
    public $ram;
     public $cpu;
     protected $someProtectedProp='Protected Prop';//може да се нследява но неможе да се достъпва извън тялото на класа или класа наследник 
      public function overClokCpu(){
     $this->cpu *=3;
      }
      /**
       * абс методи дефинират само наличието на такъв метод и оставят реализацията на наследниците 
       * и наследниците трябва задължително да реализират метода 
       * 
       */
     abstract public function calculate();
      
}
 class Computer extends Device{
     
     public $ram;
     public $cpu;
     public $powerBlock;
     public function calculate() {
         ;
     }
     public function overClokCpu(){
         parent::overClokCpu();
         $this-> cpu *=5;
     }
     public function someMethod(){
         echo $this->someProtectedProp;
     }
 }
 $pc=new Computer();
 $pc->someMethod();
 
 class smartphone extends Device{
    
     public $battery;
      public function calculate()
      {
          echo 34;
      }
     
     public function charge(){
         echo '<pre>';
         print_r($_SERVER);
         echo '</pre>';
     }
     
 }
     
    
     
     
     
 
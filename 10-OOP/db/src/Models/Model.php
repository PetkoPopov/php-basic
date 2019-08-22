<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

use Database\AdapterInterface;
use Database\AdapterFactory;
/**
 * Description of Model
 *
 * @author PETKO
 */
abstract class Model {
    

    protected $dbAdapter;

    /**
     * ime na tablica 
     * 
     */
    protected $table = '';

    /**
     * ima na kolona koqto e parwi4en klu4
     */
    protected $primaryKey = '';
    protected $columnMap = [];
    /**
     *
     * @var type 
     * флаг определящ дали обекта е зареден илие нов 
     */
    protected $loaded=false;

    /**
     *
     * @var type стойносту=ите на пропертита в БД
     */
    protected $values = [];

    public function __construct() {
        $this->dbAdapter = AdapterFactory::create('mysql');//създава нов обект от класс ПДО с БД МСЯЛ
    }

    public static function find($code) {
        $object = new static();
        $object->loaded=true;
        $condition = [$object->primaryKey => $code];
        $rows = $object->dbAdapter->fetch($object->table, $condition);
        if (!count($rows)) {
            throw new \RuntimeException('no rows');
        }
        foreach ($rows[0] as $columnName => $value) {
            if (!array_key_exists($columnName, $object->columnMap)) {
                continue;
            }
            $propName = $object->columnMap[$columnName];
            $object->values[$propName] = $value;
        }

        return $object;
    }

    public function __get($name) {
        if (array_key_exists($name, $this->values)) {

            return $this->values[$name];
        }
    }
    public function __set($name, $value) {
        if (array_key_exists($name, $this->values)) {

            $this->values[$name]=$value;
        }
        
    }
    public function save(){
        $data=[];//
        foreach($this->values as $propName=>$value){
            $columnName= array_search($propName,$this->columnMap);
            $data[$columnName]=$values;
        }
        if($this->loaded){
            $pk=$this->primeryKey;
            $condition=[$pk=>$data[$pk]];
            unset($data[$pk]);
         $this->dbAdapter->update($this->table,$data,$condition);            
        }else{
            $dbAdapter->insert($this->table,$data);
        }
        
        
        
        
        
    }
    public function delete(){
            $pk=$this->primaryKey;
            $condition=[$pk=>$this->values[$pk]];
            $this->dbAdapter->delete($this->table, $condition);
        }
}


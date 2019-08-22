<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

/**
 * Description of City
 *
 * @author PETKO
 */
class City extends Model{
   
    protected $table='city';
    protected $primaryKey='ID';
    protected $columnMap=[
      'ID'=>'id',
        'Name'=>'name',
       'Population'=>'population' 
    ];
}

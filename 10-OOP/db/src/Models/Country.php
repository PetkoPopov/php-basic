<?php

namespace Models;


/**
 * $country = Country::find('BGR');
 * $country  -> name='България';
 * $country -> save();
 * 
 * $country = new Country();
 * $country->code='XYZ';
 * $country->name='mordor';
 * $country->save();
 */


class Country extends Model{
       
    protected $table = 'country';

    /**
     * ima na kolona koqto e parwi4en klu4
     */
    protected $primaryKey = 'code';
    protected $columnMap = [
        'Code' => 'code',
        'Name' => 'name',
        'Continent' => 'continent',
        'Population' => 'population'
    ];

    }



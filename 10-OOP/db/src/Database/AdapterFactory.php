<?php

namespace Database;

use Database\MySQL\Adapter as MySQLAdapter;
use Database\postgre\Adapter as PostgreAdapter;
use RuntimeException;
use UnexpectedValueException;

/**
 * Description of AdapterFactory
 *
 * @author PETKO
 */
class AdapterFactory {//целта е да създава обекти по параметър дали е СЯЛ или монго иили друо=го 
/**
 *
 * @var type 
 * стстичен метод ззаз работа с БД
 * те се използват чрез името на класа 
 * вместо чрез създаване на обект 
 * Вътре в тялото на класа достъпа до статичнте елементи става черз СЕЛФ ИЛИ СТАТИК
 */
    protected static $config = [ 
        'host' => 'localhost',
        'name' => 'world',
        'user' => 'root',
        'password' => ''
    ];

    public static function create(string $type): AdapterInterface {
        switch ($type) {
            case'mysql';
                $adapter = new MySQLAdapter();
                break;
            case 'postgre';
                $adapter = new PostgreAdapter();
                break;

            default :
                throw new UnexpectedValueException('unknown adapter type');
        }
        if ($adapter->connect(self::$config)) {
            return $adapter;
        }
        throw new RuntimeException($adapter->getError());
    }

    public static function factory($type) {
        return self::create($type);
        //статик е контекста на класа където се извиква метода без начение къде е дефиниран 
    }

}

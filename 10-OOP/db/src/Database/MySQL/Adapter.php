<?php
namespace Database\MySQL;
use Database\AbstractPDOAdapter;



/**
 * Description of Adapter
 *
 * @author PETKO
 */
class Adapter extends AbstractPDOAdapter{
    protected function getDSN(array $config):string
    {
        return 'mysql:host='.$config['host'].';dbname='.$config['name'];
    }
}

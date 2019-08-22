<?php

namespace Database\postgre;
use Database\AbstractPDOAdapter;
/**
 * Description of Adapter
 *
 * @author PETKO
 */
class Adapter extends AbstractPDOAdapter{
    protected function getDSN(array $config):string
    {
        throw new LogicException('Postgre ids not instalesd');
    }
    
}

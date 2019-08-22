<?php


namespace Database;//задава пространство от имена DATABASE ("" виртуална папка "")
// всичко във файла надолу в= е във това пространство 

use PDO ;//задава използване на клас ПДО от основно пространство 
//всички врадени в php класове се намират в основното пространство 
// нямат namespace
/**
 * Description of MysqlAdapter
 *
 * изкарваме(имплементираме  с алт+ентер
 * @author PETKO
 */
use Exception;
 abstract class AbstractPDOAdapter implements AdapterInterface{
    
    /**
     *
     * @var PDO 
     */
    protected $pdo;
    protected $error;
    public function connect(array $config): bool {
        //$dsn='mysql:host='.$host.';dbname='.$name;
        $dsn=$this->getDSN($config);
        try{        
        
             //седобавя код който да изхвърли изключение , като ако такова бъде хвърлено изпълнението на блока спира и отиваме в КЕЧ блока
            //кеч блок е за прихващане на изкл който ни дава инфо за грешката , служи за безопасно измъкване от ситуацията 
            // да се логва грешката и изпълнението за се ивършва без показ на грешката 
            
            $this->pdo=new PDO($dsn,$config['user'],$config['password']);
            return true;
        } catch (Exception $ex) {//exception е обект който хваща долар ЕКС като го добавяме в неймспейса горе 
            
            //var_dump($ex);
            $this->error=$ex->getMesage();
            return false;
                      
        }
        
    }

     abstract protected function getDSN(array $config):string;
     
    public function delete(string $table, array $condition) {
        //..
    }

    public function disconnect() {
        $this->pdo=null;
    }

    public function fetch(string $table,
            array $condition = array(),///['key'=>'value']where `key`=:key
            ?int $limit = null, 
            ?int $offset = null, 
            array $order=[])
            :array  {
        $sql="SELECT * FROM $table";
        $params=[];
        if($condition){
            $sql.=" WHERE ";
            $conditionsFields=[];
            foreach($condition as $field=>$value){
                $conditionsFields[]=$field.' = :'.$field;//интервалите са важни иначе неможе да се генерира СЯЛ заявка 
                $params[$field]=$value;
            }
            $sql.=implode(' AND ',$conditionsFields);
            if($order){
                //..
            }
            if($limit){
                $sql .=" LIMIT ".(int)$limit;
                if($offset){
                    $sql .=' OFFSET '.(int)$offset;
                }
            }
            
        }
        ///var_dump($sql);
        $stmt=$this->pdo->prepare($sql);
        if($params){
            foreach($params as $paramName=>$paramValue){
                $stmt->bindValue($paramName,$paramValue);
            }
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getError(): string {
        return '';
    }

    public function getInsertId() {
        if($this->pdo instanceof PDO){ //ако ПДО е изнстанция  на ккласса върни ластИнсърт
            return $this->pdo->lastInsertId();
            
        }
        return nulll;
        
    }

    public function insert(string $table, array $values){
        //..
    }

    public function update(string $table, array $values, array $condition) {
        //..
    }

     public function __destruct(){
        $this->disconnect() ;
        //var_dump(__METHOD__);
     }
}

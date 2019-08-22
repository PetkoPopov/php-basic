<?php
namespace Database;
/**
 *
 * @author PETKO
 */
interface AdapterInterface {
    /**
     * метод за връзка с БД 
     * 
     * @param string $host       адрес на БД
     * @param string $name       име на БД
     * @param string $user       потребител за връзка
     * @param string $password    парола
     * @return bool              ако свързването е усоешно връща боол стойност 
     * 
     */
    public function connect(array $config ): bool;
   
    /**
     * prekratqwa wtyzkata s BD 
     * 
     */
    public function disconnect();
    /**
     * 
     * @param string $table
     * @param array $condition
     * @param int|null $limit
     * @param int|null $offset
     * @param array $order
     * връща масив означено с двете точки 
     */
    public function fetch(
            string $table,
            array $condition=[],
            ?int $limit=null,
            ?int $offset=null,
            array $order=[]
            ): array ;
    /**
     * 
     * @param string $table
     * @param array $values
     */
    public function insert(string $table,array $values);
    /**
     * 
     * @param string $table
     * @param array $values
     * @param array $condition
     */
    public function update(string $table,array $values, array $condition);
     /**
      * 
      * @param string $table             име на таблицата 
      * @param array $condition         условия за изтриване
      */
    public function delete(string $table, array $condition);
    /**
     * даване последната стойност от БД стойноцт
     * 
     * @return mixed генерирана стойност от бД 
     * 
     */
    public function getError():string;
     public function getInsertId();
}

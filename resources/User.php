<?php
/**
 * Created by PhpStorm.
 * User: eeglit
 * Date: 12.05.2015
 * Time: 15:51
 */

class User
{
    private $connection;

    public function __construct($mysqlConnection)
    {
        $this->connection = $mysqlConnection;
    }

    public function find_all() {
        $result_set = $this->connection->query("SELECT * FROM users");
        return $result_set;
    }

    public function  find_by_id($id=1) {
        $result_set = $this->connection->query("SELECT * FROM users WHERE id=[$id]");
        $found = $this->connection->fetch_array($result_set);
        return $found;
    }
}
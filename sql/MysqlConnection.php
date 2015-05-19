<?php

class MysqlConnection
{
    private static $connection;

    public static function getConnection()
    {
        if (null === self::$connection) {
            self::initialize();
        }

        return self::$connection;
    }

    private static function initialize()
    {
        // Create connection
        $conn = new mysqli("localhost", "root", "", "owgs");
        $conn->set_charset('utf8');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        self::$connection = $conn;
    }
}
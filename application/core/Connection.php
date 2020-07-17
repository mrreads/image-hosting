<?php

namespace Application\Core;

class Connection
{
    private $dbh;
    public static $connected;

    public function __construct()
    {
        (self::$connected == false) ? $this->connect() : null;
    }

    public function connect()
    {
        $config = require_once __DIR__ . '/../config/database.php';
        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['host'];
        $options =
        [
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' .$config['charset']
        ];
        try
        {
            $this->dbh = new \PDO($dsn, $config['user'], $config['password'], $options);
            self::$connected = true;
        }
        catch (\PDOException $e)
        {
            exit($e->getMessage());
        }
    }

    public function query()
    {
        return self::$connected;
    }

}
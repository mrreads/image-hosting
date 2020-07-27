<?php

namespace Application\Core;

class Connection
{
    public static $dbh;
    public static $connected;

    public function __construct()
    {
        (self::$connected == false) ? $this->connect() : null;
    }

    public static function connect()
    {
        $config = require_once __DIR__ . '/../config/database.php';
        $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['host'];
        $options =
        [
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' .$config['charset']
        ];
        try
        {
            self::$dbh = new \PDO($dsn, $config['user'], $config['password'], $options);
            self::$connected = true;
        }
        catch (\PDOException $e)
        {
            exit($e->getMessage());
        }

    }

    public static function query($query)
    {
        $sth = self::$dbh->prepare($query);
        $sth->execute();
        $result = $sth->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public static function queryAll($query)
    {
        $sth = self::$dbh->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public static function queryExecute($query)
    {
        self::$dbh->prepare("$query")->execute();
    }

    public static function writeImagePath($path)
    {
        $path = self::$dbh->quote($path);
        $query = "INSERT INTO `images` (`id_image`, `image_path`) VALUES (NULL, '$path');";
        try
        {
            self::$dbh->prepare($query)->execute();
        }
        catch (\PDOException $e)
        {
            exit($e->getMessage());
        }
    }
}
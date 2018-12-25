<?php
namespace App;

use PDO;

class DB {
    protected static $config;
    protected static $connection;
    protected $pdo;

    protected function __construct()
    {
        $charset = 'utf8';

        $dsn = "mysql:host=" . self::$config['host'] . ";dbname=" . self::$config['database'] . ";charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, self::$config['user'], self::$config['password'], $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function setConfig($config): void
    {
        self::$config = $config;
    }

    public static function get(): PDO
    {
        if (!self::$connection) {
            self::$connection = new self();
        }
        return self::$connection->pdo;
    }
}

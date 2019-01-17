<?php

class Database
{
    private static $pdo;

    public static $operators = ['=', '!=', 'and', 'or', 'like'];

    private $table;

    public static function connect(string $method)
    {
        static::$pdo = $method;
        return new static;
    }

    public function table(string $name)
    {
        $this->table = $name;
        return $this;
    }

    public function insert(array $data)
    {
        var_dump('Connected to the database using ' . self::$pdo);
        var_dump("INSERTING INTO {$this->table} VALUES(".json_encode($data).")" );
    }

}

header('Content-Type:text/plain', true);

Database::connect('PDO')->table('UserTable')->insert(['username' => 'Johnny', 'password' => 'Johnny123']);
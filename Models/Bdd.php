<?php

namespace Models;

use PDO;

class Bdd
{
    /**
     * @return PDO
     */
    protected static function getPdo()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'site_actualités';

        return new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
    }

    /**
     * @param string $query
     * @return array|false
     */
    public static function select(string $query)
    {
        $rows = self::getPdo()->query($query)->fetchAll();

        return $rows;
    }

    /**
     * @param string $query
     * @return mixed
     */
    public static function first(string $query)
    {
        return self::select($query)[0];
    }
}

<?php

/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
class Database //patern singleton
{
    private static $instance = null;
    /**
     * Connection à la bdd avec pdo
     * Static
     * @return PDO
     */
    public static function getBdd(): PDO
    {
        if (self::$instance === null) {
            self::$instance = new PDO("mysql:host=localhost;dbname=immo;charset=UTF8", "app_loc", "IB6lIdOrsrCp12Kv", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        return self::$instance;
    }
}

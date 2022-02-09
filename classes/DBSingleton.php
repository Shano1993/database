<?php

class DBSingleton
{
    private static ?PDO $PDO = null;
    public function __construct()
    {
        if (self::$PDO === null) {
            try {
                $db = new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_DATABASENAME.";charset=".Config::DB_CHARSET, Config::DB_USERNAME, Config::DB_PASSWORD);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Base de donnée connectée" . "<br>";
            }
            catch (Exception $exception) {
                die();
            }
        }
        return self::$PDO;
    }
}


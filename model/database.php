<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('appmvcphp-mysqldbserver.mysql.database.azure.com;dbname=mysampledb;charset=utf8', 'zlamg@appmvcphp-mysqldbserver', 'Mauriy11');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}


<!--
@creator : MARQUES Simon
@create : 24/09/2020
@last_update :24/09/2020-->

<?php

    $dsn = 'mysql:dbname=projet_web_3il;host=127.0.0.1';
    $user = 'root';
    $password = '';
    try {
        $dbh = new PDO($dsn, $user, $password);
    }catch(PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
        return false;
    }

class Object{
    public $connectBDD = false;

function __construct()
{
    $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
    $user = 'dbuser';
    $password = 'dbpass';
    try {
        $dbh = new PDO($dsn, $user, $password);
        $this->connectBDD = true;
    } catch (PDOException $e) {
        this->connectBDD = false;
    }             
}
}
?>
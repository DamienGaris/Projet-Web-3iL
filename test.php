<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ .'/eds-www/Modele/administrateur.classe.php');
$test = new Administrateur();
// $check=$test->createAdmin('test','test');
$check = $test->tryConnection('test','test');
var_dump($check);
?>
<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ .'\Projet-Web-3iL\Model\administrator.classe.php');
require_once(__ROOT__ .'\Projet-Web-3iL\Model\object.classe.php');
$test = new Administrateur();
$object = new Object();
$data = $object->getListAffect();
var_dump($data);
// $check = $object->updateDisplay(2,0);
// var_dump($check);
// $check = $object->deleteObject(1);
// var_dump($check);
// $check = $object->addObject('Titre3',15,6,'des','chemin');
// var_dump($check);
// $check = $test->deleteAdmin('test');
// $check=$test->createAdmin('test','test');
// $check = $test->dataConstruct('test','test');
// if($check){
//     var_dump($test);
// }
?>
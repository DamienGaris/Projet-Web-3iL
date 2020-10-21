<?php
    require_once('..\Model\object.classe.php');
    $object = new Object();
    switch($_POST['event']){
        case 'update':
            $updateOrNot = $object->updateText($_POST['titre'],$_POST['cat1'],$_POST['cat2'],$_POST['cat3']);
            if(!$updateOrNot){
                echo json_encode(array("Check"=>"false", "Text"=>"Erreur lors de la mise à jour des textes!"));
            } else{ 
                echo json_encode(array("Check"=>"true"));
            }
        break;
    }
?>
<?php
    require_once('..\Model\object.classe.php');
    $data = $_POST;
    $object= new Object();
    switch($_POST['event']){
        case 'create':
            $successCreateOrNot =  $obect->addObject($_POST['titre'], $_POST['prix'],$_POST['description'],$_POST['categorie'],$_POST['taille'],$_POST['file']);
            if(!$successCreateOrNot){
                echo json_encode(array("Check"=>"false", "Text"=>"False"));
            } else{
                echo json_encode(array("Check"=>"false", "Text"=>"True"));
            }
            
            // $createOrNot = $object->addObject($_POST[POS])
        break;
    }
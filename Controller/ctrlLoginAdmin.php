<?php
    require_once('..\Model\administrator.classe.php');
    $data = $_POST;
    $admin = new Administrateur();
    switch($_POST['event']){
      case 'log':  
        if (empty($_POST['login']) || empty($_POST['mdp'])){
            echo json_encode(array("Check"=>"false", "Text"=>"Données vide!"));
        }
        $connectionOrNot = $admin->tryConnection($_POST['login'],$_POST['mdp']);
        if(!$connectionOrNot){
            echo json_encode(array("Check"=>"false", "Text"=>"Erreur mot de passe ou login!"));
        } else{
            echo json_encode(array("Check"=>"true"));
        }
        break;
      case 'create' :
        if (empty($_POST['login']) || empty($_POST['mdp'])){
            echo json_encode(array("Check"=>"false", "Text"=>"Données vide!"));
        }
        $createOrNot = $admin->createAdmin($_POST['login'],$_POST['mdp']);
        if(!$createOrNot){
            echo json_encode(array("Check"=>"false", "Text"=>"Erreur de création de l'administrateur!"));
        } else{
            echo json_encode(array("Check"=>"true"));
        }
        break;
    }
?>
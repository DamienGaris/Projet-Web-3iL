<?php
    require_once(__ROOT__ .'\Projet-Web-3iL\Model\administrator.classe.php');
    $data = $_POST;
    echo $data;
    $admin = new Administrateur();
    switch($_POST['event']){
      case 'log':  
        if empty($_POST){
            echo json_encode(array("Erreur"=>"Données vide!"));
        }
        $connectionOrNot = $admin->tryConnection($_POST['login'],$_POST['mdp']);
        if(!$connectionOrNot){
            echo json_encode(array("Erreur"=>"Erreur mot de passe ou login!"));
        } else{
            echo json_encode(true);
        }
        break;
      case 'create' :
        if empty($_POST){
            echo json_encode(array("Erreur"=>"Données vide!"));
        }
        $createOrNot = $admin->createAdmin($_POST['login'],$_POST['mdp']);
        if(!$createOrNot){
            echo json_encode(array("Erreur"=>"Erreur de création de l'administrateur!"));
        } else{
            echo json_encode(true);
        }
    }
?>
<?php
    require_once('..\Model\object.classe.php');
    $data = $_POST;
    $object= new Object();
    if(empty($_POST['event'])){
        $_POST['event'] = 'default';
    }
    switch($_POST['event']){
        case 'create':
            $successCreateOrNot =  $object->addObject($_POST['titre'], $_POST['prix'],$_POST['description'],$_POST['categorie'],$_POST['date'],$_POST['taille']);
            if(!$successCreateOrNot){
                echo json_encode(array("Check"=>"false", "Text"=>"Erreur lors de l'enregistrement des données de l'objet(sans image)!"));
            } else{
                echo json_encode(array("Check"=>"True", "Text"=>"True"));
            }
        break;
        case 'delete':
            $successDeleteOrNot = $object->deleteObject($_POST['id']);
            if(!$successDeleteOrNot){
                echo json_encode(array("Check"=>"false", "Text"=>"Erreur lors de la suppression e l'objet!"));
            } else{
                echo json_encode(array("Check"=>"True"));
            }
        break;   
        case 'default' :
        break;
    }

    if(!empty($_FILES['image'])){
        $target_dir = "../Vue/assets/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $target_file_bdd = "assets/" . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $result = $object->insertImg($target_file_bdd);
            if (!$result){
                echo "Erreur lors de l'ajout du chemin dans la base de données!";
            } else {
                header("Location: ../Vue/administrator.php");
            }
        } else{
            $message = "Erreur lors de l'ajout de l'image!";
            echo $message;
        } 
    }              

?>
    
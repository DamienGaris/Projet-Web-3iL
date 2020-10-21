<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ .'\Model\administrator.classe.php');
session_start();
$log = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Coucou</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/connectAdmin.js"></script>
    <script type="text/javascript" src="../Script/textAccueil.js"></script>
  </head>
  <body>
  <div>
    Partie admin :
  </div>
  <div>
      <button id="sup" onclick="suppressionAdmin('<?php echo $log; ?>')">Suppression</button>
  </div>
  <div>
    <p>
        <a href="createObject.php">Création d'object</a>
    </p>
  </div>
  </br></br></br>
  <div>
    Texte de la page d'accueil :
  </div>
  <div>
        <label>Titre:</label>
        <input id="titre" value="">
    </div>
    <div>
        <label>Titre catégorie produit 1 :</label>
            <input  id="catPro1" value="">
    </div>
    <div>
        <label>Description catégorie produit 1 :</label>
            <input  id="des1" value="">
    </div>
    <div>
        <label>Titre catégorie produit 2 :</label>
            <input  id="catPro2" value="">
    </div>
    <div>
        <label>Description catégorie produit 2 :</label>
            <input  id="des2" value="">
    </div>
    <div>
        <label>Titre catégorie produit 3 :</label>
            <input  id="catPro3" value="">
    </div>
    <div>
        <label>Description catégorie produit 3 :</label>
            <input  id="des3" value="">
    </div>
    <div>
      <button onclick="updateText()">Mettre à jour le texte</button>
  </div>
  </body>
</html>


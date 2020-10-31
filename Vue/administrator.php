<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ .'\Model\administrator.classe.php');
session_start();
$log = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin control</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/connectAdmin.js"></script>
    <script type="text/javascript" src="../Script/textAccueil.js"></script>
  </head>
  <body onload="changeHeader()">
    <header id="headerAdmin"> 
      <?php include("includes/nav.php"); ?>
    </header>
    <main class="adminControl-main">
          <section id="adminControl-section">
                <div class ="loadminControl-Box1">
                  <div>
                    <button onclick="window.location.href = 'createObject.php'" class="adminControl-button">Ajouter produit</button>
                  </div>
                  <div>
                    <button id="sup" class="adminControl-button-deleteAdmin" onclick="suppressionAdmin('<?php echo $log; ?>')">Supprimer admin</button>
                  </div>
                  <div>
                    <button onclick="window.location.href = 'deleteObject.php'" class="adminControl-button">Supprimer produit</button>
                  </div>
                </div>
                <div class ="loadminControl-Box2">
                  <h3>Modifier le texte de la page d'acceuil</h3>
                  <h4>1ère section</h4>
                  <div>
                    <label>Titre de la page d'acceuil</label>
                    <input  id="titre" value="">
                  </div>
                </div>
                <div class ="loadminControl-Box3">
                  <div>
                    <label>Titre catégorie produit 1</label>
                    <input class="input-control-admin" id="catPro1" value="">
                  </div>
                  <div>
                    <label>Description catégorie produit 1</label>
                    <input class="input-control-admin" id="des1" value="">
                  </div>
                </div>
                <div class ="loadminControl-Box4">
                  <div>
                    <label>Titre catégorie produit 2</label>
                    <input class="input-control-admin" id="catPro2" value="">
                  </div>
                  <div>
                      <label>Description catégorie produit 2</label>
                      <input class="input-control-admin" id="des2" value="">
                  </div>
                </div>
                <div class ="loadminControl-Box5">
                  <div>
                    <label>Titre catégorie produit 3</label>
                    <input class="input-control-admin" id="catPro3" value="">
                  </div>
                  <div>
                    <label>Description catégorie produit 3</label>
                    <input class="input-control-admin" id="des3" value="">
                  </div>
                </div>
                <div>
                  <button class="adminControl-button" onclick="updateText()">Mettre à jour le texte</button>
                </div>
                
        </section>
    </main>
  </body>
  <script type="text/javascript">
        function changeHeader(){
            document.getElementById("headerAdmin").style.backgroundImage = "url()";
            document.getElementById("headerAdmin").style.opacity = "1";
            document.getElementById("headerAdmin").style.height = "77px";
            document.getElementById("headerAdmin").style.borderBottom = "solid 2px";
        }
    </script>
</html>


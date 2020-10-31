<?php
require_once('..\Model\object.classe.php');
$object = new Object();
$dataObjectTel = $object->getObject('tel');
$dataObjectPc = $object->getObject('pc');
$dataObjectTab = $object->getObject('tablette');
?>

<html>
  <head>
    <title>Suppression objet</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/actionObject.js"></script>
  </head>
  <body onload="changeHeader()">
    <header id="headerAdmin"> 
          <?php include("includes/nav.php"); ?>
        </header>
        <main class="deleteProduct-main">
            <section class="deleteProduct-section">
                <div class ="deleteProduct-box">
                  <h3>Suppression de produits</h3>
                  <table id="table-product">
                    <tr>
                        <th> Nom du produit </th>
                        <th> Catégorie</th>
                        <th> Action </th>
                    </tr>
                    <?php
                        for($i=0;$i<count($dataObjectTel);$i++){
                          echo '<tr id="'.$dataObjectTel[$i]["id"].'">
                                    <td>'.$dataObjectTel[$i]["titre"].'</td>
                                    <td>Smartphone</td>
                                    <td><button class="adminControl-button" onclick="suppressionObject('.$dataObjectTel[$i]["id"].')">Suppression</button></td>
                                </tr>'; 
                        }
                        for($i=0;$i<count($dataObjectPc);$i++){
                            echo '<tr id="'.$dataObjectPc[$i]["id"].'">
                                    <td>'.$dataObjectPc[$i]["titre"].'</td>
                                    <td>Ordinateur portable</td>
                                    <td><button class="adminControl-button" onclick="suppressionObject('.$dataObjectPc[$i]["id"].')">Suppression</button></td>
                                  </tr>'; 
                        }
                        for($i=0;$i<count($dataObjectTab);$i++){
                            echo '<tr id="'.$dataObjectTab[$i]["id"].'">
                                    <td>'.$dataObjectTab[$i]["titre"].'</td>
                                    <td>Tablette</td>
                                    <td><button class="adminControl-button"  onclick="suppressionObject('.$dataObjectTab[$i]["id"].')">Suppression</button></td>
                                  </tr>'; 
                        }
                    ?>
                    </table>
                    <button class="back-button" onclick="window.location.href = '../Vue/administrator.php'">Retour</button>
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
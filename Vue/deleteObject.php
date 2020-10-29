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
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/actionObject.js"></script>
  </head>
  <body>
  <div>Suppression d'objets :</div>
  <table border="1">
    <tr>
        <th> Titre de l'objet </th>
        <th> Categorie</th>
        <th> Action </th>
    </tr>
    <?php
        for($i=0;$i<count($dataObjectTel);$i++){
           echo '<tr id="'.$dataObjectTel[$i]["id"].'">
                    <td>'.$dataObjectTel[$i]["titre"].'</td>
                    <td>Smartphone</td>
                    <td><button onclick="suppressionObject('.$dataObjectTel[$i]["id"].')">Suppression</button></td>
                 </tr>'; 
        }
        for($i=0;$i<count($dataObjectPc);$i++){
            echo '<tr id="'.$dataObjectPc[$i]["id"].'">
                    <td>'.$dataObjectPc[$i]["titre"].'</td>
                    <td>Ordinateur portable</td>
                    <td><button onclick="suppressionObject('.$dataObjectPc[$i]["id"].')">Suppression</button></td>
                  </tr>'; 
         }
         for($i=0;$i<count($dataObjectTab);$i++){
            echo '<tr id="'.$dataObjectTab[$i]["id"].'">
                    <td>'.$dataObjectTab[$i]["titre"].'</td>
                    <td>Tablette</td>
                    <td><button onclick="suppressionObject('.$dataObjectTab[$i]["id"].')">Suppression</button></td>
                  </tr>'; 
         }
    ?>
    </table>
  </body>
</html>
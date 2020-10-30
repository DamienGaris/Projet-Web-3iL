<?php
require_once('..\Model\object.classe.php');
$object = new Object();
$dataObject = $object->getObject('pc');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TITRE SITE WEB</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header> 
          <?php include("includes/nav.php"); ?>
          <section id="landing-section">
            <div id="main-text-wrapper">
                <h1>PC Portables</h1>
            </div>
          </section>
      </header>
        <main>
            <section id="store-section">
                <h3>Les meilleurs PC portables du marché</h3>
                <div id="store-items-wrapper">
                <?php
                for($i=0;$i<count($dataObject);$i++){
                    echo '<div class="store-item">
                            <img src='.$dataObject[$i]["chemin_img"].' alt="" style="width:'.$dataObject[$i]["taille"].'%;">
                            <h3>'.utf8_encode($dataObject[$i]["titre"]).'</h3><h2>'.$dataObject[$i]["prix"].'€</h2>
                            <p>'.utf8_encode($dataObject[$i]["description"]).'</p>
                            <p>'.utf8_encode($dataObject[$i]["date_sortie"]).'</p>';
                }
                ?>
                    <div class="store-item">
                        <img src="assets/macbookAir.png" alt="" style="width:40%;">
                        <h3>Macbook Air</h3><h2>1200€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/huaweiMatebook.png" alt="" style="width:40%;">
                        <h3>Huawei Matebook pro 13</h3><h2>899€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/asusZenbook.png" alt="" style="width:40%;">
                        <h3>Surface Laptop 3</h3><h2>1700€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/hpSpectre.png" alt="" style="width:40%;">
                        <h3>HP Spectre x360 13"</h3><h2>1400€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
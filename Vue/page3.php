<?php
require_once('..\Model\object.classe.php');
$object = new Object();
$dataObject = $object->getObject('pc');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PC Portables</title>
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
                                <p>'.utf8_encode($dataObject[$i]["date_sortie"]).'</p></div>';
                    }
                    ?>
                </div>
            </section>
        </main>
    </body>
</html>
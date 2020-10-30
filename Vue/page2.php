<?php
require_once('..\Model\object.classe.php');
$object = new Object();
$dataObject = $object->getObject('tablette');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TITRE SITE WEB</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body onload="changeHeader()">
        <header id="headerTablette"> 
          <?php include("includes/nav.php"); ?>
          <section id="landing-section">
            <div id="main-text-wrapper">
                <h1>TABLETTES</h1>
            </div>
          </section>
        </header>
        <main>
            <section id="store-section">
                <h3>Les meilleurs tablettes du marché</h3>
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
                        <img src="assets/ipadAir2020.png" alt="" style="width:30%;">
                        <h3>Ipad Air</h3><h2>669€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/galaxytabs.png" alt="" style="width:30%;">
                        <h3>Galaxy Tab S</h3><h2>719€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/huaweiMatePad.png" alt="" style="width:30%;">
                        <h3>Huawei MatePad pro</h3><h2>549€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/MicrosoftSurface.png" alt="" style="width:40%;">
                        <h3>Microsoft Surface Pro 7</h3><h2>1399€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script type="text/javascript">
        function changeHeader(){
        document.getElementById("headerTablette").style.backgroundImage = "url('assets/tablette.jpg')"; 
        }
    </script>
</html>
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
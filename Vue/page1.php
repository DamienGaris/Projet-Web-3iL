<!DOCTYPE html>
<html>
    <head>
        <title>TITRE SITE WEB</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body onload="changeHeader()" >
        <header id="headerSmartphone"> 
          <?php include("includes/nav.php"); ?>
          <section id="landing-section">
            <div id="main-text-wrapper">
                <h1>SMARTPHONES</h1>
            </div>
          </section>
        </header>
        <main>
            <section id="store-section">
                <h3>Les meilleurs smartphones du marché</h3>
                <div id="store-items-wrapper">
                    <div class="store-item">
                        <img src="assets/iphone11Pro.png" alt="" style="width:30%;">
                        <h3>Iphone 11 pro</h3><h2>1000€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/GooglePixel4a.png" alt="" style="width:40%;">
                        <h3>Google Pixel 4a</h3><h2>349€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/zfold.png" alt="" style="width:30%;">
                        <h3>Samsung ZFold 2</h3><h2>2000€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                    <div class="store-item">
                        <img src="assets/huaweip40pro.png" alt="" style="width:35%;">
                        <h3>Huawei P40 pro</h3><h2>680€</h2>
                        <p>DESCRIPTION</p>
                    </div>
                </div>
            </section>
        </main>        
    </body>
    <script type="text/javascript">
        function changeHeader(){
        document.getElementById("headerSmartphone").style.backgroundImage = "url('assets/headerSmartphone.jpg')"; 
        }
    </script>
</html>
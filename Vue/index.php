<?php
  require_once('..\Model\object.classe.php');
  $object = new Object();
  $data = $object->getText();
  $dataDefault = array();
  $dataDefault['titre'] = 'Bienvenue sur notre blog tech';
  $dataDefault['cat1'] = 'Smartphones';
  $dataDefault['cat2'] = 'Tablettes';
  $dataDefault['cat3'] = 'PC';
  $dataDefault['des1'] = 'En 2015, il s\'est vendu 1,4 milliard de smartphones dans le monde (source : IDC). Samsung occupait la tête des ventes suivi d\'Apple et de plusieurs marques chinoises (Huawei, Lenovo, Xiaomi).';
  $dataDefault['des2'] = 'Tablette (de l\'anglais tablet, plaque) est le nom donné à une famille d\'ordinateurs portables dépourvus de clavier à touches et munis d\'un écran tactile, de la même dimension qu\'une feuille A4 ou plus petits. L\'écran tactile est toujours multipoints, donc capable de détecter plusieurs touchers simultanés.';
  $dataDefault['des3'] = 'Ordinateur tout-en-un que l\'on peut déplacer en raison de sa taille compacte et de la présence d\'une batterie qui lui permet de fonctionner un moment sans avoir besoin de source d\'alimentation. L\'ordinateur portable est à la fois une unité centrale, un écran, un clavier et une souris.';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tech Blog</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <header> 
          <?php include("includes/nav.php"); ?>
          <section id="landing-section">
            <div id="main-text-wrapper">
                <h1>
                <?php
                  if(empty($data[0]['titre'])){
                    echo $dataDefault['titre'];
                  }else{
                    echo utf8_encode($data[0]['titre']);
                  }
                ?>
                </h1>
            </div>
          </section>
      </header>
        
        <main class="mainPage1">
          <section id="products-section">
            <div id="first-product" class="product-item">
                <h3>
                <?php
                  if(empty($data[0]["cat1"])){
                    echo $dataDefault["cat1"];
                  }else{
                    echo utf8_encode($data[0]["cat1"]);
                  }
                ?>
                </h3>
                <p>
                <?php
                  if(empty($data[0]["des1"])){
                    echo $dataDefault["des1"];
                  }else{
                    echo utf8_encode($data[0]["des1"]);
                  }
                ?>
                </p>
            </div>
            <div id="second-product" class="product-item">
                <h3>
                <?php
                  if(empty($data[0]['cat2'])){
                    echo $dataDefault['cat2'];
                  }else{
                    echo utf8_encode($data[0]['cat2']);
                  }
                ?>
                </h3>
                <p>
                <?php
                  if(empty($data[0]["des2"])){
                    echo $dataDefault["des2"];
                  }else{
                    echo utf8_encode($data[0]["des2"]);
                  }
                ?>
                </p>
            </div>
            <div id="third-product" class="product-item">
                <h3>
                <?php
                  if(empty($data[0]['cat3'])){
                    echo $dataDefault['cat3'];
                  }else{
                    echo utf8_encode($data[0]['cat3']);
                  }
                ?>
                </h3>
                <p>
                <?php
                  if(empty($data[0]["des3"])){
                    echo $dataDefault["des3"];
                  }else{
                    echo utf8_encode($data[0]["des3"]);
                  }
                ?>
                </p>
            </div>
        </section>

        <section class="carrousel-section">
          <div class="slideshow-container" id="carrousel">
            <script>
              loadXMLImages('images.xml');

              function loadXMLImages(url){
              var xmlhttp;
              var txt,x,y,i;

              xmlhttp= new XMLHttpRequest();
              xmlhttp.onreadystatechange=function(){

                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                  txt="";

                  x= xmlhttp.responseXML.documentElement.getElementsByTagName("IMG");
                  for(i=0;i<x.length; i++){
                    txt = txt +"<div class='mySlides fade'>";
                    y= x[i].getElementsByTagName("NOM");
                    txt =txt+ "<div class='nameProduct'>"+ y[0].firstChild.nodeValue+"</div>";
                    y= x[i].getElementsByTagName("URL");
                    txt = txt+ "<img src='"+y[0].firstChild.nodeValue+"'class='imgAcceuil'>";
                    y= x[i].getElementsByTagName("DESCRIPTION");
                    txt = txt +"<div class='description'>"+y[0].firstChild.nodeValue +"</div>";
                    txt = txt +"</div>";
                  }
                }
                document.getElementById('carrousel').innerHTML=txt;
              }
              xmlhttp.open("GET",url,true);
              xmlhttp.send();
              setTimeout(showSlides,500);
            }

            var slideIndex = 0;
            showSlides();
    
            function showSlides() {
              
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 3000); 
            }
            </script>
          </div>
          <br>
    
            <div class="dot" style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>

        </div>

        </section>
        <section id="topProducts-section">
          <h3>Top produits du mois</h3>
          <p id="topProducts-desc">Voici le Top des meilleurs produits sorties du mois de spetembre</p>

          <div id="topProducts-wrapper">
              <div class="topProducts-item">
                  <img src="assets/GooglePixel4a.png" />
                  <p class="topProducts-description">Le Google Pixel 4a est un smartphone milieu de gamme équipé d'un SoC Qualcomm Snapdragon 730G, épaulé par 6 Go de RAM et 128 Go de stockage, non extensible. Il bénéficie d'un capteur photo principal de 12.2 mégapixels. Il possède une batterie de 3140 mAh rechargeable via son port USB C et d'un port jack.</p>
                  <h3 class="topProducts-name">GOOGLE PIXEL 4a</h3>
                  <p class="topProducts-price">349 €</p>
              </div>
              <div class="topProducts-item">
                  <img src="assets/ipadAir2020.png" />
                  <p class="topProducts-description">L'iPad Air 4 est en effet le tout premier produit d'Apple à intégrer la puce Apple A14, gravée avec une finesse de 5 nanomètres, et les performances de ce nouveau processeur amené à équiper les futurs modèles d'iPhone seront bien évidemment analysées de près.</p>
                  <h3 class="topProducts-name">IPAD AIR 2020</h3>
                  <p class="topProducts-price">669 €</p>
              </div>
              <div class="topProducts-item">
                  <img src="assets/asusVivobook.png" />
                  <p class="topProducts-description">Que vous soyez au bureau ou chez vous, le ASUS VivoBook S14 est l'ultrabook qui vous plonge au coeur de chaque tâche. Son écran NanoEdge à bords ultrafins arbore un cadre de 5,7 mm grâce auquel le rapport écran/appareil s'élève à 87% pour vous offrir des graphismes plus immersifs que jamais.</p>
                  <h3 class="topProducts-name">ASUS VIVOBOOK</h3>
                  <p class="topProducts-price">1000 €</p>
              </div>
          </div>
        </section>
        </main>
        </body>
    <script>
      function changeHeader(){
        document.getElementByTagName('header').style.background-image = "url('./assets/tablette.jpg')";
      }
    </script>
</html>
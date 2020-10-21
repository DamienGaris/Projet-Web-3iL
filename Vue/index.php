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
                <h1>Bienvenue sur notre blog tech</h1>
            </div>
          </section>
      </header>
        
        <main class="mainPage1">
          <section id="products-section">
            <div id="first-product" class="product-item">
                <h3>Smartphones</h3>
                <p>En 2015, il s'est vendu 1,4 milliard de smartphones dans le monde (source : IDC). Samsung occupait la tête des ventes suivi d'Apple et de plusieurs marques chinoises (Huawei, Lenovo, Xiaomi).</p>
            </div>
            <div id="second-product" class="product-item">
                <h3>Tablettes</h3>
                <p>Tablette (de l'anglais tablet, plaque) est le nom donné à une famille d'ordinateurs portables dépourvus de clavier à touches et munis d'un écran tactile, de la même dimension qu'une feuille A4 ou plus petits. L'écran tactile est toujours multipoints, donc capable de détecter plusieurs touchers simultanés</p>
            </div>
            <div id="third-product" class="product-item">
                <h3>PC</h3>
                <p>Ordinateur tout-en-un que l'on peut déplacer en raison de sa taille compacte et de la présence d'une batterie qui lui permet de fonctionner un moment sans avoir besoin de source d'alimentation. L'ordinateur portable est à la fois une unité centrale, un écran, un clavier et une souris.</p>
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
                    console.log(i);
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
        <section id="testimonials-section">
          <h3>Top produits du mois</h3>
          <p id="testimonials-desc">Voici le Top des meilleurs produits sorties du mois de spetembre</p>

          <div id="testimonials-wrapper">
              <div class="testimonial-item">
                  <img src="assets/GooglePixel4a.png" />
                  <p class="testimonial-message">Le Google Pixel 4a est un smartphone milieu de gamme équipé d'un SoC Qualcomm Snapdragon 730G, épaulé par 6 Go de RAM et 128 Go de stockage, non extensible. Il bénéficie d'un capteur photo principal de 12.2 mégapixels. Il possède une batterie de 3140 mAh rechargeable via son port USB C et d'un port jack.</p>
                  <h3 class="testimonial-by">GOOGLE PIXEL 4a</h3>
                  <p class="job-role">349 €</p>
              </div>
              <div class="testimonial-item">
                  <img src="assets/ipadAir2020.png" />
                  <p class="testimonial-message">L'iPad Air 4 est en effet le tout premier produit d'Apple à intégrer la puce Apple A14, gravée avec une finesse de 5 nanomètres, et les performances de ce nouveau processeur amené à équiper les futurs modèles d'iPhone seront bien évidemment analysées de près.</p>
                  <h3 class="testimonial-by">IPAD AIR 2020</h3>
                  <p class="job-role">669 €</p>
              </div>
              <div class="testimonial-item">
                  <img src="assets/asusVivobook.png" />
                  <p class="testimonial-message">Que vous soyez au bureau ou chez vous, le ASUS VivoBook S14 est l'ultrabook qui vous plonge au coeur de chaque tâche. Son écran NanoEdge à bords ultrafins arbore un cadre de 5,7 mm grâce auquel le rapport écran/appareil s'élève à 87% pour vous offrir des graphismes plus immersifs que jamais.</p>
                  <h3 class="testimonial-by">ASUS VIVOBOOK</h3>
                  <p class="job-role">1000 €</p>
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
<!DOCTYPE html>
<html>
    <head>
        <title>TITRE SITE WEB</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body onload="changeHeader()">
        <header id="headerVideos"> 
          <?php include("includes/nav.php"); ?>
          <section id="landing-section">
            <div id="main-text-wrapper">
                <h1>Tech videos</h1>
            </div>
          </section>
      </header>
        <main>
            <section id="store-section">
                <h3>Youtube Tech <img src="assets/youtube.png" class ="youtubeLogo"alt=""></h3>
                <div id="store-items-wrapper">
                    <div class="store-item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kf3Xwbk5pt0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>Justin TSE</h3>
                    </div>
                    <div class="store-item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/j7QwJ-M_GAI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>Marques Brownlee</h3>
                    </div>
                    <div class="store-item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SpLvfRE_rGo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h3>Karl Conrad</h3>
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script type="text/javascript">
        function changeHeader(){
        document.getElementById("headerVideos").style.backgroundImage = "url('assets/videos.jpg')"; 
        }
    </script>
</html>
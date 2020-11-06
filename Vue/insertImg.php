<!DOCTYPE html>
<html>
  <head>
    <title>Insérer image</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/actionObject.js"></script>
    <script type="text/javascript" src="../Script/textAccueil.js"></script>
  </head>
  <body onload="changeHeader()">   
    <header id="headerAdmin"> 
      <?php include("includes/nav.php"); ?>
    </header>   
    <main class="login-main">
            <section id="login-section">
                <div class ="loginBox">
                    <div class ="login-title">Création du produit réussie</div>
                    <form id="form2" action="../Controller/ctrlObject.php" method="post" enctype="multipart/form-data">
                      <div>
                        <label>Image</label>
                        <input type="file" name="image"/>
                      </div>
                      <div>    
                        <button id="login" class="button-login" type="submit">Ajouter l'image du produit</button>
                      </div>
                    </form>
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
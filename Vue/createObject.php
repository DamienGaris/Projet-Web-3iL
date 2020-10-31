<!DOCTYPE html>
<html>
  <head>
    <title>Ajouter produit</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/actionObject.js"></script>
    <script type="text/javascript" src="../Script/textAccueil.js"></script>
  </head>
  <body onload="changeHeader()">
    <header id="headerAdmin"> 
        <?php include("includes/nav.php"); ?>
    </header>
    <main class="createProduct-main">
        <section class="createProduct-section">
            <h3>Ajouter un produit</h3>
            <div class="createProduct-form" id="form1">
                <div>
                    <label>Nom du produit</label>
                    <input id="titre" value="">
                </div>
                <div>
                    <label>Prix en euros </label>
                    <input  id="prix" value="">
                </div>
                    <div>
                    <label>Desciption </label>
                        <input  id="description" value="">
                </div>
                <div>
                    <label>Date de sortie </label>
                        <input  id="date_sortie" value="">
                </div>
                <div>
                    <select id="categorie">
                        <option value="">--Catégorie du produit--</option>
                        <option value="tel">Smartphone</option>
                        <option value="pc">Ordinateur portable</option>
                        <option value="tablette">Tablette</option>
                    </select>
                </div>
                <div>
                    <label>Taille en % (entre 30 et 40)</label>
                    <input  id="taille" value="">
                </div>
                <div classe="createProduct-button">
                    <button class="back-button" onclick="window.location.href = '../Vue/administrator.php'">Retour</button>
                    <button id="login"class="button-login" type="submit" onclick="createObject()">Ajouter produit</button>
                </div>
                
            </div> 
        </section>
    <main>
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

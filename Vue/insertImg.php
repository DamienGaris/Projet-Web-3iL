<!DOCTYPE html>
<html>
  <head>
    <title>Coucou</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../Script/actionObject.js"></script>
    <script type="text/javascript" src="../Script/textAccueil.js"></script>
  </head>
  <body>      
  <div>
    Création réussite de l'object !
  </div>      
        <form id="form2" action="../Controller/ctrlObject.php" method="post" enctype="multipart/form-data">
            <div>
                <label> Image:</label>
                <input type="file" name="image"/>
            </div>
            <div>    
                <button id="login" type="submit">Ajouter l'image à l'objet</button>
            </div>
        </form>
    </body>
</html>
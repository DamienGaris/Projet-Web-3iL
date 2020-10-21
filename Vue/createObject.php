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
    Création de l'object
  </div>
  <div>
        <label>Titre:</label>
        <input id="titre" value="">
    </div>
    <div>
        <label>Prix en euros :</label>
            <input  id="prix" value="">
    </div>
    <div>
        <label>Desciption :</label>
            <input  id="description" value="">
    </div>
    <div>
        <label>Date de sortie :</label>
            <input  id="date_sortie" value="">
    </div>
    <div>
        <label> Image:</label>
            <input type="file" id="image" accept="image/png, image/jpeg">
    </div>
    <div>
        <select id="categorie">
            <option value="">--Catégorie de l'objet--</option>
            <option value="tel">Smartphone</option>
            <option value="pc">Ordinateur portable</option>
            <option value="tablette">Tablette</option>
        </select>
    </div>
    <div>
        <label>Taille en % :</label>
            <input  id="taille" value="">
    </div>
    <div>
        <button id="login" onclick="createObject()">Créer l'object</button>
    </div>
  </body>
</html>

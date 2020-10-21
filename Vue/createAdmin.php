<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../Script/connectAdmin.js"></script>
    </head>
    <body>
    <div class="header">
	    <h2>S'incrire</h2>
    </div>
    <div>
        <label>Entrez votre login:</label>
        <input id="login" value="">
    </div>
    <div>
        <label>Entrez votre mot de passe:</label>
            <input type="password" id="password" value="">
     </div>
    <div>
        <button id="login" onclick="createAdmin()">Créer</button>
    </div>
        <p>
            Déjà admin ? <a href="loginAdmin.php">Log In</a>
        </p>
    </form>
    </body>
</html>
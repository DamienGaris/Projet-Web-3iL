<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="header">
	    <h2>S'incrire</h2>
    </div>
    <form method="post">
        <div class="input-group">
            <label>Login</label>
            <input type="email" name="email" value="">
        </div>
        <div class="input-group">
            <label>Mot de passe</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn">Créer</button>
        </div>
        <p>
            Déjà admin ? <a href="loginAdmin.php">Log In</a>
        </p>
    </form>
    </body>
</html>
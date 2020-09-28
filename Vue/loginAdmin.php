<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="header">
	    <h2>Log In</h2>
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
            <button type="submit" class="btn" name="register_btn">Log In</button>
        </div>
        <p>
            Devenir membre ? <a href="createAdmin.php">Sign in</a>
        </p>
    </form>
    </body>
</html>
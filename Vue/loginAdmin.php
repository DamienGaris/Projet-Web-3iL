<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../Script/connectAdmin.js"></script>
    </head>
    <body>
    <div class="header">
	    <h2>Log In</h2>
    </div>
    <div>
        <label>Login</label>
        <input id="login" value="">
    </div>
    <div>
        <label>Mot de passe</label>
            <input type="password" id="password" value="">
     </div>
    <div>
        <button id="login" onclick="connectionAdmin()">Log In</button>
    </div>
        <p>
            Devenir membre ? <a href="createAdmin.php">Sign in</a>
        </p>
    </body>
</html>
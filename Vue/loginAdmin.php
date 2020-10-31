<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../Script/connectAdmin.js"></script>
    </head>
    <body onload="changeHeader()">
        <header id="headerAdmin"> 
          <?php include("includes/nav.php"); ?>
        </header>
        <main class="login-main">
            <section id="login-section">
                <div class ="loginBox">
                    <div class ="login-title">Admin</div>
                    <div>
                        <label>Nom d'utilisateur</label>
                        <input id="login" value="">
                    </div>
                    <div>
                        <label>Mot de passe</label>
                        <input type="password" id="password" value="">
                    </div>
                    <div>
                        <button id="login" onclick="connectionAdmin()" class="button-login">Log In</button>
                    </div>
                    <div>
                        <p>
                            Devenir membre ? <a href="createAdmin.php">Sign in</a>
                        </p>
                    </div>  
                    </div>  
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
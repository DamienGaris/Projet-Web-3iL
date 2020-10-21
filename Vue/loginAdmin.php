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
          <section id="landing-section">
            <div id="main-text-wrapper">
                
            </div>
          </section>
        </header>
        </section>
        <div>
            <div >
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
            <div>
                <p>
                    Devenir membre ? <a href="createAdmin.php">Sign in</a>
                </p>
            </div>  
        </div>
    </body>
    <script type="text/javascript">
        function changeHeader(){
            document.getElementById("headerAdmin").style.backgroundImage = "url('assets/admin.jpg')"; 
            
        }
    </script>
</html>
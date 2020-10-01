
// document.getElementById("login").onclick = function() {connectionAdmin()};

function connectionAdmin() {

    var idLogin = document.getElementById("login");
    var idMpd = document.getElementById("password");
    var login = idLogin.value;
    var mdp = idMpd.value;
    if(login === "" || mdp === ""){
        alert("Un des deux champs est vide !");
        idLogin.value = "";
        idMpd.value = "";
    }
    var ajax = new XMLHttpRequest();
    var data = "event=log&login=" + login +  "&mdp=" + mdp;
    ajax.open("POST", "../Controller/ctrlLoginAdmin.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
    ajax.open("GET", "../Controller/ctrlLoginAdmin.php", true);
    // console.log(ajax.responseText); // recupération des données
    if($success['Erreur']){
        alert($success['Erreur']);
        idLogin.value = "";
        idMpd.value = "";
    }else{
        window.location.href = "../Vue/administrator.php";
    }
}

function createAdmin(){
    var idLogin = document.getElementById("login");
    var idMpd = document.getElementById("password");
    var login = idLogin.value;
    var mdp = idMpd.value;
    if(login === "" || mdp === ""){
        alert("Un des deux champs est vide !");
        idLogin.value = "";
        idMpd.value = "";
    }
    var ajax = new XMLHttpRequest();
    var data = "event=create&login=" + login +  "&mdp=" + mdp;
    ajax.open("POST", "../Controller/ctrlLoginAdmin.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
    ajax.open("GET", "../Controller/ctrlLoginAdmin.php", true);
    // console.log(ajax.responseText); // recupération des données
    if($success['Erreur']){
        alert($success['Erreur']);
        idLogin.value = "";
        idMpd.value = "";
    }else{
        window.location.href = "../Vue/administrator.php";
    }
    
}

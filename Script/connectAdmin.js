
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
    var check;
    var rep;
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            check = this.responseText;
            rep = JSON.parse(check);
            if(rep.Check == "false"){
                alert(rep.Text);
                idLogin.value = "";
                idMpd.value = "";
            }else{
                window.location.href = "../Vue/administrator.php";
            }
        }
    }
    var data = "event=log&login=" + login +  "&mdp=" + mdp;
    ajax.open("POST", "../Controller/ctrlLoginAdmin.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
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
    var check;
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            check = this.responseText;
            rep = JSON.parse(check);
            if(rep.Check == "false"){
                alert(rep.Text);
                idLogin.value = "";
                idMpd.value = "";
            }else{
                window.location.href = "../Vue/administrator.php";
            }
        }
    }
    var data = "event=create&login=" + login +  "&mdp=" + mdp;
    ajax.open("POST", "../Controller/ctrlLoginAdmin.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
    }
    

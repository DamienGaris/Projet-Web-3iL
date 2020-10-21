
function connectionAdmin() {

    var idLogin = document.getElementById("login");
    var idMpd = document.getElementById("password");
    var login = idLogin.value;
    var mdp = idMpd.value;
    if(login === "" || mdp === ""){
        alert("Un des deux champs est vide !");
        idLogin.value = "";
        idMpd.value = "";
        return;
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
        return;
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
    
    function suppressionAdmin(login){
        if(login === ""){
            alert("Erreur impossible de savoir de quel administrateur il s'agit pour la suppression!");
        }
        var ajax = new XMLHttpRequest();
        var check;
        ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                check = this.responseText;
                console.log(check);
                rep = JSON.parse(check);
                if(rep.Check == "false"){
                    alert(rep.Text);
                }else{
                    window.location.href = "../Vue/loginAdmin.php";
                }
            }
        }
        var data = "event=delete&login=" + login;
        ajax.open("POST", "../Controller/ctrlLoginAdmin.php", true); 
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(data); 
    }

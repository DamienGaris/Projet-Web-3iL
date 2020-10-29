
function createObject(){
    var form1 = document.getElementById("form1");
    var form2 = document.getElementById("form2");
    var titre = document.getElementById("titre");
    var prix = document.getElementById("prix");
    var description = document.getElementById("description");
    var date = document.getElementById("date_sortie");
    var categorie = document.getElementById("categorie");
    var taille = document.getElementById("taille");
    
    if(titre === "" || prix === "" || description === "" || date === "" || categorie === "" || taille === ""){
        alert("Un ou plusieurs champ sont vide !");
        titre.value = "";
        prix.value = "";
        description.value = "";
        categorie.value = "";
        date.value = "";
        taille.value = "";  
        return;
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
                titre.value = "";
                prix.value = "";
                description.value = "";
                date.value = "";
                categorie.value = "";
                taille.value = "";
            }else{
                window.location.href = "../Vue/insertImg.php";
            }
        }
    }
    var data = "event=create&titre="+titre.value +"&prix="+prix.value+"&description="+description.value+"&date="+date.value+"&categorie="+categorie.value+"&taille="+taille.value;
    ajax.open("POST", "../Controller/ctrlObject.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
}

function suppressionObject(id){
    var ajax = new XMLHttpRequest();
    var check;
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            check = this.responseText;
            rep = JSON.parse(check);
            if(rep.Check == "false"){
                alert(rep.Text);
            }else{
                window.location.href = "deleteObject.php";
            }
        }
    }
    var data = "event=delete&id="+id;
    ajax.open("POST", "../Controller/ctrlObject.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data);
}

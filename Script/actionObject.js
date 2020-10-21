
function createObject(){
    var titre = document.getElementById("titre");
    var prix = document.getElementById("prix");
    var description = document.getElementById("description");
    var date = document.getElementById("date_sortie");
    var file = document.getElementById("image");
    var categorie = document.getElementById("categorie");
    var taille = document.getElementById("taille");
    var successImg;
    if(titre === "" || prix === "" || description === "" || date === "" || file === "" || categorie === "" || taille === ""){
        alert("Un ou plusieurs champ sont vide !");
        titre.value = "";
        prix.value = "";
        description.value = "";
        categorie.value = "";
        date.value = "";
        file.value = "";
        taille.value = "";  
        return;
    }
    successImg = gestionImg(file);
    if(!successImg){
        alert("Erreur lors de l'enregistrement de l'image, vérifier le format !");
        file.value = "";
        return;
    }
    var ajax = new XMLHttpRequest();
    var check;
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            check = this.responseText;
            // rep = JSON.parse(check);
            // console.log(rep);
            // if(rep.Check == "false"){
            //     alert(rep.Text);
            //     titre.value = "";
            //     prix.value = "";
            //     description.value = "";
            //     date.value = "";
            //     categorie.value = "";
            //     file.value = "";
            //     taille.value = "";
            // }else{
            //     window.location.href = "../Vue/administrator.php";
            // }
        }
    }
    var data = "event=create&titre="+titre.value +"&prix="+prix.value+"&description="+description.value+"&date="+date.value+"&categorie="+categorie.value+"&taille="+taille.value;
    ajax.open("POST", "../Controller/ctrlObject.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
}

function gestionImg(){


}
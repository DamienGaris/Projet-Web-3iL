function updateText() {
    var titre = document.getElementById("titre");
    var catPro1 = document.getElementById("catPro1");
    var catPro2 = document.getElementById("catPro2");
    var catPro3 = document.getElementById("catPro3");
    if(titre.value === "" || catPro1.value === "" || catPro2.value === "" || catPro3.value === "" ){
        alert("Un ou plusieurs champ sont vide !");
        titre.value = "";
        catPro1.value = "";
        catPro2.value = "";
        catPro3.value = "";
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
                titre.value = "";
                catPro1.value = "";
                catPro2.value = "";
                catPro3.value = "";
            }else{
                alert("Enregistrement reussi!");
            }
        }
    }
    var data = "event=update&titre=" + titre.value +  "&cat1=" + catPro1.value+  "&cat2=" + catPro2.value+  "&cat3=" + catPro3.value;
    ajax.open("POST", "../Controller/ctrlTexteAccueil.php", true); 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send(data); 
}
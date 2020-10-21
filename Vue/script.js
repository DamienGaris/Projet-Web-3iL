function loadXMLImages(url){
    var xmlhttp;
    var txt,x,y,i;

    xmlhttp= new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){

      if (xmlhttp.readyState==4 && xmlhttp.status==200){
        txt="";

        x= xmlhttp.responseXML.documentElement.getElementsByTagName("IMG");
        for(i=0;i<x.length; i++){
          txt = txt +"<div class='mySlides fade'>";
          y= x[i].getElementsByTagName("NOM");
          txt =txt+ "<div class='nameProduct'>"+ y[0].firstChild.nodeValue+"</div>";
          y= x[i].getElementsByTagName("URL");
          txt = txt+ "<img src='"+y[0].firstChild.nodeValue+"'class='imgAcceuil'>";
          y= x[i].getElementsByTagName("DESCRIPTION");
          txt = txt +"<div class='description'>"+y[0].firstChild.nodeValue +"</div>";
          txt = txt +"</div>";
          console.log(i);
        }
      }
      document.getElementById('carrousel').innerHTML=txt;
    }
    xmlhttp.open("GET",url,true);
    xmlhttp.send();

  }

  function showSlides() {
    var i;
    var slideIndex = 0;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); 
  }
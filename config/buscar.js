function buscarPorAutor() {
    var Autor = document.getElementById("Autor").value;
    

    if (Autor == "") {
    document.getElementById("informacion").innerHTML = "";
   

    } else {
        //alert("entro Autor");
    if (window.XMLHttpRequest) {
    //code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    
    document.getElementById("informacion").innerHTML = this.responseText;
    }
    };
    xmlhttp.open("GET","../../Controladores/Admin/Buscar.php?Autor="+Autor,true);
    xmlhttp.send();
    }

    return false;
}
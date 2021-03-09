function validation ()
{
    var user=document.getElementById("user").value;
    var pass=document.getElementById("pass").value;

if (user=="admin" && pass=="abcd1" || user=="Admin" && pass=="abcd1" ||user=="ADMIN"  && pass=="abcd1" ) {
    alert("bienvenido al sistema " +user+ ".");
    location.href='Página principal.html';
}

else if (user== "profesor" && pass=="1234" || user=="Profesor" && pass=="1234" || user=="PROFESOR" && pass=="1234"){
    alert ("Bienvenido al sistema " + user + ".");
    location.href='Página principal_profesor.html';
}

else if(user=="" && pass=="") {
    alert("Complete los espacios en blanco");
}

else {
    alert("Verifique los datos y reintentelo");
    window.location.reload();
}
}

window.onload = function(){
    var Ingresar;
    Ingresar = document.getElementById("Ingresar");
    Ingresar.onclick = validation;
}

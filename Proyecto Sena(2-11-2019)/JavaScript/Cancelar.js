function cancelar() {
	window.location.reload();
	location.href="Página principal.php";
}

window.onload = function(){
	var Cancelar;
	Cancelar = document.getElementById("Cancelar");
	Cancelar.onclick = cancelar;
}
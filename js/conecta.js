$(document).ready( function () {
	$("button").on('click', function(event) {
		var id="t"+this.id;		
		if (id.indexOf("m") !=-1) {
    			alert('modificar');
			var id_modificar = document.getElementById(id).value;
			alert(id_modificar);
		}
		if (id.indexOf("e") !=-1) {
    			alert('eliminar');
			var id_eliminar = document.getElementById(id).value;
			alert(id_eliminar);
		}		
	});	
});	

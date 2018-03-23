$(document).ready( function () {
	$("#btn").on('click', function(event) {
		event.preventDefault();
		//alert("Ingresa a Java Script");
		entrar();
	});	
	
	$("#btnR").on ('click', function(event){
		event.preventDefault();
		reg();
	});	
	
	function reg(){
		$.ajax({
        type: "POST",
        url: "usuario.html",
        success : function(){
                window.location.href = "usuario.html";
        	}
    	});
	};

	function entrar(){
		var usuario = $("#usuario").val();
		var password = $("#password").val();
		alert(usuario);
		alert(password);
		if(usuario=="magali"&& password=="12345")
		{
		$.ajax({
        type: "POST",
        url: "bienvenido.html",
        success : function(){
                window.location.href = "bienvenido.html";
        	}
    	});
		}
		
		else
		{
		$.ajax({
        type: "POST",
        url: "error.html",
        success : function(){
                window.location.href = "error.html";
        	}
    	});
		}
	};
	});
		

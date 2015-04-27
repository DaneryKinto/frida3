$(document).ready(function(){
	//Si la resolucion es mayor a 800px el buscador muestra una vista previa
	if($(window).width()>=1024){
		alert("hola");
		//si preciona una tecla 
		$('#buscador-nav').keyup(function(e){
		var consulta=$(this).val();
		$.ajax({
			type:"POST",
			url:"php/buscar.php",
			data:"b="+consulta,
			dataType:"html",
			beforesend:function(){
				$('#resultado').html('<img src="img/cargar.png">');
			},
			error: function(){
				alert("error");
			},
			success: function(data){
				$('#resultado').empty();
				$('#resultado').append(data);
			}
		});
	});
	}
});
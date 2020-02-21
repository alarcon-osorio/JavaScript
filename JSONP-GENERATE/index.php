<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba Cors</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    </head>
    <body>
       <button id="enviar">Pulsa aquí </button>
	<script>
                $("#enviar").click(function(mievento){
                    $.ajax({
			type: 'GET',
    			"url": "http://www.media.formandome.es/phonegap/tutorial/futbolistas.php",
    			"dataType": "jsonp",
    			jsonpCallback: 'logicaCliente'
                    });                   
                });
		function logicaCliente(data){
    			console.log(data);
		}
        </script>
    </body>
</html>

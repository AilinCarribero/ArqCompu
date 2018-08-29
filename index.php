<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script>
    	var nroArreglo = new Array();

    	function lvlFacil(){
    		var i;

    		for (var i = 0; i < 9; i++) {
    			nroArreglo[i] = 0 ;  		
    		}

    		for (i = 0; i < 1; i++){
    			do{
					var nroRandom = Math.floor(Math.random()*9);
    			}while(nroArreglo[ nroRandom ] != 0 ){
    				nroArreglo[ nroRandom ] = 1 ;
    				console.log(nroArreglo[nroRandom]);
    			}
    		}
    	}

    	function lvlMedio(){
    		var i;

    		for (var i = 0; i < 9; i++) {
    			nroArreglo[i] = 0 ;  		
    		}

    		for (i = 0; i < 2; i++){
    			do{
					var nroRandom = Math.floor(Math.random()*9);
    			}while(nroArreglo[ nroRandom ] != 0 ){
    				nroArreglo[ nroRandom ] = 1 ;
    				console.log(nroArreglo[nroRandom]);
    			}
    		}
    	}

    	function lvlDificil(){
    		var i;

    		for (var i = 0; i < 9; i++) {
    			nroArreglo[i] = 0 ;  		
    		}

    		for (i = 0; i < 3; i++){
    			do{
					var nroRandom = Math.floor(Math.random()*9);
    			}while(nroArreglo[ nroRandom ] != 0 ){
    				nroArreglo[ nroRandom ] = 1 ;
    				console.log(nroArreglo[nroRandom]);
    			}
    		}
    	}

    	$(document).ready(function(){

    		$("td").click(function(){
    			var posicion= $(this).attr("ip");

		        if (nroArreglo[posicion] == 1) {

		        	$(this).css("background-color", "orange");
		        	alert("Usted a perdido!");
		        	location.reload();
		        }
		        else{
		        	$(this).css("background-color", "blue");
		        }
		        console.log("se ejecuta");
		    });
    	});

    </script>

    <style type="text/css">
    	td{
    		height: 200px;
    		width: 200px;
    	}
    	button{
    		margin: 0px 30px 0px 30px;
    	}

    </style>

	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3>Buscaminas</h3>
		</div>
		<div class="row">
			<h5>Elige el nivel de dificultad:</h5>
		</div>
		<div class="row">
			<button class="btn btn-primary" onclick="lvlFacil()">Facil</button>
			<button class="btn btn-success" onclick="lvlMedio()">Medio</button>
			<button class="btn btn-danger" onclick="lvlDificil()">Dificil</button>
		</div>

		<div class="row">
			<h5>Juega!!</h5>
		</div>

		<div class="row">
			<table class="table-bordered bg-dark">
				<tr>
					<td ip="0"></td>
					<td ip="1"></td>
					<td ip="2"></td>
				</tr>
				<tr>
					<td ip="3"></td>
					<td ip="4"></td>
					<td ip="5"></td>
				</tr>
				<tr>
					<td ip="6"></td>
					<td ip="7"></td>
					<td ip="8"></td>
				</tr>
			</table>
		</div>
	</div>	
</body>
</html>
<?php

include_once 'conexion.php';


$sql_leer = "SELECT * FROM colores";

$send = $pdo->prepare($sql_leer);

$send->execute();


$resultado = $send->fetchAll();




 ?>
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body >
    
	<div class="container mt-5">
		<div class="row ">
			<div class=" col-6 mt-5">

				<?php foreach ($resultado as $fila): ?>
		
    			<div class="alert alert-<?php echo $fila['color'] ?>" role="alert">
 		 			<?php echo $fila['color'] ?>
 		 			-
 		 			<?php echo $fila['descripcion'] ?>
				</div>

			<?php endforeach ?>

    		</div>

    		<div class="col-6">
    			<h2>AGREGAR ELEMENTOS</h2>
    			<form>
    				<input type="text" class="form-control" name="color">
    				<input type="text" class="form-control mt-3" name="descripcion">
    				<div class="d-flex justify-content-center">
    				<button class="btn btn-primary mt-3 ">AGREGAR</button>
    				</div>
    			</form>
    		</div>
		</div>
	</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
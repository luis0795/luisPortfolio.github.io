<!DOCTYPE html>
<html>
<body>



<table border="1" style="width:50%">

<?PHP

if(isset($_POST['enviar'])){
	
	$letras=$_POST['letras']; //recogemos las letras
	$letrasCAPS=strtoupper($letras); //las convertimos a mayusculas
	
	
	$oculto=$_POST['custId'];//recogemos la palabra que queremos adivinar
	$intentos=$_POST['intentos'];//recogemos los intentos
	$intentos2=$_POST['intentos'];//recogemos los intentos
	
	echo "NUMERO DE INTENTOS : ".$intentos;
	echo "<br><br>";
	
	/* $arrayLetras=str_split($letras);
	   $arrayLetrasLength=count($arrayLetras); */

	   
	//creamos los arrays para guardar la palabra secreta
	$arrayLetras=str_split($oculto);//contenido del array es HOLA
	$arrayLetrasLength=count($arrayLetras);
	
	
	$luis = array(); //array que contiene ceros de la longitud de la palabra
	for($x = 0; $x < $arrayLetrasLength; $x++) {
		$luis[$x]=0;
		
	}
	
	
	//vamos a dibujar en una tabla el contenido del array
	
	echo "<tr>";
	
			for($x = 0; $x < $arrayLetrasLength; $x++) {
				
					
					echo "<td>";
						
							if($arrayLetras[$x]!=$letrasCAPS){
								echo $luis[$x];	
								$intentos--;
							}
							
							else{
									if($arrayLetras[$x]==$letrasCAPS){
										$luis[$x]=$letrasCAPS;
										echo $luis[$x];
									
										
									}
								
									else{
										$intentos--;
									}
							}
							
					echo "</td>";
					
						
			}
		
	echo "</tr>";

	
			?>

				<h1>AHORCADO </h1>
					<form action="ahorcadov2.php" METHOD="POST">
						INTRODUCIR LETRAS:<br>
						<input type="text" name="letras" ><br><br>
														  
					
						<input type="hidden" name="intentos2<?php echo $intentos; ?>"><br><br>

						 <input type="hidden" id="custId" name="custId" value="<?php  print( $palabra)?>"><br>
														  
						<input type="submit" name="enviar" value="enviar">
					</form> 
			
			<?php

}

else {
	
?>

	
  <h1>AHORCADO </h1>
<form action="ahorcadov2.php" METHOD="POST">
  INTRODUCIR LETRAS:<br>
  <input type="text" name="letras" ><br><br>
  
  INTRODUCIR INTENTOS:<br>
  <input type="number" name="intentos"><br><br>

  <input type="hidden" id="custId" name="custId" value="HOLA"><br>
  
  <input type="submit" name="enviar" value="enviar">
</form> 

<?php
}
?>
</body>
</html>

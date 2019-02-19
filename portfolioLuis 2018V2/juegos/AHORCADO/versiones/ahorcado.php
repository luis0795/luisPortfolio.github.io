<!DOCTYPE html>
<html>
<body>



<table border="1" style="width:50%">

<?PHP

if(isset($_POST['enviar'])){
	
	$letras=$_POST['letras'];
	$letrasCAPS=strtoupper($letras);
	$oculto=$_POST['custId'];
	$intentos=$_POST['intentos'];
	echo $intentos;
	/* $arrayLetras=str_split($letras);
	   $arrayLetrasLength=count($arrayLetras); */

	$arrayLetras=str_split($oculto);
	$arrayLetrasLength=count($arrayLetras);
	
	echo "<tr>";
	
			for($x = 0; $x < $arrayLetrasLength; $x++) {
				
					/* echo "<td>".$arrayLetras[$x]."</td>"; */
					echo "<td>";
						
							if($arrayLetras[$x]!=$letrasCAPS){
								echo "0";
							}else{
									if($arrayLetras[$x]==$letrasCAPS){
										$arrayLetras[$x]=$letrasCAPS;
										echo $arrayLetras[$x];
										
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
					<form action="ahorcado.php" METHOD="POST">
						INTRODUCIR LETRAS:<br>
						<input type="text" name="letras" ><br><br>
														  
					
						<input type="hidden" name="<?php $_POST['intentos'] ?>"><br><br>

						 <input type="hidden" id="custId" name="custId" value="HOLA"><br>
														  
						<input type="submit" name="enviar" value="enviar">
					</form> 
			
			<?php	
}

else {
?>




	
  <h1>AHORCADO </h1>
<form action="ahorcado.php" METHOD="POST">
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

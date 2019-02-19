<!DOCTYPE html>
<html>
<body>





<?PHP

	

if(isset($_GET['enviar'])){
	
	
	$palabra=$_GET['palabra']; //recogemos las letras
	$intentos=$_GET['intentos'];//recogemos los intentos
	echo "NUMERO DE INTENTOS : ".$intentos;
	echo "<br><br>";
	$palabraMap="";
	

	   
	//creamos los arrays para guardar la palabra secreta
	$arrayPalabra=str_split($palabra);//contenido del array es HOLA
	$arrayPalabrasLength=count($arrayPalabra);
	
		$aux="<table border><tr>";
	
			for($x = 0; $x < $arrayPalabrasLength; $x++) {
				$aux=$aux."<td>X</td>";
				$palabraMap=$palabraMap."0";
			}
				
		$aux=$aux."</tr></table>";
		
		 print $aux;
//sacar formulario del if y del else
		?>


					<br><br>
					<form action="ahorcadov5.php" METHOD="GET">
						INTRODUCIR LETRA:<br>
						<input type="text" name="letra"  ><br><br>
						<input type="hidden" name="intentos" value="<?php echo $intentos; ?>"><br><br>
						<input type="hidden" name ="palabra" value="<?php echo $palabra; ?>"><br><br>
						<input type="hidden" name ="palabraMap" value="<?php echo $palabraMap; ?>"><br><br>
						
														  
						<input type="submit" name="jugar" value="jugar">
					</form> 
			
			<?php
	
	
	
}
 
else {		

	$letra=$_GET['letra']; //recogemos las letras		
	$palabra=$_GET['palabra'];
	//recogemos las letras
	
	$palabraMap=$_GET['palabraMap']; //recogemos las letras
	$palabraMap=str_split($palabraMap);
	
	
	$intentos=$_GET['intentos'];//recogemos los intentos
	$vidaMenos=true;
	$ganar=true;
	
	echo "<br><br>";
		
	if($intentos==0){
		?>
		<script>
			window.location.href = 'fin.html';
		</script>
		<?php
	}else{  
	
		/* $arrayPalabra=str_split($palabra);//contenido del array es HOLA
		$arrayPalabrasLength=count($arrayPalabra);
	
	
		   for($x = 0; $x < $arrayPalabrasLength; $x++) {
			   if($palabraMap[$x]==1){
				  
			   }
		   } */
		   
		//creamos los arrays para guardar la palabra secreta
		$arrayPalabra=str_split($palabra);//contenido del array es HOLA
		$arrayPalabrasLength=count($arrayPalabra);
		
				$aux="<table border><tr>";
				
					$luis = array();
					for($x = 0; $x < $arrayPalabrasLength; $x++) {
						
						$luis[$x]=1;	
							//ULTIMA MODIFICACION
							if($palabraMap[$x]==1){
								$aux=$aux."<td>".$arrayPalabra[$x]."</td>";
						
										
							}
							else{
											if($arrayPalabra[$x]==$letra){
												$palabraMap[$x]=1;
												$aux=$aux."<td>".$arrayPalabra[$x]."</td>";
												$vidaMenos=FALSE;
												
								
											}
										
											else{
												$aux=$aux."<td>X</td>";
											}
											//echo "NUMERO DE INTENTOS : ".$intentos;
								}

							if($palabraMap[$x]==0){
											  $ganar=false;
										   
								}
								
								
								
					}

					
					
					
					
								
					if($ganar){
						 ?>
							<script>
								window.location.href = 'win.html';
							</script>
					    <?php
					}
					
					
					if($vidaMenos){
						$intentos--;
					}
					echo "NUMERO DE INTENTOS : ".$intentos;
					
				$aux=$aux."</tr></table>";
			
			print $aux;
			echo "<br><br>";
			
			//ultima modificacion
			$palabraMap=implode("",$palabraMap);
			
		?>

					
						<form action="ahorcadov5.php" METHOD="GET">
							INTRODUCIR LETRA:<br>
							<input type="text" name="letra"  ><br><br>
							
							
							<input type="hidden" name="intentos" value="<?php echo $intentos; ?>"><br><br>
							<input type="hidden" name="palabra" value="<?php echo $palabra; ?>"><br><br>
							<input type="hidden" name ="palabraMap" value="<?php echo $palabraMap; ?>"><br><br>
															  
							<input type="submit" name="enviar2" value="enviar2">
						</form> 
				
				<?php
	//else del if que chequea los intentos
	}	
//cierre del else general
}
?>

</body>
</html>

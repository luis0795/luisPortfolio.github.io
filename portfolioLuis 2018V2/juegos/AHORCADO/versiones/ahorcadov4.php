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
	
	$luis = array(); //array que contiene ceros de la longitud de la palabra
	for($x = 0; $x < $arrayPalabrasLength; $x++) {
		$luis[$x]=0;
		
	}
	
		$aux="<table border><tr>";
	
			for($x = 0; $x < $arrayPalabrasLength; $x++) {
				$aux=$aux."<td>X</td>";
				//$palabraMap=$palabraMap."0";
				
				
				if(isset($_GET['enviar2'])){
					if($arrayPalabra[$x]!=$letra){
								$aux=$aux."<td>X</td>";
								$intentos--;
					}
					else{
									if($arrayPalabra[$x]==$letra){
										$arrayPalabra[$x]=$letra;
										$aux=$aux."<td>".$arrayPalabra[$x]."</td>";
										
					}
								
									else{
										$intentos--;
									}
								
						}
				}
			}
				
		$aux=$aux."</tr></table>";
		
		 print $aux;

		?>


					<br><br>
					<form action="ahorcadov4.php" METHOD="GET">
						INTRODUCIR LETRA:<br>
						<input type="text" name="letra"  ><br><br>
						<input type="hidden" name="intentos" value="<?php echo $intentos; ?>"><br><br>
						<input type="hidden" name ="palabra" value="<?php echo $palabra; ?>"><br><br>
						<input type="hidden" name ="luis" value="<?php print_r ($luis); ?>"><br><br>
						
														  
						<input type="submit" name="jugar" value="jugar">
					</form> 
			
			<?php
	
	
	
}
 
else {		

	$letra=$_GET['letra']; //recogemos las letras		
	$palabra=$_GET['palabra']; //recogemos las letras
	$luis2=$_GET['luis']; //recogemos las letras
	$intentos=$_GET['intentos'];//recogemos los intentos
	
	echo "NUMERO DE INTENTOS : ".$intentos;
	echo "<br><br>";
	
	   
	//creamos los arrays para guardar la palabra secreta
	$arrayPalabra=str_split($palabra);//contenido del array es HOLA
	$arrayPalabrasLength=count($arrayPalabra);
			
			$aux="<table border><tr>";
	
			for($x = 0; $x < $arrayPalabrasLength; $x++) {
				//$aux=$aux."<td>X</td>";
					
					if($arrayPalabra[$x]!=$letra){
								$aux=$aux."<td>X</td>";
								$intentos--;
					}
					else{
									if($arrayPalabra[$x]==$letra){
										//$arrayPalabra[$x]=$letra;
										$luis[$x]=$letra;
										$aux=$aux."<td>".$luis[$x]."</td>";
									}
								
									else{
										$intentos--;
									}
								
						}
			}
				
				
			$aux=$aux."</tr></table>";
		
		print $aux;
		echo "<br><br>";
	?>

				
					<form action="ahorcadov4.php" METHOD="GET">
						INTRODUCIR LETRA:<br>
						<input type="text" name="letra"  ><br><br>
						<input type="hidden" name="intentos" value="<?php echo $intentos; ?>"><br><br>
						<input type="hidden" name="palabra" value="<?php echo $palabra; ?>"><br><br>
						<input type="hidden" name ="palabraMap" value="<?php echo $palabraMap; ?>"><br><br>
														  
						<input type="submit" name="enviar2" value="enviar2">
					</form> 
			
			<?php

}

?>

</body>
</html>

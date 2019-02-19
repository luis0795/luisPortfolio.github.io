<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="jackpot.css">
</head>
<body>

<?php
session_start();
	$_SESSION["monedas"] = $_REQUEST['datosMoneda'];
	
	if (isset($_SESSION["monedas"]) && $_SESSION["monedas"]>0) {

		
		$fotos = array("img/0.png", "img/1.png", "img/2.png");
		
		$mt1=rand(0,2);
		$mt2=rand(0,2);
		$mt3=rand(0,2);
		
	
	
	
?> 

<h1>JACKPOT LUIS </h1>

<fieldset>
	
	
	
	<section>
		<section class="minibox" >
			
		
			<img src="<?php echo $fotos[$mt1]; ?>" >
			
		</section>
		
		<section class="minibox" >
		
			<img src="<?php echo $fotos[$mt2]; ?>"  >
			
		</section>	
		
		<section class="minibox" >
			
			<img src="<?php echo $fotos[$mt3]; ?>"  >
		
		</section>
		
		//este formulario se envia a si mismo los valores
		//tendremos que recoger el valor de introducir monedas
		<section class="minibox" >
			
			
			//SETEAMOS EL METODO A GET PARA TESTEO
			<form action="jackpot.php" METHOD="GET">
			  <input type="submit"  name="datosMoneda" value="INTRODUCIR MONEDAS">
			  <input type="submit"  name="play" value="JUGAR">
			</form> 
		
		</section>
		
		
	</section>
	


</fieldset>

<?php
	}else{
		
		
		
	}
	
?> 

</body>
</html>
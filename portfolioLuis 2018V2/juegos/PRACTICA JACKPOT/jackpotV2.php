<?php
session_start();

	if(!isset($_GET["moneda"]) && !isset($_GET["jugar"])){
		$_SESSION["moneda"] = 0;
	}else{
		if(isset($_GET["moneda"])){
			$_SESSION["moneda"]++;
			$_SESSION["premio"]=0;

		}
	}
		
?>
<!DOCTYPE html>
<html>
<head>
  
		
		<style>
		* {
			box-sizing: border-box;
			margin:0;
		}
		.row::after {
			content: "";
			clear: both;
			display: table;
		}
		[class*="col-"] {
			float: left;
			padding: 10px;
		}
		html {
			font-family: "Lucida Sans", sans-serif;
		}
		.header {
			background-color: #E00B27;
			color: #ffffff;
			padding: 15px;
		}
		.menu ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		.menu li {
			padding: 8px;
			margin-bottom: 7px;
			background-color: #33b5e5;
			color: #ffffff;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}
		
		
		.menu li:hover {
			background-color: #0099cc;
		}
		
	
			#show #image1,#image2,#image3,#image4,#image5,#image6 { 
				margin-top:15px;
				display: inline-block;
				float:left;
				 -moz-transition: transform 1s;
				 -webkit-transition: transform 1s;
				 transition: transform 1s;
			}
		
		
		
		.aside1 {
			background-color: #2B3A42;
			padding: 15px;
			color: #ffffff;
			text-align: center;
			font-size: 14px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			
		}
		
		.aside3 {
			background-color: #FF8F00;
			padding: 15px;
			color: #ffffff;
			text-align: center;
			font-size: 14px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			
		}
		
		.aside2 {
			background-color: #BDD3DE;
			padding: 15px;
			color: #ffffff;
			text-align: center;
			font-size: 14px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			
		}
		

		.footer {
			font-size: 1em;
			background-color: rgba(7, 7, 7, 0.5);
			border-top: 3px solid #323232;
			border-bottom: 3px solid #323232;
			text-align: center;
			padding: 15px;
		}



		@media only screen and (min-width: 350px) {
			/* For mobile phones: */
			[class*="col-"] {
			width: 100%;
		}

		@media only screen and (min-width: 800px) {
			/* For tablets: */
			.col-m-0 {
				
				
				display:none;
			}
			.col-m-1 {width: 8.33%;}
			.col-m-2 {width: 16.66%;}
			.col-m-3 {width: 25%;}
			.col-m-4 {width: 33.33%;}
			.col-m-5 {width: 41.66%;}
			.col-m-6 {width: 50%;}
			.col-m-7 {width: 58.33%;}
			.col-m-8 {width: 66.66%;}
			.col-m-9 {width: 75%;}
			.col-m-10 {width: 83.33%;}
			.col-m-11 {width: 91.66%;}
			.col-m-12 {width: 100%;}
		}
		@media only screen and (min-width: 1000px) {
			/* For desktop: */
			.col-1 {width: 8.33%;}
			.col-2 {width: 16.66%;}
			.col-3 {width: 25%;	display:block;}
			.col-4 {width: 33.33%;}
			.col-5 {width: 41.66%;}
			.col-6 {width: 50%;}
			.col-7 {width: 58.33%;}
			.col-8 {width: 66.66%;}
			.col-9 {width: 75%;}
			.col-10 {width: 83.33%;}
			.col-11 {width: 91.66%;}
			.col-12 {width: 100%;}

		}
		
		
		.usuario, .u {
			float: left;
			font-size: 15px;
		}
 
		.ordenador, .o {
			float:left;
			font-size:15px;
		}
		
		img{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 60%;
		}
		
		
		
		input[type=text], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 40%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
		</style>
		
</head>
<body>

	<?php

/* session_start();
$identificador = session_id();
echo "El identificador de esta sesión es: $identificador"; */

	

	$fotos = array("img/0.png", "img/1.png", "img/2.png");
	
	$mt1=rand(0,2);
	$mt2=rand(0,2);
	$mt3=rand(0,2);
	
	
?> 
	
    <div class="row">  
	
		<div id="box1" class="col-12 col-m-12 aside2 ">
				<?php if (isset($_GET["jugar"]) && ($_SESSION["moneda"]>0)){
					?><div id="casilla1" class= " col-4 col-m-4">
						<img src="<?php echo $fotos[$mt1]; ?>" >	
					</div>
					<div id="casilla2" class= " col-4 col-m-4">
						<img src="<?php echo $fotos[$mt2]; ?>"  >
					</div>
					<div id="casilla3" class= " col-4 col-m-4">
 						<img src="<?php echo $fotos[$mt3]; ?>"  >
					</div>
				<?php
				
				}else{
					?><div id="casilla1" class= " col-4 col-m-4">
						<img src="<?php echo $fotos[0]; ?>" >	
					</div>
					<div id="casilla2" class= " col-4 col-m-4">
						<img src="<?php echo $fotos[0]; ?>"  >
					</div>
					<div id="casilla3" class= " col-4 col-m-4">
 						<img src="<?php echo $fotos[0]; ?>"  >
					</div>
					
				<?php	
				}
				?>
					
		</div>
		
		<div id="box2" class="col-12 col-m-12 aside1">
					

					
					
					<div id="puntos" class = "aside3 col-3 col-m-3">
						<?php 
							
								
							if (!isset($_GET["jugar"]) || $_SESSION["moneda"]<=0){
									echo "Bienvenido introduce monedas para jugar!";	
							}
							
							if (isset($_GET["jugar"]) && ($_SESSION["moneda"]>0) ){
								
								
								
								if($mt1==2 && $mt2==2 && $mt3==2){
									$_SESSION["premio"]=200+$_SESSION["premio"];
									echo "premio gordo tienes, tienes 200 ptos mas "; echo"\n";
									
								}else{
									
									$_SESSION["moneda"]--;
								}
								
								if($mt1==1 && $mt2==1 && $mt3==1){
									$_SESSION["premio"]=50+$_SESSION["premio"];
									echo "te llevas lo jugado tienes 50 ptos mas";echo"\n";
									
								}
								
								if($mt1==1 && $mt2==0 && $mt3==0){
									$_SESSION["premio"]=100+$_SESSION["premio"];
									echo "dia de suerte,tienes 100 ptos mas"; echo"\n";
								}
								
								echo "total puntos : ".$_SESSION["premio"];
							}
						?>	
					</div>
					<div id="jugar" class = "aside3 col-3 col-m-3">
 						<form action="jackpotV2.php" method="get">
						  <input type="submit" name="jugar" value="jugar">
						</form>
					</div>
					
					<div id="monedasJugador" class = "aside3 col-3	 col-m-3">
					
					
 						<h1> 
							<?php 
							
							if(isset($_GET["moneda"]) || isset($_GET["jugar"])){
										echo $_SESSION["moneda"];
							}else{
									echo "0";
								}					
							?>
							
							
						</h1>
					</div>
					
					<div id="moneda" class = "aside3 col-3 col-m-3">
						<form action="jackpotV2.php" method="get">
							<input type="submit" name="moneda" value="moneda">
							
							
						</form>
					</div>
					
		</div>
		
		
		<div id="box3" class="col-12 col-m-12 aside1">
			
		</div>
		

	</div>
	
	<div class="footer">
		<h1>jackpot v.2</h1>
		
	
		
	</div>
</body>
</html>
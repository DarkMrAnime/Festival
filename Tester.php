<!DOCTYPE html>
<html>
	
	<?php
	
	require("config.php");
	
	?>
	
	<head>
		<title>
			Hoofdpagina
		</title>
		
		<link href="FestivalStyle.css"rel="stylesheet"/>
		
	</head>
	
	<body>
		
		<center>
			<nav class="Class1" >
				<a href="Hoofdpagina.php" class="A1">Home</a>
				<a href="nieuws.php" class="A1">News</a>
				<a href="Ticket.php" class="A1">Tickets</a>
				<a href="Contact.php" class="A1">Contact</a>
				<a href="over.php" class="A1">About</a>
				<a href="InlogDB.php" class="A1">Personeel</a>
			</nav>
		</center>
		
		<center>
			<ul>	
				<?php
				
					$query = "SELECT * FROM kpop";
						
					$stm = $con->prepare($query);
					
					if($stm->execute()){
						
						$result = $stm->fetchAll(PDO::FETCH_OBJ);
						
						foreach($result as $K){
							?>
							
								<li>
									<a class="Test" href="<?php echo $K->Website; ?>"><?php echo $K->Artiest;?></a>
								</li>
							
							<?php
						} 
					}
				
				?> 
			</ul>
		</center>
		
	</body>

</html>
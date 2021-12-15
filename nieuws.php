<!DOCTYPE html>
<html>
	
	<?php

	require("config.php");

	?>
	
	<head>
		<title>
			Nieuws
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
			<div class="Nieuws">
				<?php
				
					$query = "SELECT * FROM nieuws";
					
					$stm = $con->prepare($query);
		
					if($stm->execute()){
			
						$result = $stm->fetchAll(PDO::FETCH_OBJ);
			
						foreach($result as $N){
							echo $N->Datum;
							echo "<br/>";
							echo $N->Nieuws;
							echo "<br/>";
							echo "<br/>";
						}
					}
					//laat het nieuws vanuit de database tonen
				?> 
			</div>
		</center>
		
	</body>

</html>
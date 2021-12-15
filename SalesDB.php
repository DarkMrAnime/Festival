<!DOCTYPE html>
<html>
	
	<?php
	
		require("config.php");
		
	?>
	
	<head>
		<title>
			PersoneelsPagina
		</title>
		
		<link href="FestivalStyle.css"rel="stylesheet"/>
		
	</head>
	
	<body>
		
		<center>
			<nav class="Class1" >
				<a href="PersDB.php" class="A1">PersoneelsDB</a>
				<a href="TicketDB.php" class="A1">TicketsDB</a>
				<a href="KpopDB.php" class="A1">KpopDB</a>
				<a href="SalesDB.php" class="A1">SalesDB</a>
				<a href="Hoofdpagina.php" class="A1">Terug</a>
			</nav>
		</center>
		
		<center>
			<div class="Nieuws2">
				<?php
			
					$query = "SELECT * FROM sales";
						
					$stm = $con->prepare($query);
					
					if($stm->execute()){
						
						$result = $stm->fetchAll(PDO::FETCH_OBJ);
						
						foreach($result as $S){
							echo "Firstname: ";
							echo $S->vnaam;
							echo "<br/>";
							echo "Lastname: ";
							echo $S->anaam;
							echo "<br/>";
							echo "E-mail: ";
							echo $S->email;
							echo "<br/>";
							echo "Ticket: ";
							echo $S->Ticketsoort;
							echo "<br/>";
							echo "Amount: ";
							echo $S->aantal;
							echo "<br/>";
							echo "<br/>";
							echo "<hr/>";
						}
					}
				?>
			</div>
		</center>
		
	</body>

</html>
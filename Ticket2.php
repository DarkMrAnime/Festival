<!DOCTYPE html>
<html>
	
	<?php
	
		require("config.php");
		
	?>
	
	<head>
		<title>
			Saturday
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
				[13-06-2021]<br/>
				Saturday<br/>
				09:00PM<br/>
				Costs: €20,-
				<form method="POST">
					<label for="email">E-mail:</label>
						<input type="email" name="email">
						<br/>
					<label for="quantity">Amount</label>
						<input type="number" id="quantity" name="aantal" min="1" max="99">
						<br/>
					<input type="Submit" name="BtnBuy1" value=" Buy ">
				</form>
			</div>
		</center>
		
		<?php
			if (isset($_POST['BtnBuy1'])) {
				$Email = $_POST['email'];
				$Aantal = $_POST['aantal'];
				
				$query = "INSERT INTO sales (email, tID, aantal) VALUES ('$Email', 2 , '$Aantal')";
				$stm = $con->prepare($query);
				
				if ($stm->execute()){
					echo "Opgeslagen!";
				} else {
					echo "Niet opgeslagen!";
				}
			}
		?>
		
	</body>

</html>
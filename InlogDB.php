<!DOCTYPE html>
<html>

	<?php
	
		require("config.php");

	?>

	<head>
		<title>
			Inloggen
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
		
		<div class="box">
			<center>
				<form class="Inlog" method="POST">
					<table>
						<tr>
							<td>
								Username:<input type="text" name="txtInlog" />
							</td>
						</tr>
						<tr>
							<td>
								Password:<input type="password" name="txtPassword" />
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="btnLogin" />
							</td>
						</tr>
					</table>
				</form>
			</center>
		</div>
		
		<?php
		
			if(isset($_POST['btnLogin'])){
				
				$user = $_POST['txtInlog'];
				$password = $_POST['txtPassword'];
				
				$query = "SELECT * FROM login WHERE user = '$user' AND password = '$password'";
				
				$stm = $con->prepare($query);
				
				if($stm->execute() == true){
					
					$login = $stm->fetch(PDO::FETCH_OBJ);
					if($login == null) {
						echo "Nothing to be found!";
					}else{
						header("Location: PersDB.php");
					}
				}
			}
		
		?>
		
	</body>

</html>	
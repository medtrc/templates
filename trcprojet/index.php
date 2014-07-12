<?php session_start(); include("connexion.php") ;?>
<html>
	<head>
		<title>Login Form TRC</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	</head>
	<body>

		<header>Sign Up</header>
	



	<form action="" method="post">
		<nav id="container">
		
			
		<?php

		if(isset($_POST['envoyer']))
		{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$mail=$_POST['mail'];
		$pass=$_POST['pass'];
		$date=date("Y-m-d");
		$sql="INSERT INTO membres (userID,firstname,lastname,mail,pass,dateins) 
						  				VALUES  ('NULL','$firstname','$lastname','$mail','$pass','$date')" ;
		$req=mysql_query($sql) or exit(mysql_error());

			if($req)
			{
				echo'<nav id="alert" class="success">you have successfully registered</nav>';
				echo '
			<nav id="center">
				Now you Can login With your e-mail and Password From <a href="./login.php">Here</a>

		   </nav>	';
			}
		}
		if (!(isset($_POST['envoyer']) and ($req))) {
		?>
		  <nav id="center">
			<ul>
				<li>First Name</li>
				<li><INPUT type="text" name="firstname" class="user" required></li>
				<li>Last Name</li>
				<li><INPUT type="text" name="lastname" class="user" required></li>
				<li>E-mail</li>
				<li><INPUT type="email" name="mail" class="mail" required></li>
				<li>Password</li>
				<li><INPUT type="password" name="pass" class="lock" required></li>
			</ul>
		   </nav>	
		</nav>
		<button action="" type="submit" name="envoyer">Sign Up</button>
	</form>
<?php
}
?>


	</body>
</html>

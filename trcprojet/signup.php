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
					echo'<nav id="alert" class="success display">you have successfully registered</nav>';
				}
			}
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

		<button action="" type="submit" name="envoyer" id="signupbutton">Sign Up</button>

	</form>

<?php

	if(isset($_GET['w']))
	{
		echo "<font color='red'>Incorrect Id or Password<br />
		Please try again</font>";
	}
?>
<html>
	<body>
	<form action="login1.php" method="POST">
		<center>Username:	<input type='text' name='u' >&nbsp&nbsp&nbsp&nbsp
		Password:	<input type='password' name='p2'><br /><br />
					<input type='submit' value='Login'><br /><br />or </center>
	</form>
	<?php
		echo "<form action='sign up.php'>
		<center><input type='submit' value='Sign up'></center>
		</form>";
	?>
	</body>
</html>

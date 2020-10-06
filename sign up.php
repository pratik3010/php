<?php
	if(isset($_GET['m']))
	{
		echo "<font color='red'>Fill the form properly</font>";
	}
?>
<html>
	<body>
	<fieldset style="width:600px";>
		<legend>Sign up Form</legend>
		<form action="sign up1.php" method="POST">
			<fieldset style="width:200px;"><legend>First Name:</legend> <input type="text" name="f1">&nbsp&nbsp</fieldset><br />
			<fieldset style="width:200px;"><legend>Last Name:</legend> <input type="text" name="l1">&nbsp&nbsp</fieldset><br />
			&nbsp&nbsp&nbsp&nbspD.O.B:		<input type="date" name="dob"><br /><br />
			<center>Username:	<input type="text" name="u1"></center><br /><br />
			<center>Password:	<input type="password" name="p1">&nbsp&nbsp
			Confirm:	<input type="password" name="p2"></center> <br /><br />
			<center><input type="submit" value="Sign up"></center>
		</form>
	</fieldset>
	
	</body>
</html>
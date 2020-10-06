<?php
	if($_POST['u1']!="" && $_POST['f1']!="" && $_POST['p1']!="" && $_POST['p1']==$_POST['p2'])
	{
		$first=$_POST['f1'];
		$last =$_POST['l1'];
		$user =$_POST['u1'];
		$pass =$_POST['p1'];
		$conf =$_POST['p2'];
		echo "Weclcome to the virtual_reality<br /><br />";
		echo "<a href='login.php'><input type='submit' value='Logout'></a>";
		$h=mysql_connect("localhost","root","");
		mysql_select_db("id and password",$h);
		$q="insert into login_authentication values('".$user."','".$pass."')";
		$r=mysql_query($q,$h);
		mysql_close($h);
		}else
	{
		header("Location:sign up.php?m=1");
	}
?>
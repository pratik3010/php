<?php
	$user1=$_POST['u'];
	$pass1=$_POST['p2'];
	$flag=0;
	$a=mysql_connect("localhost","root","");
	mysql_select_db("id and password",$a);
	$b="select * from login_authentication";
	$s=mysql_query($b,$a);
	while($f=mysql_fetch_array($s))
{
		if($user1==$f[0] && $pass1==$f[1])
			{
				$flag=1;			
			}
}
if($flag==1)
{
				echo "Weclcome to the virtual_reality<br /><br />";
				echo "<a href='login.php'><input type='submit' value='Logout'></a>";

}
else
{
	header("Location:login.php?w=1");
}
mysql_close($a);
?>
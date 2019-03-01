<html>
<body>
<form method="POST">
<center>
<h1> Connect your led <h1> 
<input type="submit" name="on" value="ON">
<input type="submit" name="off" value="OFF">
</center>
</form>
</body>
</html>
<?php
shell_exec("/usr/local/bin/gpio mode 4 out");
shell_exec("/usr/local/bin/gpio mode 10 out");
if(isset($_POST['on']))
{
	shell_exec("/usr/local/bin/gpio write 4 1");
	shell_exec("/usr/local/bin/gpio write 10 1");
	echo "LED is ON";
}
if(isset($_POST['off']))
{
	shell_exec("/usr/local/bin/gpio write 4 0");
	shell_exec("/usr/local/bin/gpio write 10 0");
	echo "LED is OFF";
}
?>


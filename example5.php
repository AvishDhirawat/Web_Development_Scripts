<?php

$username="admin";
$password="pass123";

if($username=='admin' && $password=='pass123')
{
	echo("Logged In");
}
else if($username=="admin")
{
	echo('Password is Incorrect');
}
else{
	echo 'Invalid Credentials';
}

?>
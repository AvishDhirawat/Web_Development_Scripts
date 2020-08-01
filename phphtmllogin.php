<?php
// $correct_username="admin";
// $correct_password="pass123";
$inputuname=$_POST['uname'];
$inputpassw=$_POST['passw'];
$result=QUERY: SELECT * FROM users where username='$inputuname' AND password="$inputpassw";
// if($inputuname==$correct_username && $inputpassw==$correct_password)
if ($result IS NOT BLANK) 
{
	echo "Logged In Successfully!";
}
// elseif ($inputuname==$correct_username) {
// 	echo "Incorrect Password";
// }
else{
	echo "Invalid Credentials";
}
?>
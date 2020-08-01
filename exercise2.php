<?php
date_default_timezone_set('Asia/Kolkata'); 
// $dt2=date("Y-m-d H:i:s");
// echo $dt2;
$curr_time=date('H');
echo "<p>$curr_time<p>";
if($curr_time<12)
	{
		echo "Good Morning";
	}
else if($curr_time<16)
{
	echo "Good Afternoon";
}
else if ($curr_time<20) {
	# code...
	echo "Good Evening";
}
else
{
	echo "Good Night";
}
?>
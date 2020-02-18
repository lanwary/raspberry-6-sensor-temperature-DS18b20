<?php
$data = file_get_contents('myDir/data.txt');
echo $data;
if ($data=="1") {

    
date_default_timezone_set("Africa/Tunis");
$date = date('Y-m-d ');
$time = date('H:i:s  ');
$capt1 = $_GET['a']; 		
$capt2 = $_GET['b'];
$capt3 = $_GET['c'];
$capt4 = $_GET['d']; 		
$capt5 = $_GET['e'];
$capt6 = $_GET['f'];

$con=mysqli_connect("localhost","azerty","0000","base");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	echo "connected";
}
$sql = "INSERT INTO mesure (Date_T, time_t, capt1, capt2, capt3, capt4, capt5, capt6) VALUES ('$date', '$time','$capt1','$capt2','$capt3','$capt4','$capt5','$capt6')";

mysqli_query ($con,$sql);

mysqli_close($con);
}

?>

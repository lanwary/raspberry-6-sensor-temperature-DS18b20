<?php
$servername = "localhost";
$database = "base";
$username = "azerty";
$password = "0000";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
date_default_timezone_set("Africa/Tunis");
     $date = date('Y-m-d '); 
     $time = date('H:i:s  ');
     $capt1 = htmlspecialchars($_POST["capt1"]);
     $capt2 = htmlspecialchars($_POST["capt2"]);
     $capt3 = htmlspecialchars($_POST["capt3"]);
     $capt4 = htmlspecialchars($_POST["capt4"]);
     $capt5 = htmlspecialchars($_POST["capt5"]);
     $capt6 = htmlspecialchars($_POST["capt6"]); 
     echo "Temperature1: $capt1 Temperature2: $capt2 Temperature3: $capt3 Temperature4: $capt4 Temperature5: $capt5 Temperature6: $capt6";  
     ##$sql = "INSERT INTO mesure (Date_T, time_t, capt1, capt2, capt3, capt4, capt5, capt6) VALUES ('$date', '$time','$capt1','$capt2','$capt3','$capt4','$capt5','$capt6')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

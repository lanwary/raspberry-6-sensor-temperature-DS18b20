<?php
$myCon= mysqli_connect("localhost","azerty","0000") or die ("could not connect to mysql"); 

$link = mysqli_select_db($myCon, "base") or die ("no database connected");
?>

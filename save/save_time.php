
<?php
$db=mysqli_connect('localhost','root','123','groupe1')or die('Error connecting to MySQL server.');
$time = $_POST['time'];
$query = "INSERT INTO table_time_id (time) VALUES ('$time')";
$result=mysqli_query($db,$query);
?>
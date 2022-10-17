<?php
$servername = "sql5.freemysqlhosting.net";
$username = "sql5527047";
$password = "MYj5rfWBXw";
$user = $_POST["firstName"];
$pass = $_POST["password"];


// Database connection
$conn = new mysqli($servername, $username, $password, "sql5527047");
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into userLog(uUser, uPass) values(?, ?)");
	$stmt->bind_param("ss", $user, $pass);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}


?>





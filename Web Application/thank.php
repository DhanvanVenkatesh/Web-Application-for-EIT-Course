	<?php
$email=$_POST['email'];

$host = "localhost";
$dbUsername = "root";
$dbPassword="";
$dbname="registration";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$SELECT = "SELECT email From news Where email=? Limit 1";
	$INSERT = "INSERT Into news (email) values(?)";
	
	$stmt = $conn->prepare($SELECT);
	$stmt ->bind_param("s",$email);
	$stmt ->execute();
	$stmt ->bind_result($email);
	$stmt ->store_result();
	$rnum = $stmt->num_rows;
	if($rnum==0){
		$stmt -> close();
		
		$stmt = $conn->prepare($INSERT);
		$stmt ->bind_param("s",$email);
		$stmt ->execute();
		include('true1.html');
	} else{ 
		include('false1.html');
	}
	$stmt->close();
	$conn->close();
}
?>
	
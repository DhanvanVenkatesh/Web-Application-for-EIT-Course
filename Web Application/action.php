	<?php
$name=$_POST['fname'];
$age=$_POST['fcol'];
$city=$_POST['fDept'];
$state=$_POST['fAdd'];
$phone=$_POST['fnumb'];
$email=$_POST['fema'];

$host = "localhost";
$dbUsername = "root";
$dbPassword="";
$dbname="registration";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$SELECT = "SELECT email From register Where email=? Limit 1";
	$INSERT = "INSERT Into register (name,age,city,state,phone,email) values(?,?,?,?,?,?)";
	
	$stmt = $conn->prepare($SELECT);
	$stmt ->bind_param("s",$email);
	$stmt ->execute();
	$stmt ->bind_result($email);
	$stmt ->store_result();
	$rnum = $stmt->num_rows;
	if($rnum==0){

		$stmt -> close();
		
		$stmt = $conn->prepare($INSERT);
		$stmt ->bind_param("sissis",$name,$age,$city,$state,$phone,$email);
		$stmt ->execute();
		include('true.html');
	} else{ 
		include('false.html');
	}
	$stmt->close();
	$conn->close();
}
?>
	
<?php 
include"dbconnection.php";
if(isset($_POST['login'])){	
$email = $_POST['email'];
$password = $_POST['password'];
$select_sql ="SELECT * FROM `student_registration` WHERE email = '$email' AND password = '$password'";
$result = $conn->query($select_sql);
$row = $result->num_rows; 
	if($row === 1){
		echo $row ;
	}else if ($row === 0){
		echo $row;
	}

}
?>
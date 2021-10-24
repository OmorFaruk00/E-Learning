<?php 
include"dbconnection.php";
session_start();
if(!isset($_SESSION['login'])){
if(isset($_POST['login'])){	
	$email = $_POST['email'];
	$password = $_POST['password'];		
	$select_sql ="SELECT * FROM `student_registration` WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($select_sql);
	$row = $result->fetch_assoc();
	$_SESSION['login'] = true;
	$_SESSION['name'] = $row['name'];
	if(isset($row['role'])){
		echo $row['role'];
	}
}

}





?>
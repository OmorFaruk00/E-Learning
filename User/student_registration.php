<?php 
include"dbconnection.php";
if(isset($_POST['create'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$select_sql ="SELECT * FROM `student_registration` WHERE email = '$email'";
	$result = $conn->query($select_sql);

	if($result->num_rows > 0){
		echo json_encode(array('error'=>'E-mail Already Exists.')); exit;
	}else{
		$sql = "INSERT INTO `student_registration`(`name`, `email`, `password`, `role`) VALUES ('$name', '$email', '$password', '$role')";
		
		if($conn->query($sql) == TRUE){
			echo json_encode(array('success'=>'Registered Successfully')); exit;
		} 
	}
}
?>





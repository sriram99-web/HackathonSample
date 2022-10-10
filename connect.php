<?php
	$empName = $_POST['empName'];
	$empId = $_POST['empId'];
	$email = $_POST['email'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into employee(Id, Name, Email, Pno) values(?, ?, ?, ?)");
		$stmt->bind_param("issi",  $empId, $empName, $email, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		#header("Location: http://".$_SERVER['HTTP_HOST']."/");
		#echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
		#header('Location: '.$url);
    	#die();
		echo "<script> location.href='index.php'; </script>";
		exit();
	}
?>
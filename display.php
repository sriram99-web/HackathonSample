<?php
$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $query="SELECT * FROM english ORDER BY RAND() LIMIT 1";
        $result =  mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
            echo $row['Id']. "<br />";
            echo $row['Name']. "<br />";
            echo $row['Email']. "<br />";
            echo $row['Pno']. "<br />";
        }
    }
?>
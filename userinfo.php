<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="userdata";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}{
echo "Connected successfully";
}
	$user = $_REQUEST['user'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];
	$comment = $_REQUEST['comment'];

	$sql = "INSERT INTO userinfordata VALUES ('$user', '$email', '$mobile', '$comment')";
	
	if(mysqli_query($conn, $sql)){
		echo "succesful";
	}else{
		echo "Not successful";
	}
	mysqli_close($conn);

?>

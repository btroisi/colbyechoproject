
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Echo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name= mysqli_real_escape_string($conn, $_POST['name']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$message=mysqli_real_escape_string($conn, $_POST['message']);

$sql = "INSERT INTO Contact_Info 
VALUES ('$name', '$email', '$message')";


$connt = mysqli_query($conn, $sql);


if ($connt) {
	?>
	<script>
		alert("Your message has been sent successfully!");
		window.history.go(-2);
		
	</script>
	<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


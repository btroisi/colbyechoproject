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



$qarticles= mysqli_query($conn, "SELECT title FROM Articles");

$echoarr=array(); 



while($row = mysqli_fetch_assoc($qarticles)){

  // add each row with a titlereturned into an array
  	
	$echoarr[]=mysqli_real_escape_string($conn,$row['title']);
	

}
 


// get the q parameter from URL
$q = $_REQUEST["q"];
echo $q;

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q != "") {
	$q = strtolower($q);
	$len=strlen($q);
;
	foreach($echoarr as $name) {
		#$name=mysqli_real_escape_string($conn,$name);
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			} else {
				$hint .= ", $name";
			}
		}
	}
}
mysqli_close($conn);
// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? " does not exist " : $hint;
?>
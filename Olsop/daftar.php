<?php
require_once( "db.php");

$nama= $_POST['nama'];
$username= $_POST['username'];
$password= $_POST['password'];

$insert = "INSERT INTO user( nama, username, password) VALUES('$nama', '$username', '$password')";
if ($db->query($insert) === TRUE) {
	echo "new record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $db->error;
}
$db->close();

header("location: pages-signin-signup.php");
exit;
?>
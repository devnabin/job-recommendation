<?php
$server = "localhost:3306";
$username = "root";
$password = "";
$database = "job_recommend";
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn) {
?>
	<script>
		// alert('connection successful');
		console.log("jobseeker > connection > db.php throwF");
	</script>
<?php
} else {
	echo mysqli_connect_error();
}
?>
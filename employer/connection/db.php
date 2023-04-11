<?php
//version : nbn-1.0.0
// This is how we declear veriable in php
$server="localhost:3306";
$username="root";
$password="";
$database="job_recommend";

// mysql connection setup
$conn=mysqli_connect($server, $username, $password, $database);
// if connection is successful then it alert us
if($conn){
?>

<script>
	alert('connection successful');
</script>

<?php
}else{
echo mysqli_connect_error();
}

?>
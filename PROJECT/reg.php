
<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit']))
{
    $name=$_POST["name"];
   $email=$_POST["email"];
   $password=$_POST["pw"];
   }
  $con=mysqli_connect("localhost","root","","project");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$result=mysqli_query($con,'select * from persons where email="'.$email.'"');
$rows=mysqli_fetch_array($result);
 if($rows)
 {
	 $msg="account already exists";
	 echo "<script type='text/javascript'>alert('$msg');</script>";
	 include('index.html');
 }
 else{

$sql = "INSERT INTO user (name,email,password)
VALUES ('$name', '$email', '$password')";

if ($con->query($sql) === TRUE) {
	$message = "successfully registered enter login details";
echo "<script type='text/javascript'>alert('$message');</script>";

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
 include("index.html");  
 }

?>
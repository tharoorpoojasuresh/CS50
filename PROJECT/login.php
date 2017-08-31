 <?php
session_start();
        $con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
        if(isset($_POST['login']))
        {
            $_SESSION['login']=1;
            $result=mysqli_query($con,'select * from user where email="'.$_POST["username"].'" and password="'.$_POST["password"].'"');
            $rows=mysqli_fetch_array($result);
        
        if($rows)
 {
     $_SESSION['userid']=$rows['id'];
     //echo $_SESSION['userid'];
header("Location: dashboard1.php");
     
}
   
         
if(!$rows)
{
    //ob_start();
	$message="wrong username or password";
	    echo "<script type='text/javascript'>alert(".$message.");</script>";

	echo "<a href='index.php'>Go to login page to enter correct credentials</a>";
    //header('Location: index.php');
    //ob_end_flush();

}
}
        ?>
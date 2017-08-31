<?php

session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//echo $_SESSION['queid'];
//echo '<meta http-equiv="refresh" content="7; URL="dashboard.php">';
 $con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit']))
{
    $msg=$_POST['myTextArea'];
    $code="<pre>$msg</pre>";
    //echo $code;
    $et=$_POST['et'];
    $lang= $_POST['language'];
    //echo $_SESSION['quepostid'];
    $c=NULL;
    $cpp=NULL;
    $java=NULL;
    if($lang=='C')
    {
        $c="yes";
    }
    else if($lang=="C++")
    {
        $cpp="yes";
    }
    else
    {
        $java="yes";
    }
    if($et>=0&&$et<0.3)
    {
        $rating=5;
    }
    else if($et>=0.3&&$et<0.7)
    {
        $rating=4;
    }
    else if($et>=0.7&&$et<1)
    {
        $rating=3;
    }
    else if($et>=1&&$et<1.4)
    {
        $rating=2;
    }
    else 
    {
        $rating=1;
    }
    
   /* $c=mysql_real_escape_string($c);
    $cpp=mysql_real_escape_string($cpp);
    $java=mysql_real_escape_string($java);
    $code=mysql_real_escape_string($code);*/
   
  $sql = "INSERT INTO answer (queid,id,C,Cpp,Java,time,rating,solution) VALUES ('".$_SESSION['queid']."','".$_SESSION['userid']."','$c','$cpp','$java','$et','$rating','".nl2br($code)."')";
$res=mysqli_query($con,"select * from queavail where queid=1");
    $rows=mysqli_fetch_array($res);
    
 
if ($con->query($sql) === TRUE) {
     $conn=mysqli_connect("localhost","root","","project");

	$message = "successfully submitted code";
    include 'sample.php';
echo "<script type='text/javascript'>alert('$message');</script>";

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
 $result = mysqli_query($con,"SELECT * FROM answer");
while($row = mysqli_fetch_array($result))
{
    $sol="<p><pre>".$row['solution']."</pre></p>";
     // echo $sol=str_replace("#include","",$sol);
//echo $_SESSION['queid'];
    //echo $_SESSION['quepostid'];

}
echo '<a href="dashboard1.php">Go to Dashboard</a>';

    //echo $_SESSION['queid'];
    //echo $_SESSION['quepostid'];
?>
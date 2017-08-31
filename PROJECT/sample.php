 <?php
session_start();
//echo $_SESSION['userid'];
$con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$res=mysqli_query($con,"select * from queavail where queid='".$_SESSION['queid']."'");
    $rows=mysqli_fetch_array($res);
echo $rows['queid'];
 $qsql = "INSERT INTO question (nqueid,quename,id) VALUES ('".$rows['queid']."','".$rows['quename']."','".$_SESSION['userid']."')";
    $dsql='DELETE FROM queavail WHERE queid="'.$_SESSION['queid'].'"';

if($con->query($qsql)==TRUE)
{
   // echo "inserted";
}
else
{
    //echo "failed";
}

if($con->query($dsql)==TRUE)
{
    //echo "deleted";
}
else
{
    //echo "no";
}

    ?> 
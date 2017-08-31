<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="posting.css" rel="stylesheet">
<body>
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container" style="center-block;padding-left:12cm;">
              <h2>Post Your query</h2>
              
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    
                    
                    <div class="form-group "><br/>
                     <textarea class="form-control" name="text" placeholder="Description"></textarea> 
                    </div>
                      <br/>
                    <button type="submit" name="submit" style="padding:left:4cm;"class="btn btn-default">Send Query</button>
                  </form>

            
                   
                </div>
              </div>
            </div>
        </div>
      </section>
</body>
<?php
session_start();
//echo $_SESSION['userid'];
 $con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['submit']))
{
    $text=$_POST['text'];
echo $text;
     $sql = "INSERT INTO queavail (quename,id) VALUES ('".$text."','".$_SESSION['userid']."')";
    if ($con->query($sql) === TRUE) {
     //$conn=mysqli_connect("localhost","root","","project");

	$message = "successfully submitted code";
    //include 'sample.php';
echo "<script type='text/javascript'>alert('$message');</script>";

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}

    
?>
<!doctype html>
<html ng-app="bzApp">
    <head>
        <title>main page</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="main.css"/>
        
    </head>
    <body ng-controller="bzCtrl">
       <nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;border:color:#428BCA;">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" style="color:#428BCA; font-size:25px; font-family:Times New Roman;border-color:#428BCA" href="#">SMARTCODER</a>
      </div>
        </nav>
        <br/>
        <br/>
        <br/>
         <div class="container" >
           
           
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    
                    
                    <div id="wrapper" >
				
                        <div id="login" class="animate form">
   
        
          
        <div class="container-fluid">
            <h4 style="color:#428BCA;">Copy and paste the code by clicking the post button.Only correctly debugged codes should be kept</h4>
            <?php
            session_start();
            echo $_SESSION['userid'];
            $act="";
            $con=mysqli_connect("localhost","root","","project");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
            //echo $_SESSION['login'];
            if($_SESSION['login']==1)
            {
                $act="edit.php";
            }
            else
            {
                $act="index.php";
            }
     $result = mysqli_query($con,"SELECT * FROM queavail"); 
            $res=mysqli_query($con,"SELECT * FROM question");
            while($row = mysqli_fetch_array($result))
      {
          echo '<div class="list-group">
          <a class="list-group-item">'.$row['quename'].'</a><a href="'.$act.'?queid='.$row['queid'].'&amp;quepostid='.$row['id'].'" role="button"  class="btn btn-primary btn-xs pull-right" >
         
          Post</a></div>';
                }
            while($row = mysqli_fetch_array($res))
      {
          echo '<div class="list-group">
          <a class="list-group-item">'.$row['quename'].'</a><a href="'.$act.'?queid='.$row['nqueid'].'&amp;quepostid='.$row['id'].'" role="button"  class="btn btn-primary btn-xs pull-right" >
         
          Post</a></div>';
                }
            ?>
        </div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
    </body>
</html>
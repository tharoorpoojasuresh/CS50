<!doctype html>
<html ng-app="bzApp">
    <head>
        <title>main page</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bzApp.css"/>
        
    </head>
    <body ng-controller="bzCtrl">
       <nav class="navbar navbar-default navbar-fixed-top" style="background-color:white">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" style="color:#428BCA; font-size:25px; font-family:Times New Roman" href="#">SMARTCODER</a>
      </div>
           </div>
        </nav>
        <br/>
        <br/>
        <br/>
    <br/>
        <?php
        session_start();
//echo $_SESSION['queid'];
 $con=mysqli_connect("localhost","root","","project");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
        $result=mysqli_query($con,"select * from question where id='".$_SESSION['userid']."'");
        while($row=mysqli_fetch_array($result))
        {
            //$res=mysqli_query($con,"select * from answer where queid='".$row['nqueid']."'");
            echo "<div class='list-group'>
                    <a class='list-group-item'>'".$row['quename']."'</a><a href='displaycode.php?queid=".$row['nqueid']."' class='btn btn-primary btn-xs pull-right'>View</a>
                        
                    
                </div>";
            
        }
        /*$result=mysqli_query($con,"select count(*) from answer group by queid having  id='".$_SESSION['userid']."'");
        $res=mysqli_query($con,"select distinct queid from answer where id='".$_SESSION['userid']."'");
        //echo "<h4 style='center-block;color:#428BCA;'>Your answered queries</h4>";
        while($row=mysqli_fetch_array($res))
        {
            $r=mysqli_query($con,"select quename from question where nqueid='".$row['queid']."'");
            $rows=mysqli_fetch_array($r);
          echo "<div class='list-group'>
                    <a class='list-group-item'>'".$rows['quename']."'</a><a href='displaycode.php?queid=".$row['queid']."' class='btn btn-primary btn-xs pull-right'>View</a>
                        
                    
                </div>";
             
        }*/
        //echo $_SESSION['userid'];
        //echo "hi";
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
        <script src="js/bzApp.js"></script>
    </body>
</html>
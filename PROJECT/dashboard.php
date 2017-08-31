<!doctype html>
<html ng-app="bzApp">
    <head>
        <title>main page</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bzApp.css"/>
        
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#428BCA;font-size:20px;">Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
            <li><a href="main.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
           </ul>
        </li>
           <li><form class="navbar-form  navbar-right">
        
               <a href="notification.php" role="button" class="btn btn-primary"><span class="glyphicon glyphicon-bell"></span>Notifications</a>
               </form></li>
 </ul>
      
     
    </div><!-- /.navbar-collapse -->
  <!-- /.container-fluid -->
</nav>
        <br/>
        <br/>
        <br/>
        <div class="container">
    
            <div class="page-header">
                
                <h1 style="font-weight:bold;">My snippets
                    <a href="posting.php"> <button type="button" class="btn btn-primary btn-lg ">
          <span class="glyphicon glyphicon-plus"></span>Post New
                       </button></a>
                   <a href="question.php"> <button type="button" class="btn btn-primary btn-lg pull-right">
          <span class="glyphicon glyphicon-plus"></span>Answer New
                       </button></a>
                </h1>
            </div>
    
        
        <?php
        session_start();
        //echo $_SESSION['userid'];
        $con=mysqli_connect("localhost","root","","project");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
            $r=mysqli_query($con,"select * from answer where id='".$_SESSION['userid']."'");
                   // $res=mysqli_query($con,"SELECT * FROM question where id='".$_SESSION['userid']."'");
        while($rows = mysqli_fetch_array($r))
        {
            
        $res=mysqli_query($con,"select * from question where question.nqueid='".$rows['queid']."'");
            $row=mysqli_fetch_array($res);
        echo '<div class="container outerpadding">
<div class="row">';
 $que="hi";
    //echo $row['quename'];
   $_SESSION['que'] =str_replace('"',"",$row['quename']);
    //echo $que;
   // $p.="hii";
    //$i.="hii";
//echo $_SESSION['que'];
    $que=$_SESSION['que'];
    //echo $que;

        $_SESSION['editcode']=$rows['solution'];
$code= substr($rows['solution'],0,150);
        global $que;
        //echo $que;
        //global $que;
        //echo $p;
        /*if($_SESSION['que']=="")
        {
            echo "chel";
        }*/
        //echo $_SESSION['que'];
        //echo $i;
        $n=1;
        if($rows['C']=="yes")
        {
            $lang="C";
        }
        else if($rows['Cpp']=="yes")
        {
            $lang="C++";
        }
        else
        {
            $lang="Java";
        }
        if($rows['rating']==5)
        {
            $count=5;
        }
        else if($rows['rating']==4)
        {
            $count=4;
        }
        else if($rows['rating']==3)
        {
            $count=3;
        }
        else if($rows['rating']==2)
        {
            $count=2;
        }
        else 
        {
            $count=1;
        }
        //echo $p;
        //echo $lang;
 echo ' <div class="col-lg-3">
     <div class="panel" style="display:inline">
     
        <div class="panel-heading" style="background-color:#428BCA;color:#fff;"><strong>'.$que.'</strong></div>
        <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #428BCA inset;">
        
        <div class="boximg">
           <div class="featureinfo"><p>'.$code.'</p>
        <a class="btn btn-primary btn-sm" href="showcode.php" role="button">more</a>
          </div>
        

         
         <span class="likebut glyphicon glyphicon-tag"></span>
         </div>
         
         
   <br>
        <p class="pull-left">Language
        </p>
     <span class="badge pull-right" style="background-color:teal">'.$lang.'</span>
     <br>';
    
     while($n<=$count)
     {
     echo  '<p style="display:inline"> <span class="glyphicon glyphicon-star" style="font-size:18px;white-space:nowrap;"></span></p>';
         $n++;
     }
      echo '</div>
     </div>
  </div>
 
  ';
        
    }
echo '</div>

</div>';

        ?>
        </div>
        <nav aria-label="pagination">
  <ul class="pager">
    
    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
        <script src="js/bzApp.js"></script>
    </body>
</html>
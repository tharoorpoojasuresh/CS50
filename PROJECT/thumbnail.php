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
        
<?php
$quesid=$_GET['queid'];
echo $quesid;
 session_start();
        //$_SESSION['login']=0;
        $con=mysqli_connect("localhost","root","","project");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
                    $res=mysqli_query($con,"SELECT * FROM question where nqueid='".$quesid."'");
        $res1=mysqli_query($con,"select C , Cpp , Java,rating,solution from answer where answer.queid='".$quesid."'");
        echo '<div class="container outerpadding">
<div class="row">';
$row = mysqli_fetch_array($res);
 $que="hi";
    //echo $row['quename'];
   $_SESSION['que'] =str_replace('"',"",$row['quename']);
    //echo $que;
   // $p.="hii";
    //$i.="hii";
//echo $_SESSION['que'];
    $que=$_SESSION['que'];
    //echo $que;
    while($rows=mysqli_fetch_array($res1))
    {
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
     <div class="panel">
     
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
   <nav aria-label="pagination">
  <ul class="pager">
    
    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>             

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
        <script src="js/bzApp.js"></script>
    </body>
</html>
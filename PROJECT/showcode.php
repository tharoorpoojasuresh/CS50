<html ng-app="bzApp" >
<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bzApp.css"/>
        

</head>
<body onLoad="iFrameOn();">
     
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;border-color:#428BCA;">
  <div class="container-fluid">
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
    </div>
    </nav>
    <br/>
    <br/>
    <br/>
    <br/>
    <?php
    session_start();
    echo $_SESSION['editcode'];
    ?>
    
    </body>
<html ng-app="bzApp" >
<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
         <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="css/bzApp.css"/>
        
       
</head>
<body onLoad="iFrameOn();">
     
<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white;border:color:#428BCA;">
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" name="language">
          <li class="dropdown" name="language">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#428BCA;font-size:20px;">Language Template<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
                <a class="hideDisplay">
   C
   <span class="showDisplayOnHover">
   USE THIS TEMPLATE<br/>
       <p>..............................</p><br/>
   <span class="showBodyOfDisplayOnHover">
   #include&lttime.h&gt <br/>
    int main()<br/>
       {<br/>
       clock_t t,start,end;<br/>
       double et;<br/>
       //declarations<br/>
       start=clock();<br/>
       //your code goes here<br/>
       end=clock();<br/>
       et=((double)(end-start))/CLOCKS_PER_SEC;<br/>
       printf("\nexecution time:%f",et);<br/>
       return 0;<br/>
       } <br/>                           

   </span>
   </span>
   </a>
   

              </li>
            <li>
                <a class="hideDisplay">C++
                    <span class="showDisplayOnHover">
   USE THIS TEMPLATE<br/>
       <p>..............................</p><br/>
   <span class="showBodyOfDisplayOnHover">
       #include&ltiostream.h&gt<br/>
   #include&lttime.h&gt<br/>
       using namespace std;
 void main()<br/>
       {<br/>
       clock_t t,start,end;<br/>
       double et;<br/>
       //declarations<br/>
       start=clock();<br/>
       //your code goes here<br/>
       end=clock();<br/>
       et=((double)(end-start))/CLOCKS_PER_SEC;<br/>
       printf("\nexecution time:%f",et);<br/>
       return 0;<br/>
       } <br/>                           
   </span>
   </span>
                </a></li>
              <li>
                  <a class="hideDisplay">Java
                      <span class="showDisplayOnHover">
   USE THIS TEMPLATE<br/>
       <p>..............................</p><br/>
   <span class="showBodyOfDisplayOnHover">
        import java.util.*;<br/>
import java.lang.*;<br/>
import java.io.*;<br/>

/* Name of the class has to be "Main" only if the class is public. */<br/>
class Codechef<br/>
{<br/>
	public static void main (String[] args) throws java.lang.Exception<br/>
	{<br/>
       final long startTime = System.nanoTime();<br/>
		// your code goes here<br/>
       final long duration = System.nanoTime() - startTime;<br/>
       System.out.println("\nexecution time"+duration);
	}<br/>
}<br/>
       

   </span>
   </span>
                  </a></li>
           </ul>
        </li>
           
 </ul>
      
     
    </div><!-- /.navbar-collapse -->
    </div>  <!-- /.container-fluid -->
</nav>
        <br/>
        <br/>
        <br/>
    <?php
    session_start();
    echo $_SESSION['userid'];
    $queid= isset($_GET['queid']) ? $_GET['queid'] : '';
    $quepostid= isset($_GET['quepostid']) ? $_GET['quepostid'] : '';
    //echo "hi";
    //echo $_GET['queid'];
    //echo $quepostid;
    $_SESSION['queid']=$queid;
    $_SESSION['quepostid']=$quepostid;
    //echo "<br/><br/>";
   //echo $_SESSION['queid'];
    //echo $_SESSION['quepostid'];
?>
   <div class="container" width="300">
           
           
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    
                    
                    <div id="wrapper" >
				
                        <div id="login" class="animate form">
   
        <div class="jumbotron">
            <div class="container">
    
            <div class="page=header">
                <h1 style="font-weight:bold;">Use template in select language and click this button
				
    
				
                   
				   
                </h1>
				<a href="https://www.codechef.com/ide" target="_blank"> <button class="btn btn-primary">Compile & Run</button></a>
            </div>
		
        </div>
		<br>
    <div class="container">
        <form method="post" action="editor.php"> 
            <select name="language">
                <option>C</option>
                <option>C++</option>
                <option>Java</option>
            </select><br/>
			<br>
    <textarea  name="myTextArea" id="myTextArea" cols="90" rows="14"></textarea>
<!-- End replacing your normal textarea -->
            <br/>
            <h4 style="font-weight:bold;">Paste the time displayed of the output in this box  <input type="text" name="et" required></h4>
            <br/>
            <button  name="submit" value="submit" class="btn btn-primary">Submit</button>
        <br/>
            
    </form>
        
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
        <script src="js/bzApp.js"></script>
    <script src="wysiwyg/wysiwyg.js"></script>
    </div>
	</div>
	</div>
	</div>
	</div>
     </section>
	</div>
    </body>
</html>
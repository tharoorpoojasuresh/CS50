<html>
<head>

</head>
    <body>
<?php

$con = mysqli_connect('localhost','root','','project');

if (!$con) {
    die("couldnt connect". mysqli_error);
}

$q= "select * from question";
$result= $con->query($q);
$arr = array();
if ($result->num_rows>0) {

    while ($row = $result->fetch_assoc()) {

    $arr[] = $row['quename'] ;

    }
}

print_r($result);

//echo json_encode($result);

?>



<ul ng-init="names = <?php echo htmlspecialchars(json_encode($arr)); ?>">
<li ng-repeat="x in names">
   <p>{{x.name}}</p>
</li>
</ul>
    
</body>
</html>
<html>
    <head>
    </head>
    <body>
<?php
 $con=mysqli_connect("localhost","root","","project");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
                    $res=mysqli_query($con,"SELECT * FROM question");
$user_data=array();
while($row=mysqli_fetch_array($res))
{
    $user_data[]=array(
        'queid' =>$row['nqueid'],
        'quename'=>$row['quename'],
        'id'=>$row['id']
    );
}
echo htmlspecialchars(json_encode($user_data));


/*$inp = file_get_contents('result.json');
$tempArray = json_decode($inp);
array_push($tempArray, $user_data);
$jsonData = json_encode($tempArray);
file_put_contents('result.json', $jsonData);*/

?>
        <ul ng-init="names = '<?php echo  htmlspecialchars(json_encode($user_data)); ?>'">
        {{names}}
<li ng-repeat="x in names">
   <p>{{x.quename}}</p>
</li>
</ul>
    </body>
</html>
<html ng-app="bzapp">
    <head>
        <title>Angular js</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <br/>
        <br/>
        <div class="container-fluid">
            <div ng-controller="bz3ctrl">
                <input type="text" placeholder="enter your query" id="search" class="form-control" ng-model="query">
                <br>
            <ul class="list-group">
                    <li class="list-group-item" ng-repeat="p in pics|filter:query|orderBy:'-title'">
                        
                        <a href="thumbnail.php?queid={{p.userId}}"> {{p.title|uppercase}}</a>
                </li>
                </ul>
                 </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.min.js"></script>
        <script src="js/bzapp.js"></script>
    </body>
</html>
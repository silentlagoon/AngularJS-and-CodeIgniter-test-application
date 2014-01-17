<!doctype html>
<html lang="en" ng-app="userslistApp">
<head>
    <meta charset="utf-8">
    <title>My AngularJS App</title>
    <link rel="stylesheet" href="/assets/angular/app/css/app.css"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body ng-controller="UsersListCtrl">
Search: <input class="form-control" style="position:absolute;float:left;width:200px;" placeholder="Search" ng-model="search.$">
<div class="container" style="position:relative;top:70px;">
    <table class="table">
        <th>Username</th><th>Password</th>
        <tr ng-repeat="user in users | filter:search | orderBy: 'name'">
            <td>{{user.name}}</td>
            <td>{{user.password}}</td>
        </tr>
    </table>
    <button class="btn btn-primary" ng-click="AddUser">Add new User</button>

</div>

<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
-->
<script src="/assets/angular/app/lib/angular/angular.js"></script>
<script src="/assets/angular/app/lib/angular/angular-route.js"></script>
<script src="/assets/angular/app/js/app.js"></script>
<script src="/assets/angular/app/js/services.js"></script>
<script src="/assets/angular/app/js/controllers.js"></script>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script src="/assets/angular/app/js/filters.js"></script>
<script src="/assets/angular/app/js/directives.js"></script>
</body>
</html>
'use strict';

/* Controllers */

/*
angular.module('myApp.controllers', []).
  controller('MyCtrl1', [function() {

  }])
  .controller('MyCtrl2', [function() {

  }]);*/

/*
angular.module('tableApp.controllers', []).
    controller('MainCtrl', [function() {

    }]);*/

function UsersListCtrl($scope, $http) {
    $http.post('/main/getArray').success(function(data) {
        $scope.users = data;
    });
}

function AddUser($scope) {
    //$scope.logUser = function (user) {
        alert(" is added to database");
    //}
}

'use strict';

/* Directives */


/*angular.module('myApp.directives', []).
  directive('appVersion', ['version', function(version) {
    return function(scope, elm, attrs) {
      elm.text(version);
    };
  }]);*/

angular.module('userslistApp.directives', []).
    directive('addUser', function(){
        return {
            restrict: 'E',
            scope: {
                done: '&'
            },
            template: '<input type="text" ng-model="name">'+
                '<input type="text" ng-model="password">'+
                '<button class="btn btn-primary" ng-click="done({name: name, password: password})">Finish</button>'
        }
    });
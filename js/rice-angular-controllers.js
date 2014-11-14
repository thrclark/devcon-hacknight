var myApp = angular.module('myApp', []);

myApp.controller('MyController', ['$scope', '$http', function($scope, $http) {
  $http.get('json/rice-data-actionlist.json').success(function(data) {
    $scope.actionList = data;
  });
}]);


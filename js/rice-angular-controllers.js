var myApp = angular.module('myApp', []);

myApp.controller('MyController', ['$scope', '$http',  function($scope, $http) {

   $http.get('http://140.182.90.232:8090/processDefinitions').success(function(data) {
    $scope.processDefinitions = data;
  });
  
   $http.get('http://140.182.90.232:8090/processInstances').success(function(data) {
    $scope.processInstances = data;
  });
  
  $http.get('json/rice-data-actionlist.json').success(function(data) {
    $scope.actionList = data;
  });
}]);

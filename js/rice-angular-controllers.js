var myApp = angular.module('myApp', ['workflowServices']);

myApp.controller('MyController', ['$scope', '$http', 'ProcessDefinitions', function($scope, $http, ProcessDefinition) {

  $scope.processDefinitions = ProcessDefinition.getAll();
  
  $http.get('json/rice-data-actionlist.json').success(function(data) {
    $scope.actionList = data;
  });
}]);

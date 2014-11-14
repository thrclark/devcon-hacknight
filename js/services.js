var workflowServices = angular.module('workflowServices', ['ngResource']);

workflowServices.factory('ProcessDefinitions', ['$resource',
    function($resource){
        return $resource('http://140.182.90.232:8090/processDefinitions', {}, {
            getAll: {method:'GET', params:{}, isArray:true}
        });
    }
]);

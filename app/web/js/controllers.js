'use strict';

/* Controllers */
var taApp = angular.module('taApp', ['ngRoute', 'ngResource']);

taApp.config(['$routeProvider', '$locationProvider', function ($routeProvide, $locationProvider) {
    $routeProvide
        .when('/', {
            templateUrl: 'template/home.html',
            controller: 'HomeCtrl'
        })
        .when('/features', {
            templateUrl: 'template/feature.html',
            controller: 'FeatureCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });
}]);


taApp.controller('HomeCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {

}]);



//Phone Detail Controller
taApp.controller('FeatureCtrl', ['$scope', '$http', '$location', '$routeParams','Feature', function ($scope, $http, $location, $routeParams,Feature) {
    $scope.featureId = $routeParams.featureId;
    $scope.features = Feature.query();
}]);




taApp.factory('Feature', [
    '$resource', function ($resource) {
        return $resource('api/all_feature/:featureId',{
            featureId: '1'
        })
    }
]);

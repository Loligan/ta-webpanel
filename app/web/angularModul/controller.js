'use strict';

var taApp = angular.module('taApp', ['ngRoute', 'ngResource']);

taApp.config(['$routeProvider', '$locationProvider', function ($routeProvide, $locationProvider) {
    $routeProvide
        .when('/', {
            templateUrl: '/angularModul/template/home.html',
            controller: 'HomeCtrl'
        })
        // .when('/about', {
        //     templateUrl: 'template/about.html',
        //     controller: 'AboutCtrl'
        // })
        // .when('/contact', {
        //     templateUrl: 'template/contact.html',
        //     controller: 'ContactCtrl'
        // })
        .when('/features', {
        // .when('/features/:featureId', {
            templateUrl: 'angularModul/template/features.html',
            controller: 'FeaturesCtrl'
        })
    // .otherwise({
    //     redirectTo: '/'
    // });
}]);

taApp.controller('FeaturesCtrl', ['$scope', '$http', '$location','Features', function ($scope, $http, $location,Features) {
    // console.log('FeaturesCtrl');
    $scope.phones=Features.query();

}]);

taApp.controller('HomeCtrl', ['$scope', '$http', '$location','Features', function ($scope, $http, $location,Features) {
    // console.log('HomeCtrl');
    $scope.phones=Features.query();

}]);

taApp.factory('Features', [
    '$resource', function ($resource) {
        return $resource('/api/all_feature/:featureId',{
            featureId: null
        })
    }
]);

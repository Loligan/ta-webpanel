'use strict';

/* Controllers */
var phonecatApp = angular.module('phonecatApp', ['ngRoute', 'ngResource']);

phonecatApp.config(['$routeProvider', '$locationProvider', function ($routeProvide, $locationProvider) {
    $routeProvide
        .when('/', {
            templateUrl: '/angularModul/template/home.html',
            controller: 'PhoneListCtrl'
        })
        .when('/about', {
            templateUrl: '/angularModul/template/about.html',
            controller: 'AboutCtrl'
        })
        .when('/features', {
            templateUrl: '/angularModul/template/about.html',
            controller: 'FeaturesCtrl'
        })
        .when('/contact', {
            templateUrl: '/angularModul/template/contact.html',
            controller: 'ContactCtrl'
        })
        .when('/phones/:phoneId', {
            templateUrl: '/angularModul/template/phone-detail.html',
            controller: 'PhoneDetailCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });
}]);

/* Filter */
phonecatApp.filter('checkmark', function () {
    return function (input) {
        return input ? 'u2713' : 'u2718';
    }
});

phonecatApp.controller('PhoneListCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {
    console.log('PhoneListCtrl');

}]);
//About Controller
phonecatApp.controller('FeaturesCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {
    console.log('FeaturesCtrl');
}]);
//About Controller
phonecatApp.controller('AboutCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {
 console.log('AboutCtrl');
}]);
//Contact Controller
phonecatApp.controller('ContactCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {

}]);


//Phone Detail Controller
phonecatApp.controller('PhoneDetailCtrl', ['$scope', '$http', '$location', '$routeParams', function ($scope, $http, $location, $routeParams) {
    $scope.phoneId = $routeParams.phoneId;

    // Phone.get({phoneId: $routeParams.phoneId},function (data) {
    //     $scope.phone = data;
    //     $scope.mainImageUrl = data.images[0];
    // });
// var url = 'phones/' + $routeParams.phoneId + '.json';
// $http.get(url).success(function (data) {
// $scope.phone = data;
// $scope.mainImageUrl = data.images[0];
// });

}]);


// phonecatApp.factory('Phone', [
//     '$resource', function ($resource) {
//         return $resource('phones/:phoneId.:format',{
//             phoneId: 'phones',
//             format: 'json',
//             someFunc: 'ggggg'
//         })
//     }
// ]);
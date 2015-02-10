 var pmgApp = angular.module('pmgApp', []);

    pmgApp.config(function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : '_includes/partials/home.php',
                controller  : 'mainController'
            })
            .when('/why', {
                templateUrl : '_includes/partials/why.php',
                controller  : 'whyController'
            })
            .when('/lender', {
                templateUrl : 'includes/partials/lender.php',
                controller  : 'lenderController'
            })
            .when('/loan-application', {
                templateUrl : '_includes/partials/loan-application.php',
                controller  : 'loanController'
            })
            .when('/apply-online', {
                templateUrl : '_includes/partials/apply-online.php',
                controller  : 'onlineController'
            })
            .when('/about', {
                templateUrl : 'includes/partials/about.php',
                controller  : 'aboutController'
            })
            .when('/contact', {
                templateUrl : 'includes/partials/contact.php',
                controller  : 'contactController'
            });
    });

    // create the controller and inject Angular's $scope
    pmgApp.controller('mainController', function($scope) {

        // create a message to display in our view
        $scope.message = 'PMG mode!';
    });
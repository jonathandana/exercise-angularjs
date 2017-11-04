
angular.module("FinalApp",["lumx","ngRoute","ngResource"])
    .config(function($routeProvider,$locationProvider) {
        $routeProvider
            .when("/", {
                controller:"MainController",
                templateUrl : "templates/home.php"
            })
            .when("/post/:id", {
                controller:"PostController",
                templateUrl : "templates/post.php"
            })
            .when("/new-post", {
                controller:"NewPostController",
                templateUrl : "templates/form-post.php"
            })
            .when("/edit/:id", {
                controller:"PostController",
                templateUrl : "templates/form-post.php"
            })
        // use the HTML5 History API
        $locationProvider.html5Mode(true);

    });
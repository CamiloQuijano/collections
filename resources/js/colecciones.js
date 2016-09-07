/**
 * Aplicacion Colección de Angular - Definición de Rutas 
 * @author Camilo Quijano <camiloquijano31@hotmail.com> 
 * @date 06/09/2016 
 * @param {array} librerías ngResource|ngRoute 
 */
angular.module("collectionApp", ["ngResource", "ngRoute"])
    .config(function ($routeProvider) {
        $routeProvider
                .when("/", {
                    controller: "listCollections",
                    templateUrl: "application/views/collections/list.php"
                })
                .when("/col/new", {
                    controller: "newCollections",
                    templateUrl: "application/views/collections/new.php"
                })
                .when("/col/:id", {
                    controller: "detailsCollection",
                    templateUrl: "application/views/collections/details.php"
                });
    });


/**
 * Cotroladores de Colecciones 
 * @author Camilo Quijano <camiloquijano31@hotmail.com> 
 * @date 06/09/2016 
 * @param {angular} $scope Scope angular 
 * @param {angular} $resurce Librería peticiones 
 */
angular.module("collectionApp")
    .controller("listCollections", ["$scope", "$resource", function ($scope, $resurce) {
            Collections = $resurce("index.php/Collections/getCollections");
            $scope.collections = Collections.query(); 
        }])

    .controller("newCollections", ["$scope", "$http", function ($scope, $http) {
            $scope.nCollection = {};

            $scope.sendFormNewCol = function () {

                $http({
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8', },
                    url: "index.php/Collections/newCollection",
                    method: 'POST',
                    data: $.param({
                        title: $scope.nCollection.title,
                        tcid: 1
                    })
                })
                .success(function (response) {
                    console.log('ok');
                    //$scope.posts.push($scope.newPost); 
                    //$scope.newPost = {}; 
                })
                .error(function (error) { 
                });

            };
        }])

    .controller("detailsCollection", ["$scope", "$resource", "$routeParams", function ($scope, $resurce, $routeParams) {
            //Collection = $resurce("index.php/Collections/getCollection/"+$routeParams.id); 
            //$scope.collection = Collection.query(); 
            //console.log($scope.collection); 
        }]); 
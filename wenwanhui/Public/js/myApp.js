/**
 * Created by Sanplit on 16/04/26.
 */
var myApp = angular.module('myApp', []);

    myApp.controller('myProfile', function($scope){

        $scope.myPF = true;
        $scope.incomplete = false;

        $scope.editProfile = function(id){
            $scope.myPF = !$scope.myPF;//明日再续
        }
    });

    myApp.controller('pro_search', function($scope, $http){
        $http.get("U('Home/Index/getSearch')").success(function(data){ $scope.data = data; })
    })
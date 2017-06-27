angular.module("addController", [])
        .controller("addCtrl", function ($scope, $location, db) {
          
          $scope.sendData = function() {
            db.sendData({
              username: $scope.username,
              deposit: $scope.deposit,
              creditCard: $scope.creditCard,
            });
          };
        })

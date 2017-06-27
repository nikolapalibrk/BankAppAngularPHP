angular.module("mainController", [])
        .controller("mainCtrl", function ($scope, db, share) {

          $scope.users = [];
          $scope.getData = function  () {
            db.getData().then(function(result) {
              $scope.users =  result.data;
            });
          }
          $scope.getData();

            $scope.setActive = function (user) {
                share.sharedData = user;
            }

            $scope.deleteAccount = function (userId) {
                db.deleteData(userId).then($scope.getData());
            }
          })

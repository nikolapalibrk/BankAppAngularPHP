angular.module("editController", [])
        .controller("editCtrl", function ($scope, share, db) {

          $scope.activeUser = share.sharedData;

          $scope.updateData = function() {
            db.updateData({
              id: $scope.activeUser.id,
              username: $scope.activeUser.username,
              deposit: $scope.activeUser.deposit,
              creditCard: $scope.activeUser.creditCard,
            })
          };
        })

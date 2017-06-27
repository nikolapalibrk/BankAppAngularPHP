angular.module('dbService', [])
        .service('db', function($http, $location) {

          this.sendData = function(user) {
            $http({
              method: "post",
              url: "php/addUser.php",
              data : user
            }).then(function(result) {
              console.log(result.data);
            })
          }

          this.getData = function  () {
            return $http({
              method: "get",
              url: "php/data.php"
            })
          }

            this.updateData = function(user) {
              $http({
                method: "post",
                url: "php/updateUser.php",
                data : user
              }).then(function(result) {
                console.log(result.data);
              })
            }

            this.deleteData = function(userId) {
              return $http({
                method: "post",
                url: "php/deleteUser.php",
                data : userId
              })
            }
        })

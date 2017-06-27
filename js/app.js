angular.module('mainApp', [
  'ngRoute',
  'mainController',
  'addController',
  'editController',
  'dbService',
  'shareService'
])
        .config(function($routeProvider, $locationProvider) {
          $locationProvider.hashPrefix('');

          $routeProvider

          .when('/', {
            templateUrl: 'pages/accounts.html',
            controller: 'mainCtrl'
          })

          .when('/add', {
            templateUrl: 'pages/addAccount.html',
            controller: 'addCtrl'
          })

          .when('/editAccounts', {
            templateUrl: 'pages/editAccounts.html',
            controller: 'mainCtrl'
          })

          .when('/editAccount', {
            templateUrl: 'pages/editAccount.html',
            controller: 'editCtrl'
          })

          //display time

          var timeDiv = document.getElementsByClassName('clock')[0];
          var dateDiv = document.getElementsByClassName('date')[0];

          function displayTime () {
            var timeAndDate = new Date();
            var hours = timeAndDate.getHours();
            var minutes = timeAndDate.getMinutes();
            var seconds = timeAndDate.getSeconds();
            if(seconds < 10){
              seconds = "0" + seconds;
            }
            if(minutes < 10){
              minutes = "0" + minutes;
            }
            if(hours < 10){
              hours = "0" + hours;
            }
            var day = timeAndDate.getDate();
            var month = timeAndDate.getMonth() + 1;
            var year = timeAndDate.getFullYear();
            timeDiv.innerHTML = "Time: " + hours + ":" + minutes + ":" + seconds;
            dateDiv.innerHTML = "Date: " + day + "." + month + "." + year;
            setTimeout(displayTime,1000);
          }

          displayTime();
        })

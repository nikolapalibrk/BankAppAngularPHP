<?php
session_start();
if(!$_SESSION['id']){
header('Location: php/login.php');
}
 ?>

 <!DOCTYPE html>
 <html lang="en" ng-app="mainApp">

   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
     <script src="https://code.angularjs.org/1.6.4/angular-route.js" charset="utf-8"></script>
     <script src="js/app.js" charset="utf-8"></script>
     <script src="js/controllers/mainController.js" charset="utf-8"></script>
     <script src="js/controllers/addController.js" charset="utf-8"></script>
     <script src="js/controllers/editController.js" charset="utf-8"></script>
     <script src="js/services/dbService.js" charset="utf-8"></script>
     <script src="js/services/shareService.js" charset="utf-8"></script>
     <link rel="stylesheet" href="css/main.css">
   </head>

   <body>
     <div class="container-fluid">
     <div class="jumbotron text-center">
       <h2>Bank App</h2>
       <a href="#"><button class="btn btn-info">Accounts</button></a>
       <a href="#add"><button class="btn btn-success">Add Account</button></a>
       <a href="#editAccounts"><button class="btn btn-warning">Edit Account</button></a>
       <a  href="php/logout.php"><button id="logout" class="btn btn-danger">Log Out</button></a>
       <div class="clock"></div>
       <div class="date"></div>
     </div>
   </div>

      <ng-view>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   </body>
 </html>

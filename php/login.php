<!DOCTYPE html>
<html lang="en" ng-app="mainApp">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body>
    <div class="container-fluid">
    <div class="jumbotron text-center">
      <h2>Bank App</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
          <form class="text-center" action="logFile.php" method="post">
            <h2>Log In</h2><br>
            <input type="text" class="form-control" name="username" placeholder="username" ><br>
            <input type="password" class="form-control" name="password" placeholder="password"><br>
            <input type="submit" class="btn btn-info btn-lg" value="Sign in" name='submit'>

          </form>
      </div>
    </div>
  </div>

     <ng-view>

    </body>
</html>

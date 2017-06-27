<?php
  include 'connection.php';
  $data = file_get_contents("php://input");
  $jsonData = json_decode($data);
  $username = $jsonData->username;
  $deposit = $jsonData->deposit;
  $creditCard = $jsonData->creditCard;
  echo $username . ' ' . $deposit . ' ' . $creditCard;
  $sql = "INSERT INTO users (username, deposit, creditCard) VALUES ('$username', '$deposit', '$creditCard')";
  $query = mysqli_query($db, $sql)
 ?>

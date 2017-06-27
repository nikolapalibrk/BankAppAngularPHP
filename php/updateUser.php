<?php
  include 'connection.php';
  $data = file_get_contents("php://input");
  $jsonData = json_decode($data);
  $id = $jsonData->id;
  $username = $jsonData->username;
  $deposit = $jsonData->deposit;
  $creditCard = $jsonData->creditCard;
  $sql = "UPDATE users SET username = '$username', deposit = '$deposit', creditCard = '$creditCard' WHERE id = '$id'";
  $query = mysqli_query($db, $sql);

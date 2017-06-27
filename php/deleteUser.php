<?php

  include 'connection.php';
  $data = file_get_contents("php://input");
  $id = json_decode($data);
  $sql = "DELETE FROM users WHERE id = '$id'";
  $query = mysqli_query($db, $sql);

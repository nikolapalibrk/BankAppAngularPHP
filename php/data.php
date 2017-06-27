<?php
  include 'connection.php';
  $sql = 'SELECT * FROM users';
  $query = mysqli_query($db, $sql);
  $arr = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $id = $row['id'];
    $username = $row['username'];
    $deposit = $row['deposit'];
    $creditCard = $row['creditCard'];
    $arr[] = ['id'=>$id, 'username'=>$username, 'deposit'=>$deposit, 'creditCard'=>$creditCard];
  }
 $jsonformat = json_encode($arr);
 echo $jsonformat;

 ?>

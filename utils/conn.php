<?php
  $server_name = 'mentor-program.co';
  $username = 'mtr04group2';
  $password = 'Lidemymtr04group2';
  $db_name = 'mtr04group2';

  $conn = new mysqli($server_name, $username, $password, $db_name);

  if ($conn->connect_error) {
    die('資料庫連線錯誤:' . $conn->connect_error);
  }

  $conn->query('SET NAMES UTF8MB4');
  $conn->query('SET time_zone = "+8:00"');
?>
<?php

function checkLogin($log, $pass){
  $sql = "SELECT * FROM `admin` WHERE login = '$log' AND password = '$pass'";
  $rs = mysqli_query($_SESSION['connection'], $sql);
  return createRsArray($rs);
}

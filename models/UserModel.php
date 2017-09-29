<?php

  function login($login, $password){
      $sql = "SELECT * FROM `user` WHERE userlogin = '$login' AND userpassword = '$password'";
      $rs = mysqli_query($_SESSION['connection'], $sql);
      return createRsArray($rs);
  }

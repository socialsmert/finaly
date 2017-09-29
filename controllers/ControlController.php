<?php

    include "models/AdminModel.php";

    function indexAction($smarty){

    $login = $_POST['login'];
    $password = $_POST['password'];
    $key = checkLogin($login, $password);


}

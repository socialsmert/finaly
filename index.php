<?php
session_start();
if (!isset($_SESSION[language])){
    $_SESSION[language] = "ukr";
}
include_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/db.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/library/mainFunctions.php';
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';
loadPage($smarty, $controllerName, $actionName);

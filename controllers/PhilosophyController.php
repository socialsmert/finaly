<?php
function indexAction($smarty){

    $smarty->assign('pageTitle', 'Філософія');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'phil');
}
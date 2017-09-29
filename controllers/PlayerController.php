<?php
include "models/PlayerModel.php";


function indexAction($smarty){

    $id = $_GET['id'];
    $player = showSelectedPlayer($id);
    
    
    $smarty->assign('player', $player);

    $smarty->assign('pageTitle', 'ГРАВЕЦЬ');
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'player');
    
    
}

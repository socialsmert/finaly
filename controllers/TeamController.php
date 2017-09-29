<?php
include "models/PlayerModel.php";

function indexAction($smarty){

    if ($_SESSION[language] == "en"){
        
        $id = isset($_GET['id']) ? $_GET['id'] : '1';
        $tm = showTeam($id);
        $gk = showGoalkeeperEng($id);
        $def = showDefenderEng($id);
        $semdef = showSemidefenderEng($id);
        $atack = showAttackerEng($id);
        $stf = showStuffEng($id);
        $smarty->assign('tm', $tm);
        $smarty->assign('stf', $stf);
        $smarty->assign('gk', $gk);
        $smarty->assign('def', $def);
        $smarty->assign('semdef', $semdef);
        $smarty->assign('atack', $atack);
        $smarty->assign('pageTitle', 'КОМАНДА');
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'team_eng');
        loadTemplate($smarty, 'footer_eng');
        
    }else{

        $id = isset($_GET['id']) ? $_GET['id'] : '1';
        $tm = showTeam($id);
        $gk = showGoalkeeper($id);
        $def = showDefender($id);
        $semdef = showSemidefender($id);
        $atack = showAttacker($id);
        $stf = showStuff($id);
        $smarty->assign('tm', $tm);
        $smarty->assign('stf', $stf);
        $smarty->assign('gk', $gk);
        $smarty->assign('def', $def);
        $smarty->assign('semdef', $semdef);
        $smarty->assign('atack', $atack);
        $smarty->assign('pageTitle', 'КОМАНДА');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'team');
        
    }
}
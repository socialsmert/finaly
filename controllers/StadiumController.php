<?php
function indexAction($smarty){

    if ($_SESSION[language] == "en"){
        
        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');

        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'stadium_eng');

    }else{    

        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');
        $smarty->assign('pageTitle', 'СТАДІОН');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'stadium');
    }
}
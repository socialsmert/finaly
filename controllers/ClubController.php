<?php

function indexAction($smarty){

    if ($_SESSION[language] == "en"){
        
        $smarty->assign('pageTitle', 'КЛУБ');

        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'club_eng');
        loadTemplate($smarty, 'footer_eng');

    }else{  

        $smarty->assign('pageTitle', 'КЛУБ');
        $smarty->assign('pageTitle', 'КЛУБ');
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'club');

    }
}
<?php

include "models/TableModel.php";
include "models/CalendarModel.php";
include "models/NewsModel.php";

function indexAction($smarty){

    if ($_SESSION[language] == "en"){
        
        $limit = isset($_GET['page']) ? $_GET['page'] : '1';
        $limit = ($limit -1) * 9;
        $news = lastNews($limit);


        $calendar = showCalendar();
        $table = showTableEng();
        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');
        $smarty->assign('table', $table);
        $smarty->assign('calendar', $calendar);
        $smarty->assign('news', $news);
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'index_eng');
        loadTemplate($smarty, 'footer_eng');
        
    }else{

        $limit = isset($_GET['page']) ? $_GET['page'] : '1';
        $limit = ($limit -1) * 9;
        $news = lastNews($limit);


        $calendar = showCalendar();
        $table = showTable();
        $smarty->assign('pageTitle', 'ФК АРСЕНАЛ');
        $smarty->assign('table', $table);
        $smarty->assign('calendar', $calendar);
        $smarty->assign('news', $news);
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'index');
       
    }
}

function enAction(){
    $_SESSION[language] = "en";
    header( "Location: /" );
}

function uaAction(){
    $_SESSION[language] = "ua";
    header( "Location: /" );
}

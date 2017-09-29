<?php
include "models/NewsModel.php";


function indexAction($smarty){


    if ($_SESSION[language] == "en"){

        
        $id = isset($_GET['id']) ? $_GET['id'] : '1';
        $news = showSelectedNews($id);
        $lastnews = lastNewsArt(0);
        $smarty->assign('pageTitle', 'НОВИНИ');
        $smarty->assign('news', $news);
        $smarty->assign('lastnews', $lastnews);
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'newspage_eng');
        loadTemplate($smarty, 'footer_eng');
        

    }else{

        $id = isset($_GET['id']) ? $_GET['id'] : '1';
        $news = showSelectedNews($id);
        $lastnews = lastNewsArt(0);
        $smarty->assign('pageTitle', 'НОВИНИ');
        $smarty->assign('news', $news);
        $smarty->assign('lastnews', $lastnews);
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'newspage');
    }
}

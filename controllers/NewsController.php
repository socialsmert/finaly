<?php

include "models/NewsModel.php";

function indexAction($smarty){

    if ($_SESSION[language] == "en"){

        $limit = isset($_GET['id']) ? $_GET['id'] : '1';
        $limit = ($limit -1) * 9;
        $news = showNews($limit);
        $total_rows = pageCount();
        $per_page = 16;
        $num_pages=ceil($total_rows/$per_page);
        $smarty->assign('pageTitle', 'НОВИНИ');
        $smarty->assign('pages', $num_pages);
        $smarty->assign('news', $news);
        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'news_eng');
        loadTemplate($smarty, 'footer_eng');

    }else{  


        $limit = isset($_GET['id']) ? $_GET['id'] : 1;
        $total_rows = pageCount();
        $per_page = 16;
        $num_pages=ceil($total_rows/$per_page);

        
        $limit = (($limit -1) * 16) + 3;
        $news = showNews($limit);
        $mainnews1 = showMainNews1();
        $mainnews2 = showMainNews2();
        $mainnews3 = showMainNews3();






        $smarty->assign('load_more', $load_more);
        $smarty->assign('pages', $num_pages);
        $smarty->assign('news', $news);
         $smarty->assign('pageTitle', 'НОВИНИ');
        $smarty->assign('mainnews1', $mainnews1);
        $smarty->assign('mainnews2', $mainnews2);
        $smarty->assign('mainnews3', $mainnews3);
        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'news');


    }
}


function moreAction(){

    $limit = isset($_GET['id']) ? $_GET['id'] : 1;
   
    $total_rows = pageCount();
    $per_page = 16;
    $num_pages=ceil($total_rows/$per_page);

    
    $limit = ($limit -1) * 16;

    showMoreNews($limit);



}


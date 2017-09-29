<?php
include "models/AlbumModel.php";
include "models/VideoModel.php";

function indexAction($smarty){
    
    

    if ($_SESSION[language] == "en"){
        
        $albums = showAlbums();
        $videos = showVideos();
        $smarty->assign('videos', $videos);
        $smarty->assign('albums', $albums);

        loadTemplate($smarty, 'header_eng');
        loadTemplate($smarty, 'media_eng');
        
    }else{

        $albums = showAlbums();
        $videos = showVideos();
        $smarty->assign('videos', $videos);
        $smarty->assign('albums', $albums);
        $smarty->assign('pageTitle', 'МЕДІА');

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'media');

    }
}

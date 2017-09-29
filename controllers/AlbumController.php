<?php
include "models/AlbumModel.php";


function indexAction($smarty){

    $id = $_GET['id'];
    $album = showSelectedAlbum($id);
    $photos = showSelectedAlbumPhotos($id);

    $smarty->assign('pageTitle', 'ФОТО');
    $smarty->assign('album', $album);
    $smarty->assign('photos', $photos);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'album');
    
}

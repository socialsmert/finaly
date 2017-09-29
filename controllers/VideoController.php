<?php
include "models/VideoModel.php";


function indexAction($smarty){

    $id = $_GET['id'];
    $video = showSelectedVideo($id);
    

    
    $smarty->assign('video', $video);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'video');
    
}

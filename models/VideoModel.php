<?php

function showVideos(){
    $sql = "SELECT * FROM `videos` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showSelectedVideo($id){
    $sql = "SELECT * FROM `videos` WHERE id = $id ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}
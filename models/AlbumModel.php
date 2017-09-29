<?php

function showAlbums(){
    $sql = "SELECT * FROM `albums` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}



function showSelectedAlbum($id){
    $sql = "SELECT * FROM `albums` WHERE id = $id ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showSelectedAlbumPhotos($id){
    $sql = "SELECT * FROM `albumsphoto` WHERE album_id = $id ORDER BY id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function addAlbumPhoto($id, $newFileName, $size){
    
    
     $sql = "INSERT INTO `albumsphoto`
            SET
                `photo` = '$newFileName',
                `size` = '$size',
                `album_id` = $id";

    
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;
}

function addAlbumMainPhoto($id, $newFileName){
    
    
     $sql = "UPDATE `albums`
            SET
                `mainphoto` = '$newFileName' WHERE id=$id";


    
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;
}

    
    function insertAlbum($title){

    $sql = "INSERT INTO `albums`
            SET
                `title` = '$title'";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

<?php

function showNews($limit1){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT $limit1, 16";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);

}

function showMainNews1(){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT 0, 1";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);

}

function showMainNews2(){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT 1, 1";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);

}

function showMainNews3(){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT 2, 1";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);

}

function showMoreNews($limit1){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT $limit1, 16";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    $news = createRsArray($rs);

    foreach ($news as $newsitem => $item) {

        $addnews .= "<a class='news-block' href='/article/".$item['id']."'>

            <img src='/images/news/". $item['photo'] . "'>


            <div class='news-block-content'>


            <div class='title'>".$item['title']."</div>
            <div class='date'>".$item['date']."</div>

            </div>

            </a>";
    }

    echo json_encode($addnews);

}

function showAllNews(){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showAllHiddenNews(){
    $sql = "SELECT * FROM `news` WHERE display = 0 ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function lastNews($limit1){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT $limit1, 1";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function lastNewsArt($limit1){
    $sql = "SELECT * FROM `news` WHERE display = 1 ORDER BY id DESC LIMIT $limit1, 3";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function pageCount(){
    $sql = "SELECT COUNT(1) FROM news WHERE display = 1";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    $rs = mysqli_fetch_array($rs);
    return $rs[0];
}

function showSelectedNews($id){
    $sql = "SELECT * FROM `news` WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}


function insertNews($title, $date, $text){

    $sql = "INSERT INTO `news`
            SET
                `title` = '$title',
                `date` = '$date',
                `text` = '$text'";

    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function deleteNews($id){
    $sql = "DELETE FROM `news` WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
}


function updateNews($id, $title, $date, $text){

    $sql = "UPDATE `news` SET  `title`='$title',`date`='$date',`text`='$text' WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function updateNewsPhoto($id, $photo){

    $sql = "UPDATE `news` SET  `photo`='$photo' WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function makeVisibleNews($id){

    $sql = "UPDATE `news` SET  `display` = 1 WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}

function makeHiddenNews($id){

    $sql = "UPDATE `news` SET  `display` = 0 WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;

}
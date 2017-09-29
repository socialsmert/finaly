<?php

function showCalendar(){
    $sql = "SELECT * FROM `calendar` ORDER BY id DESC";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}


function updateCalendar($id, $date, $place, $team1, $score1, $team2, $score2, $day, $month){
    $sql = "UPDATE `calendar` SET `team1`='$team1',`score1`='$score1', `team2`='$team2',`score2`='$score2',`date`='$date',`day`='$day',`month`='$month',`place`='$place' WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;
}


function insertCalendar($id, $date, $place, $team1, $score1, $team2, $score2, $day, $month){
    $sql = "INSERT INTO `calendar`(`team1`, `score1`, `team2`, `score2`, `date`, `day`, `month`, `place`) VALUES ('$team1', '$score1', '$team2', '$score2', '$date', '$day', '$month', '$place')";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return $rs;
}

function deleteCalendar($id){
  $sql = "DELETE FROM `calendar` WHERE id = $id";
  $rs = mysqli_query($_SESSION['connection'], $sql);
}



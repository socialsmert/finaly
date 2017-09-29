<?php


function showSelectedPlayer($id){
    $sql = "SELECT * FROM `players` WHERE id = $id";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}


function showTeam($teamid){
    $sql = "SELECT * FROM `teams` WHERE team_id = $teamid";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showStuff($teamid){
    $sql = "SELECT * FROM `players` WHERE team = $teamid AND team_id = 2";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showGoalkeeper($teamid){
    $sql = "SELECT * FROM `players` WHERE team = $teamid AND position='воротар'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showDefender($teamid){
    $sql = "SELECT * FROM `players` WHERE team = $teamid AND position='захисник'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showSemidefender($teamid){
    $sql = "SELECT * FROM `players` WHERE team = $teamid AND position='півзахисник'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showAttacker($teamid){
    $sql = "SELECT * FROM `players` WHERE team = $teamid AND position='нападник'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showStuffEng($teamid){
    $sql = "SELECT * FROM `players_eng` WHERE team = $teamid AND team_id = 2";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showGoalkeeperEng($teamid){
    $sql = "SELECT * FROM `players_eng` WHERE team = $teamid AND position='Goalkeeper'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showDefenderEng($teamid){
    $sql = "SELECT * FROM `players_eng` WHERE team = $teamid AND position='Defender'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showSemidefenderEng($teamid){
    $sql = "SELECT * FROM `players_eng` WHERE team = $teamid AND position='Midfielder'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}

function showAttackerEng($teamid){
    $sql = "SELECT * FROM `players_eng` WHERE team = $teamid AND position='Forward'";
    $rs = mysqli_query($_SESSION['connection'], $sql);
    return createRsArray($rs);
}


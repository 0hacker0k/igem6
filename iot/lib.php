<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("UPDATE `iot` SET `status`=:dat WHERE `id`=1");
$rs->bindValue("dat",$_GET['data']);
$v=$rs->execute();


header("Location:./change.php");
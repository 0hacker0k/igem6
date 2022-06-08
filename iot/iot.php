<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$all=$rs->execute()->fetchall();
$count=0;
foreach($all as $value){
    if($count!=0) echo " ";
    echo $value['status'];
    $count++;
}

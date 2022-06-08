<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$rs->execute();
$count=0;
foreach($rs->fetchall() as $value){
    if($count!=0) echo " ";
    echo $value['status'];
    $count++;
}

<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$rs->execute();
$count=0;
foreach($rs->fetchall() as $value){
    echo $value['status']."\n";
    echo $value['buzzer']."\n";
    echo $value['motor']."\n";
    echo $value['set_time']."\n";
    echo $value['return_value']."\n";
    echo $value['port']."\n";
    $count++;
}
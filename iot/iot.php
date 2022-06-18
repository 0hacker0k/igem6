<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$rs->execute();
$count=0;
foreach($rs->fetchall() as $value){
    echo $value['status']." ";
    echo $value['buzzer']." ";
    echo $value['motor']." ";
    echo $value['set_time']." ";
    echo $value['return_value']." ";
    $count++;
}
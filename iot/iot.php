<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$rs->execute();
$count=0;
foreach($rs->fetchall() as $value){
    echo $value['status']."\n";//狀態 0待命 1運作中 2異常
    echo $value['count']."\n";//目前膠數
    echo $value['command']."\n";//命令 0暫停 1開始 2清除後續工作 3全部停止
    // echo $value['set_time']."\n";//定時結束
    echo $value['return_value']."\n";//已接收
    echo $value['port']."\n";//運作ip
    $count++;
}
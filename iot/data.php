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
    echo $value['concentration']."\n";//定時結束
    echo $value['set_time']."\n";//定時結束
    echo $value['return_value']."\n";//已接收
    echo $value['port']."\n";//運作ip
    $count++;
}
if(isset($_GET['port'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `port`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['port']);
    $v=$rs->execute();
}
if(isset($_GET['status'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `status`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['status']);
    $v=$rs->execute();
}
if(isset($_GET['count'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `count`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['count']);
    $v=$rs->execute();
}
// if(isset($_GET['command'])){
//     $rs=$dbc->prepare("UPDATE `iot` SET `command`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_GET['command']);
//     $v=$rs->execute();
// }
$rs=$dbc->prepare("UPDATE `iot` SET `return_value`=1 WHERE `id`=1");
$v=$rs->execute();

// if(isset($_GET['set_time']) && $_GET['set_time']==1 && $_POST['set_time']!=null){
//     $rs=$dbc->prepare("UPDATE `iot` SET `set_time`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_POST['set_time']);
//     $v=$rs->execute();
// }
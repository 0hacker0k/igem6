<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
if(isset($_GET['port'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `port`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['port']);
    $v=$rs->execute();
}
// if(isset($_GET['buzzer'])){
//     $rs=$dbc->prepare("UPDATE `iot` SET `buzzer`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_GET['buzzer']);
//     $v=$rs->execute();
// }
// if(isset($_GET['motor'])){
//     $rs=$dbc->prepare("UPDATE `iot` SET `motor`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_GET['motor']);
//     $v=$rs->execute();
// }
// if(isset($_GET['set_time']) && $_GET['set_time']==1 && $_POST['set_time']!=null){
//     $rs=$dbc->prepare("UPDATE `iot` SET `set_time`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_POST['set_time']);
//     $v=$rs->execute();
// }
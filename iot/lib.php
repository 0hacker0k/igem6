<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
// if(isset($_GET['port'])){
//     $rs=$dbc->prepare("UPDATE `iot` SET `port`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_GET['port']);
//     $v=$rs->execute();
// }
// if(isset($_GET['status'])){
//     $rs=$dbc->prepare("UPDATE `iot` SET `status`=:dat WHERE `id`=1");
//     $rs->bindValue("dat",$_GET['status']);
//     $v=$rs->execute();
// }
if(isset($_GET['count'])){
    if($_GET['count']==1){
        $rs=$dbc->prepare("UPDATE `iot` SET `count`=:dat WHERE `id`=1");
        $rs->bindValue("dat",$_POST['count']);
        $v=$rs->execute();
        $rs=$dbc->prepare("UPDATE `iot` SET `return_value`=0 WHERE `id`=1");
        $v=$rs->execute();
    }
    if($_GET['count']==2){
        $rs=$dbc->prepare("UPDATE `iot` SET `concentration`=:dat WHERE `id`=1");
        $rs->bindValue("dat",$_GET['concentration']);
        $v=$rs->execute();
        $rs=$dbc->prepare("UPDATE `iot` SET `return_cct`=0 WHERE `id`=1");
        $v=$rs->execute();
    }
}
if(isset($_GET['command'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `command`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['command']);
    $v=$rs->execute();
}
/*if($_GET['return_value']!=null){
    $rs=$dbc->prepare("UPDATE `iot` SET `status`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['buzzer']);
    $v=$rs->execute();
}*/

header("Location:./change.php");
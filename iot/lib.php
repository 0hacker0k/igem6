<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
if(isset($_GET['status'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `status`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['status']);
    $v=$rs->execute();
}
if(isset($_GET['buzzer'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `buzzer`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['buzzer']);
    $v=$rs->execute();
}
if(isset($_GET['motor'])){
    $rs=$dbc->prepare("UPDATE `iot` SET `motor`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['motor']);
    $v=$rs->execute();
}
if(isset($_GET['set_time']) && $_GET['set_time']==1 && $_POST['set_time']!=null){
    $rs=$dbc->prepare("UPDATE `iot` SET `set_time`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['set_time']);
    $v=$rs->execute();
}
/*if($_GET['return_value']!=null){
    $rs=$dbc->prepare("UPDATE `iot` SET `status`=:dat WHERE `id`=1");
    $rs->bindValue("dat",$_GET['buzzer']);
    $v=$rs->execute();
}*/
header("Location:./change.php");
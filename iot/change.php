<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$rs->execute();
$count=0;
foreach($rs->fetchall() as $value){
    // echo $value['status']."\n";//狀態 0待命 1運作中 2異常
    // echo $value['count']."\n";//目前膠數
    // echo $value['command']."\n";//命令 0暫停 1開始 2清除後續工作 3全部停止
    // // echo $value['set_time']."\n";//定時結束
    // echo $value['return_value']."\n";//已接收
    // echo $value['port']."\n";//運作ip
    $count++;
?>
<form enctype="multipart/form-data" id="event_upload_form" method="post">
    <div style="font-size: 6rem;">當前狀態</div>
    <div style="font-size: 6rem;"><?php echo $value['status'];?></div>
    <button style="font-size: 6rem;" formaction="./lib.php?command=0" type="submit">暫停</button>
    <button style="font-size: 6rem;" formaction="./lib.php?command=1" type="submit">執行</button>
    <button style="font-size: 6rem;" formaction="./lib.php?command=2" type="submit">清除後續工作</button>
    <button style="font-size: 6rem;" formaction="./lib.php?command=3" type="submit">全部停止</button>
    <button style="font-size: 6rem;" onclick="add_count()" type="button">+</button>
    <input type="text" id="count_1" name="count" value="<?php echo $value['count'];?>" style="text-align: right;"/>
    <button style="font-size: 6rem;" onclick="sub_count()" type="button">-</button>
    <button style="font-size: 6rem;" formaction="./lib.php?count=1" type="submit">送出</button>
    <div style="font-size: 6rem;">運行位址:<?php echo $value['port'];?></div>
</form>
<?php 
}
?>
<script>
    function add_count(){
        var element=document.getElementById("count_1");
        element.value=Number(element.value)+1;
    }
    function sub_count(){
        var element=document.getElementById("count_1");
        if(Number(element.value)>0)
            element.value=Number(element.value)-1;
    }
</script>
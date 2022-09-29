<?php
include_once "./DBconnect.php";
$DB = new DBconnect();
$dbc = $DB->connect();
$rs=$dbc->prepare("SELECT * FROM `iot`");
$rs->execute();
$count=0;
foreach($rs->fetchall() as $value){
    $count++;
?>
<style>
    .size_mid{
        font-size: 4vw;
    }
</style>
<div style="width: 90%;height: 40%;margin: calc(5% - 1rem);border: 1rem solid;">
    <div style="width: 100%;height: 33%;text-align: center">
        Status: 
        <?php 
            if($value['status']==0)
                echo "Idle";
            else if($value['status']==1)
                echo "Working";
            else if($value['status']==2)
                echo "Pause";
            else if($value['status']==3)
                echo "Error";
        ?>
    </div>
    <div style="width: 100%;height: 33%;text-align: center;display: flex;align-items: center;">
        Process: 
        <div style="padding: 0.1rem;border: 0<?php if($value['process']==1)echo ".1";?>rem">
            Quantitative
        </div>
        <div style="padding: 0.1rem;border: 0<?php if($value['process']==2)echo ".1";?>rem">
            Heating
        </div>
        <div style="padding: 0.1rem;border: 0<?php if($value['process']==3)echo ".1";?>rem">
            Cool down
        </div>
        <div style="padding: 0.1rem;border: 0<?php if($value['process']==4)echo ".1";?>rem">
            Demoulding
        </div>
    </div>
    <div style="width: 100%;height: 33%;text-align: center;display: flex;align-items: center;">Address of running:<?php echo $value['port'];?>
        ;
    </div>
</div>
<form class="size_mid" enctype="multipart/form-data" id="event_upload_form" method="post">
    <div>當前狀態</div>
    <div><?php echo $value['status'];?></div>
    <button class="size_mid" formaction="./lib.php?command=0" type="submit">暫停</button>
    <button class="size_mid" formaction="./lib.php?command=1" type="submit">執行</button>
    <button class="size_mid" formaction="./lib.php?command=2" type="submit">清除後續工作</button>
    <button class="size_mid" formaction="./lib.php?command=3" type="submit">全部停止</button>
    <div>數量</div>
    <button class="size_mid" onclick="add_count()" type="button">+</button>
    <input class="size_mid" type="text" id="count_1" name="count" value="<?php echo $value['count'];?>" style="text-align: right;"/>
    <button class="size_mid" onclick="sub_count()" type="button">-</button>
    <button class="size_mid" formaction="./lib.php?count=1" type="submit">送出</button>
    <div>濃度(%)</div>
    <button class="size_mid" onclick="add_cct()" type="button">+</button>
    <input class="size_mid" type="text" id="cct_1" name="concentration" value="<?php echo $value['concentration'];?>" style="text-align: right;"/>
    <button class="size_mid" onclick="sub_cct()" type="button">-</button>
    <button class="size_mid" formaction="./lib.php?count=2" type="submit">送出</button>
    
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
    function add_cct(){
        var element=document.getElementById("cct_1");
        element.value=Number(element.value)+1;
    }
    function sub_cct(){
        var element=document.getElementById("cct_1");
        if(Number(element.value)>2)
            element.value=Number(element.value)-1;
    }
</script>
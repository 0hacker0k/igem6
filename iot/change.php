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
        font-size: 2vw;
    }
    .size_big{
        font-size: 4vw;
    }
    .sameline{
        float:left;

    }
    .center{
        margin: 5px auto;
	    text-align: center;
    }
    .center div {
        display: inline-block;
        vertical-align: top;
    }
    button{
        width:80%;
        margin-left:10%;
        margin-right:10%;
        margin-top:1%;
        margin-bottom:1%;
    }
    .pad{
        padding-top: 1.22vw;
        padding-bottom: 1.22vw;
    }
</style>
<form class="size_mid center" enctype="multipart/form-data" id="event_upload_form" method="post">
    <div style="text-align: center;padding:5%;width: 80%;margin: calc(5% - 2rem);border: 1rem solid;">
        <div class="center" style="width: 100%;text-align: center">
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
        <div class="center" style="width: 100%;text-align: center;display: flex;align-items: center;">
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
        <div class="center" style="width: 100%;text-align: center;display: flex;align-items: center;">
            Address of running:<?php echo $value['port'];?>
        </div>
        <div class="center" style="width: 100%;text-align: center;display: flex;align-items: center;">
            <div>Count</div>
            <input class="size_mid" type="text" id="count_1" name="count" value="<?php echo $value['count'];?>" style="text-align: right;width:10%;"/>
        </div>
        <div class="center" style="width: 100%;text-align: center;display: flex;align-items: center;">    
            <div>Concentration(%)</div>   
            <input class="size_mid" type="text" id="cct_1" name="concentration" value="<?php echo $value['concentration'];?>" style="text-align: right;width:10%;"/>
        </div>
    </div>
    <div style="width: 24%;"><button class="size_mid pad" formaction="./lib.php?command=0" type="submit">Pause</button></div>
    <div style="width: 24%;"><button class="size_mid pad" formaction="./lib.php?command=1" type="submit">Run</button></div>
    <div style="width: 24%;"><button class="size_mid pad" formaction="./lib.php?command=2" type="submit">Clear</button></div>
    <div style="width: 24%;"><button class="size_mid pad" formaction="./lib.php?command=3" type="submit">Emergency Stop</button></div>
    <div style="width: 24%;"><button class="size_big" onclick="add_count()" type="button">+</button></div>
    <div style="width: 24%;" class="pad">Count</div>
    <div style="width: 24%;"><button class="size_big" onclick="sub_count()" type="button">-</button></div>
    <div style="width: 24%;"><button class="size_mid pad" formaction="./lib.php?count=1" type="submit">Submit</button></div>
    <div style="width: 24%;"><button class="size_big" onclick="add_cct()" type="button">+</button></div>
    <div style="width: 24%;" class="pad">Concentration(%)</div>
    <div style="width: 24%;"><button class="size_big" onclick="sub_cct()" type="button">-</button></div>
    <div style="width: 24%;"><button class="size_mid pad" formaction="./lib.php?count=2" type="submit">Submit</button></div>
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
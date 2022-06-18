<form enctype="multipart/form-data" id="event_upload_form" method="post">
    <div style="font-size: 6rem;">LED燈亮滅</div>
    <button style="font-size: 6rem;" formaction="./lib.php?status=1" type="submit">1</button>
    <button style="font-size: 6rem;" formaction="./lib.php?status=0" type="submit">0</button>
    <div style="font-size: 6rem;">微型馬達伺服</div>
    <button style="font-size: 6rem;" formaction="./lib.php?motor=0" type="submit">歸位</button>
    <button style="font-size: 6rem;" formaction="./lib.php?motor=1" type="submit">搖晃(輕)</button>
    <button style="font-size: 6rem;" formaction="./lib.php?motor=2" type="submit">搖晃(重)</button>
    <div style="font-size: 6rem;">蜂鳴器</div>
    <button style="font-size: 6rem;" formaction="./lib.php?buzzer=0" type="submit">關閉</button>
    <button style="font-size: 6rem;" formaction="./lib.php?buzzer=1" type="submit">提醒</button>
    <div style="font-size: 6rem;">計時</div>
    <input type="text" name="set_time" style="font-size: 6rem;" value="60"/>
    <button style="font-size: 6rem;" formaction="./lib.php?set_time=1" type="submit">送出計時</button>
</form>
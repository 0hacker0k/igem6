<!doctype html> 
<head>
    <title>wiki</title>
    <meta charset="UTF-8" />
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook.css">
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook_each.css">
    <script src="<?php echo jsfile;?>/notebook.js"></script>
</head>

<body onload="load_finish()">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <div class="notebook">
        <div class="left_div">
            <div>
                <button type="button" class="leftlabel leftlabel1" onclick="switchbtn(1)">MAY.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel2" onclick="switchbtn(2)">JUN.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel3" onclick="switchbtn(3)">JUL.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel4" onclick="switchbtn(4)">AUG.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel5" onclick="switchbtn(5)">SEP.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel6" onclick="switchbtn(6)">OCT.</button>
            </div>
        </div>
        <div class="top_div">
            <div class="top_control">
                <button type="button" class="toplabel toplabel1" onclick="switchbtn(10)">WET LAB</button>
            </div>
            <div class="top_control">
                <button type="button" class="toplabel" onclick="switchbtn(20)">DRY LAB</button>
            </div>
            <div class="top_control">
                <button type="button" class="toplabel" onclick="switchbtn(30)">HP</button>
            </div>
            <div class="top_control">
                <button type="button" class="toplabel" onclick="switchbtn(40)">TIMELINE</button> 
            </div>
        </div>

        

        <div id="right_div" class="right_div">
            <div class="pad">
                <h1 class="align-mid red_title">NOTEBOOK</h1>
                <hr>
                <div class="mid_area">
                    <div class="mid_control">
                        <button type="button" class="midbutton" onclick="switchbtn(10)"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">WET LAB</button>
                    </div>
                    <div class="mid_control">
                        <button type="button" class="midbutton" onclick="switchbtn(20)"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">DRY LAB</button>
                    </div>
                    <div class="mid_control">
                        <button type="button" class="midbutton" onclick="switchbtn(30)"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">HUMAN PRACTICE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        if(urlParams.has('month')!=undefined && urlParams.has('group')!=undefined){
            var group=urlParams.get('group');
            var month=urlParams.get('month');
            var goal="./notebook/notebook_"+group+"_"+Number(month)+".php"
            $("#right_div").load(goal);
            if (location.href.includes('?')) {
                history.pushState({}, null, location.href.split('?')[0]);
            }
            const url = new URL(location.href);
            url.searchParams.set('group', group);
            history.pushState(null, '', url);
            url.searchParams.set('month', x);
            history.pushState(null, '', url);
        }
        
    </script>
  <?php include "./sub/footer.php"?>

</body>
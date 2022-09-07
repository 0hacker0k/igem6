<!doctype html> 
<head>
    <title>wiki</title>
    <meta charset="UTF-8" />
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook.css">
</head>

<body onload="load_finish()">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <div class="notebook">
        <div class="left_div">
            <div>
                <button id="left_1" type="button" class="leftlabel leftlabel1" onclick="switchbtn(1)">MAY.</button>
            </div>
            <div>
                <button id="left_2" type="button" class="leftlabel leftlabel2" onclick="switchbtn(2)">JUN.</button>
            </div>
            <div>
                <button id="left_3" type="button" class="leftlabel leftlabel3" onclick="switchbtn(3)">JUL.</button>
            </div>
            <div>
                <button id="left_4" type="button" class="leftlabel leftlabel4" onclick="switchbtn(4)">AUG.</button>
            </div>
            <div>
                <button id="left_5" type="button" class="leftlabel leftlabel5" onclick="switchbtn(5)">SEP.</button>
            </div>
            <div>
                <button id="left_6" type="button" class="leftlabel leftlabel6" onclick="switchbtn(6)">OCT.</button>
            </div>
        </div>
        <div class="top_div">
            <div class="top_control">
                <button id="top_1" type="button" class="toplabel toplabel1" onclick="switchbtn(10)">WET LAB</button>
            </div>
            <div class="top_control">
                <button id="top_2" type="button" class="toplabel" onclick="switchbtn(20)">DRY LAB</button>
            </div>
            <div class="top_control">
                <button id="top_3" type="button" class="toplabel" onclick="switchbtn(30)">HP</button>
            </div>
            <!-- <div class="top_control">
                <button id="top_4" type="button" class="toplabel" onclick="switchbtn(40)">TIMELINE</button> 
            </div> -->
        </div>

        

        <div id="right_div" class="right_div">
            <div class="pad">
                <div id="content">
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
                <div class="page_change">
                    <div id="last" class="last page_button" onclick="last_page()">Last Page</div>
                    <div id="next" class="next page_button" onclick="next_page()">Next Page</div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/notebook.js"></script>
</body>
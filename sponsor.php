<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/attribution.css">
    <script src="<?php echo jsfile;?>/attribution.js"></script>
</head>
<body onload="load_finish();locate_note();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/sponsor/pepe-the-frog-gif-6.gif" alt=""> 
    <div class="attribution_overview justify-content-around">
        <div class="col-7">
            <img class="full_size_image" src="<?php echo imgfile;?>/sponsor/pepe-the-frog-gif-6.gif" alt="">
            <p>CCU_Taiwan iGEM Team counts iGEM competition as a meaningful and challengeable project. During our iGEM journey, we want to give a massive thank you to everyone that giving us endless support, advice, and meanwhile professional teaching. Without those assists, we can't accomplish what we have gone through these days. We appreciate and are grateful for every single contribution given throughout our project.</p>
        </div>
    </div>
    </div> class="attribution_card justify-content-around">
        <div class="attribution_left">
            <div id="nav_note" class="attribution_nav" style="background-image:url(<?php echo imgfile;?>/note_untouch3.png")>
                <div class="attribution_nav_content">
                    <a href="#1" onclick="move_note2()"><div class="nav_control"><li>Primary Principal Investigator</li></div></a>
                    <a href="#2" onclick="move_note2()"><div class="nav_control"><li>Secondary Principal Investigators</li></div></a>
                    <a href="#3" onclick="move_note2()"><div class="nav_control"><li>Instuctor</li></div></a>
                    <a href="#4" onclick="move_note2()"><div class="nav_control"><li>Leaders</li></div></a>
                    <a href="#5" onclick="move_note2()"><div class="nav_control"><li>wet lab</li></div></a>
                    <a href="#6" onclick="move_note2()"><div class="nav_control"><li>dry lab</li></div></a>
                    <a href="#7" onclick="move_note2()"><div class="nav_control"><li>human practice</li></div></a>
                    <a href="#8" onclick="move_note2()"><div class="nav_control"><li>Advisors</li></div></a>
                </div>    
            </div>
        </div>
        <div class="attribution_right">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url(<?php echo imgfile;?>/tape.png")>Primary Principal Investigators</h1>
            </div>
            
        </div>
    </div>



    <?php include "./sub/footer.php"?>   
</body>
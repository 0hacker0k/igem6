<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/sponsor.css">
    <script src="<?php echo jsfile;?>/sponsor.js"></script>
</head>
<body onload="load_finish();locate_note();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/sponsor/pepe-the-frog-gif-6.gif" alt=""> 
    <div class="sponsor_body">
        <img class="sponsor_rope" style="--i:0" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <img class="sponsor_rope" style="--i:1" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <div class="sponsor_card" style="--i:0">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
        </div>
        <div class="sponsor_card" style="--i:1">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
        </div>
        <div class="sponsor_card" style="--i:2">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
        </div>
    </div>



   
    <?php include "./sub/footer.php"?>   
</body>
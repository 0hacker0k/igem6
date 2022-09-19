<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/sponsor.css">
</head>
<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/human/sponsors_banner.jpg" alt=""> 
    <div class="sponsor_body" data-id="sponsor_1" data-speed="2">
        <img class="sponsor_rope" style="--i:0" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <img class="sponsor_rope" style="--i:1" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <!-- a chunk -->
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/brand.png" alt="">
        </div>
        <!--  -->
    </div>
    <div class="sponsor_body" data-id="sponsor_2" data-speed="2">
        <img class="sponsor_rope" style="--i:0" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <img class="sponsor_rope" style="--i:1" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/brand.png" alt="">
        </div>
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/human/8e.png" alt="">
        </div>
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/human/5e.png" alt="">
        </div>
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/human/9a.jpg" alt="">
        </div>
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/human/7a.jpg" alt="">
        </div>
        <div class="sponsor_card">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/human/4a.jpg" alt="">
        </div>
    </div>
    <div class="sponsor_body" data-id="sponsor_3" data-speed="2">
        <img class="sponsor_rope" style="--i:0" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <img class="sponsor_rope" style="--i:1" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <!-- a chunk -->
        <div class="sponsor_card">
            <button type="button" class="sponsor_card_list_button" data-bs-toggle="modal" data-bs-target="#popup1">
                <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
                <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
                <div class="sponsor_logo" style="--width:50%">Campus Walking</div>
            </button>
        </div>
        
        <!--  -->
    </div>
    <?php
        $id=1;
        $sponsor_title="Campus Walking";
        $sponsor_content=
            "<p>台糖</p>
            <p>寶礦力</p>";
        include "./sub/popup_in_sponsor.php";
    ?>
   
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/sponsor.js"></script>
</body>
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/sponsor.css">
    <script src="<?php echo jsfile;?>/sponsor.js"></script>
</head>
<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/human/sponsors_banner.jpg" alt=""> 
    <div class="sponsor_body" data-id="0">
        <img class="sponsor_rope" style="--i:0" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <img class="sponsor_rope" style="--i:1" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <?php $sponsor_card_count=0; ?>

        <div class="sponsor_card" style="--i:<?php echo $sponsor_card_count++;?>">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/brand.png" alt="">
        </div>
    </div>
    <div class="sponsor_body" data-id="1">
        <img class="sponsor_rope" style="--i:0" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <img class="sponsor_rope" style="--i:1" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        <?php $sponsor_card_count=0; ?>

        <div class="sponsor_card" style="--i:<?php echo $sponsor_card_count++;?>">
            <img class="sponsor_clip" src="<?php echo imgfile;?>/sponsor/clip_white.png" alt="">
            <img class="sponsor_paper" src="<?php echo imgfile;?>/sponsor/paper_white.png" alt="">
            <img class="sponsor_logo" style="--width:50%" src="<?php echo imgfile;?>/brand.png" alt="">
        </div>
    </div>



    <script>
        move_init();
        card_moving();
        window.onresize=function(){
            screen_width=view_to_pixels("100vw");
            console.log(screen_width);
        };
    </script>
    <?php include "./sub/footer.php"?>   
</body>
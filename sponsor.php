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
    <div class="attribution_overview justify-content-around">
        <div class="col-7">
            <img class="sponsor_rope" src="<?php echo imgfile;?>/sponsor/rope.png" alt="">
        </div>
    </div>
    
    <div class="sponsor_paper">

    </div>
    <?php include "./sub/footer.php"?>   
</body>
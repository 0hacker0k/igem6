
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/medals/banner-medals.png" alt=""> 

    <div class="marge" style="--width:calc(2em + 2vh)"></div>      
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Medal</h1>
            </div>
            <p class="h13">
                Sliver medal
            </p>
            <div class="full_block">
                <div class="img_no" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/medals/igem666.png"/>
                </div>
            </div>
            <p>
                Thanks for being with us! Au revoir!
            </p>
        </div>
    </div>
    <div class="marge" style="--width:calc(2em + 2vh)"></div>      
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
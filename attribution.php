<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/attribution.css">
</head>

<body onload="load_finish()">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/human/attribution_banner.jpg" alt=""> 
    <div class="attribution_overview justify-content-around">
        <div class="col-7">
            <h1>Overview</h1>
            <p>CCU_Taiwan iGEM Team counts iGEM competition as a meaningful and challengeable project. During our iGEM journey, we want to give a massive thank you to everyone that giving us endless support, advice, and meanwhile professional teaching. Without those assists, we can't accomplish what we have gone through these days. We appreciate and are grateful for every single contribution given throughout our project.</p>
        </div>
    </div>
    <div class="attribution_card justify-content-around">
        <div class="attribution_left">
            <div class="attribution_nav" style="background-image:url(<?php echo imgfile;?>/note_untouch.png")>
                <div class="attribution_nav_content">
                    <div class="nav_control"><li>Primary Principal Investigator</li></div>
                    <div class="nav_control"><li>Secondary Principal Investigators</li></div>
                    <div class="nav_control"><li>Instuctor</li></div>
                    <div class="nav_control"><li>Leaders</li></div>
                    <div class="nav_control"><li>wet lab</li></div>
                    <div class="nav_control"><li>dry lab</li></div>
                    <div class="nav_control"><li>human practice</li></div>
                </div>    
            </div>
        </div>
        <div class="attribution_right">
            <div class="title-label-div">
                <h1 class="title-label" style="background-image:url(<?php echo imgfile;?>/tape.png")>Leader</h1>
            </div>
        </div>
        
        
    </div>
    <?php include "./sub/footer.php"?>   
</body>
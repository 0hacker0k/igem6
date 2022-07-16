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
    <br>
    <br>
    <br>
    <br>
  

    <div class="member_card row justify-content-around">
        <div class="col-7">
            <h1>Overview</h1>
            <p>CCU_Taiwan iGEM Team counts iGEM competition as a meaningful and challengeable project. During our iGEM journey, we want to give a massive thank you to everyone that giving us endless support, advice, and meanwhile professional teaching. Without those assists, we can't accomplish what we have gone through these days. We appreciate and are grateful for every single contribution given throughout our project.</p>
        </div>

        <div class="col-4 sticker" style="background-image:url(<?php echo imgfile;?>/note_untouch.png")>
            <ul>
                <button>Primary Principal Investigator</button>
                <button>Secondary Principal Investigators</button>
                <button>Instuctor</button>
                <button>Leaders</button>
                <button>wet lab</button>
                <button>dry lab</button>
                <button>human practice</button>
            </ul>
        </div>

        <h1 style="background-image:url(<?php echo imgfile;?>/tape.png")>Leader</h1>
    <?php include "./sub/footer.php"?>   
</body>
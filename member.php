<head>
  
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/member.css">
</head>

<body onload="load_finish()">

    <?php include "./sub/header.php"?>

    <?php include "sub/loading.php"?>

    <img class="full_size_image" src="<?php echo imgfile;?>/human/fullimage.jpg" alt="">

        

    </div> 

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="member_card row justify-content-around">

    <div class="col-7">
        <h1>Introduction</h1>
        <p>CCU_Taiwan is established in the year of 2017. Our team consists of twenty-one passionate students. We are a multidisciplinary team as our team members have different professional background from five departments.</p>

    </div>
    <h1>🐸🐨😢🥲🤣🤔🌱🐱😐🥺🐿😃🧀🥰🦊😏🥫🍠🤩</h1>
    
    <h1>Leader</h1>
    <div class="bulletin">
        <div id="carousel_member" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="a_group">
                        <div class="wet_lab_person" style="--id:1">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                        <div class="wet_lab_person" style="--id:2">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                        <div class="wet_lab_person" style="--id:3">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                        <div class="wet_lab_person" style="--id:4">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                        <div class="wet_lab_person" style="--id:5">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                        <div class="wet_lab_person" style="--id:6">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="a_group">
                        <div class="wet_lab_person" style="--x:1;--y:1">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                        <div class="wet_lab_person" style="--x:1;--y:2">
                            <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                <img class="person_img" src="<?php echo imgfile."/human/1a.jpg";?>" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_member" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_member" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <?php
        $id=1;
        $name="SI-RU, ZHOU";
        $job_title="Co-leader of Dry lab";
        $content="
        <p>
            <ul>
            <li>Department of Biomedical Science</li>
            <br>
            <li>16 personality: Campaigner</li>
            <br>
            <li>Meme Spreader</li>            
            </ul>
        </p>";
        $title_explain="Si-Ru always brings some snacks or drinks for our buddies. She takes care of not only dry lab, but all team members.";
        $popup_img="./img/human/1a.jpg";
        $popup_img_alt="";
        $person_title="#Progress procrastinator";
        $person_icon="🐸";
        include "./sub/popup.php";
    ?>
    <?php
        $id=2;
        $name="SI-RU, ZHOU";
        $job_title="Co-leader of Dry lab";
        $content="
        <p>
            <ul>
            <li>Department of Biomedical Science</li>
            <br>
            <li>16 personality: Campaigner</li>
            <br>
            <li>Meme Spreader</li>            
            </ul>
        </p>";
        $title_explain="Si-Ru always brings some snacks or drinks for our buddies. She takes care of not only dry lab, but all team members.";
        $popup_img="./img/human/1a.jpg";
        $popup_img_alt="";
        $person_title="#Progress procrastinator";
        $person_icon="🐸";
        include "./sub/popup.php";
    ?>
<?php include "./sub/footer.php"?>
</body>
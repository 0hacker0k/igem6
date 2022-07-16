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

    
        
        <div class="col-8 person">
            <h3>Cringe</h3>
        
            <div class="social">
            
            <?php
                $id=1;
                $name="Leader - Cringe";
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
                $person_img="./img/human/1a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/1e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>
            
            </div>
        </div>

      

        <div class="col-8 person">
            <h3>Yuan Chi</h3>
            <!-- <img class="person_img" src="./human/Yuan Chi Tsai.jpg" alt=""> -->
            
            <div class="social">
            <?php
                $id=2;
                $name="Co-Lead - Yuan Chi";
                $content="
                <p>
                <ul>
                    <li>Department of Mechanical Engineering</li>
                    <br>
                    <li>16 personality: Campaigner</li>
                    <br>
                    <li>Merit Reminder</li>            
                </ul>
                </p>";
                $person_img="./img/human/2a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/2e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>

            </div>
        </div>

        <div class="col-8 person">
        <h3>Yun Chi</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=3;
                $name="Co-Lead - Yun Chi";
                $content="
                <p>
                <ul>
                    <li>Department of Biomedical Science</li>
                    <br>
                    <li>16 personality: Defender</li>
                    <br>
                    <li>Paper Reader</li>            
                </ul>
                </p>";
                $person_img="./img/human/3a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/3e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>
            </div>
        </div>

            
        <h1>More Leaders</h1>

        <div class="col-8 person">
        <h3>162.8 boy</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=4;
                $name="Wet lab - 162.8 boy";
                $content="
                <p>
                <ul>
                    <li>Department of Biomedical Science</li>
                    <br>
                    <li>16 personality: Commander</li>
                    <br>
                    <li>Dry Lab Botherer</li>            
                </ul>
                </p>";
                $person_img="./img/human/4a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/4e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>

            </div>
        </div>

        <div class="col-8 person">
        <h3>sheep</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=5;
                $name="Dry lab - Sheep";
                $content="
                <p>
                <ul>
                    <li>Department of Computer Science and Information Engineering</li>
                    <br>
                    <li>16 personality: Mediator</li>
                    <br>
                    <li>Code Builder</li>            
                </ul>
                </p>";
                $person_img="./img/human/5a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/5e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>

            </div>
        </div>


        <!-- <h1>Dry Lab</h1> -->

        <div class="col-8 person">
        <h3>Tino</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=6;
                $name="Human Practice - Tino";
                $content="
                <p>
                <ul>
                    <li>Department of Psychology</li>
                    <br>
                    <li>16 personality: Mediator</li>
                    <br>
                    <li>Cheese Ganster</li>            
                </ul>
                </p>";
                $person_img="./img/human/6a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/6e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>
            </div>
        </div>

        <h1>Co-Leads</h1>

        <div class="col-8 person">
        <h3>Yoo Chen</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=7;
                $name="Wet lab - Yoo Chen";
                $content="
                <p>
                <ul>
                    <li>Department of Biomedical Science</li>
                    <br>
                    <li>16 personality: Adventurer</li>
                    <br>
                    <li>Labor Protecter</li>            
                </ul>
                </p>";
                $person_img="./img/human/7a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/7e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>
            </div>
        </div>

        <div class="col-8 person">
        <h3>SrRb</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=8;
                $name="Dry lab - SrRb";
                $content="
                <p>
                <ul>
                    <li>Department of Biomedical Science</li>
                    <br>
                    <li>16 personality: Entertainer</li>
                    <br>
                    <li>Food Orderer</li>            
                </ul>
                </p>";
                $person_img="./img/human/8a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/8e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>

            </div>
        </div>

        <div class="col-8 person">
        <h3>Yi Yun</h3>
            <!-- <img class="person_img" src="./human/Yun Chi Chiu.png" alt=""> -->
            <div class="social">
            <?php
                $id=9;
                $name="Human Practice - Yi Yun";
                $content="
                <p>
                <ul>
                    <li>Department of Biomedical Science</li>
                    <br>
                    <li>16 personality: Campaigner</li>
                    <br>
                    <li>Ha Ha Ha er</li>            
                </ul>
                </p>";
                $person_img="./img/human/9a.jpg";
                $person_img_alt="";
                $popup_img="./img/human/9e.png";
                $popup_img_alt="";
                include "./sub/popup.php";
            ?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include "./sub/footer.php"?>   
</body>
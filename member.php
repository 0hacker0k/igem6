<head>
  
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/member.css">
</head>

<body style="margin:0; padding:0; height:100vh;" onload="load_finish()">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/human/fullimage.jpg" alt="">
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
        <h1>Leader</h1>
        <div class="bulletin">
            <div id="carousel_member" class="carousel slide" data-bs-touch="false" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="leaders_title" style="--id:1">
                                <div class="member_portrait">
                                    Leaders
                                </div>
                            </div>
                            <div class="leaders_person" style="--id:2">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup1">
                                    <img class="person_img" src="<?php echo imgfile."/human/members001.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="leaders_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup2">
                                    <img class="person_img" src="<?php echo imgfile."/human/members002.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="leaders_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup3">
                                    <img class="person_img" src="<?php echo imgfile."/human/members003.jpg";?>" alt="">
                                </button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="wet_lab_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup4">
                                    <img class="person_img" src="<?php echo imgfile."/human/members004.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_title" style="--id:1">
                                <div class="member_portrait">
                                    Wet Lab
                                </div>
                            </div>
                            <div class="wet_lab_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup5">
                                    <img class="person_img" src="<?php echo imgfile."/human/members005.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:5">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup6">
                                    <img class="person_img" src="<?php echo imgfile."/human/members006.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:6">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup7">
                                    <img class="person_img" src="<?php echo imgfile."/human/members007.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:7">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup8">
                                    <img class="person_img" src="<?php echo imgfile."/human/members008.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:8">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup9">
                                    <img class="person_img" src="<?php echo imgfile."/human/members009.jpg";?>" alt="">
                                </button>
                            </div>                   
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="dry_lab_title" style="--id:1">
                                <div class="member_portrait">
                                    Dry Lab
                                </div>
                            </div>
                            <div class="dry_lab_person" style="--id:2">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup10">
                                    <img class="person_img" src="<?php echo imgfile."/human/members010.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="dry_lab_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup11">
                                    <img class="person_img" src="<?php echo imgfile."/human/members011.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="dry_lab_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup12">
                                    <img class="person_img" src="<?php echo imgfile."/human/members012.jpg";?>" alt="">
                                </button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="hp_person" style="--id:1">
                                <div class="member_portrait">
                                    Human Practice
                                </div>
                            </div>
                            <div class="hp_person" style="--id:2">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup13">
                                    <img class="person_img" src="<?php echo imgfile."/human/members013.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup14">
                                    <img class="person_img" src="<?php echo imgfile."/human/members014.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup15">
                                    <img class="person_img" src="<?php echo imgfile."/human/members015.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:5">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup16">
                                    <img class="person_img" src="<?php echo imgfile."/human/members016.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:6">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup17">
                                    <img class="person_img" src="<?php echo imgfile."/human/members017.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:7">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup18">
                                    <img class="person_img" src="<?php echo imgfile."/human/members018.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:8">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup19">
                                    <img class="person_img" src="<?php echo imgfile."/human/members019.jpg";?>" alt="">
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
            $name="Chia-Hsien Kung";
            $job_title="Team Leader";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Campaigner</li>
                <br>
                <li>Interest: Singing & watching short videos</li>            
                </ul>
            </p>";
            $title_explain="Chia-Hsieh always provides laughter for the team. Though there are different trivias that need to be dealt with, a meme is always a suitable cure for everyone.";
            $popup_img="./img/human/members001.jpg";
            $popup_img_alt="";
            $person_title="#MEME_SPREADER";
            $person_icon="🐸";
            include "./sub/popup.php";
        ?>
        <?php
            $id=2;
            $name="Yuan-Chi Tsai";
            $job_title="Co-leader of the team";
            $content="
            <p>
                <ul>
                <li>Department of Mechanical Engineering</li>
                <br>
                <li>16 personality: Protagonist</li>
                <br>
                <li>Interest: Enjoying music and movies</li>            
                </ul>
            </p>";
            $title_explain="Yuan-Chi often tries to understand others’ emotions and helps to clear the air.";
            $popup_img="./img/human/members002.jpg";
            $popup_img_alt="";
            $person_title="#DISPUTE_MEDIATOR";
            $person_icon="🐨";
            include "./sub/popup.php";
        ?>
        <?php
            $id=3;
            $name="Yun-Chi Chiu";
            $job_title="Co-leader of the team";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Defender</li>
                <br>
                <li>Interest: Reading & writing notes</li>            
                </ul>
            </p>";
            $title_explain="Yun-Chi tends to deal with her work at midnight and stays up late because  she has the highest efficiency during midnight.";
            $popup_img="./img/human/members003.jpg";
            $popup_img_alt="";
            $person_title="#MIDNIGHT_OVERWORKER";
            $person_icon="😢";
            include "./sub/popup.php";
        ?>
        <?php
            $id=4;
            $name="Ding-Hong Chang";
            $job_title="Leader of Wet Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Commander</li>
                <br>
                <li>Interest: Bothering Hao-Fang</li>            
                </ul>
            </p>";
            $title_explain="Ding-Hong has to get into the swing of every experiment and the content of lab work that we show on wiki. Thus, seldom does he sleep enough.";
            $popup_img="./img/human/members004.jpg";
            $popup_img_alt="";
            $person_title="#SLEEP_TERMINATOR";
            $person_icon="🍺";
            include "./sub/popup.php";
        ?>
        <?php
            $id=5;
            $name="Yu-Chen Huang";
            $job_title="Co-leader of Wet Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Adventurer</li>
                <br>
                <li>Interest: Watching 3D printer & playing board games</li>            
                </ul>
            </p>";
            $title_explain="Yu-Chen reminds everyone (especially the wet lab team members) to leave the lab on time and go back to sleep every day.";
            $popup_img="./img/human/members005.jpg";
            $popup_img_alt="";
            $person_title="#TIME_REMINDER";
            $person_icon="🤣";
            include "./sub/popup.php";
        ?>
        <?php
            $id=6;
            $name="Chen-Yu Wu";
            $job_title="Member of Wet Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Advocate</li>
                <br>
                <li>Interest: Making friends & Hanging out</li>            
                </ul>
            </p>";
            $title_explain="Chen-Yu always tries to make experiments more methodically, finishing experiments as soon as possible, asking members not to waste time.";
            $popup_img="./img/human/members006.jpg";
            $popup_img_alt="";
            $person_title="#TIME_CHASER";
            $person_icon="🤔";
            include "./sub/popup.php";
        ?>
        <?php
            $id=7;
            $name="Chi-Huan Zheng";
            $job_title="Member of Wet Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Consul</li>
                <br>
                <li>Interest: Listening to music & Playing volleyball</li>            
                </ul>
            </p>";
            $title_explain="As a wet lab member, Chi-Huan disappeared whole July because of the music performance with his orchestra members.";
            $popup_img="./img/human/members007.jpg";
            $popup_img_alt="";
            $person_title="#JULY_DIVER";
            $person_icon="🐱";
            include "./sub/popup.php";
        ?>
        <?php
            $id=8;
            $name="Zong-Ying He";
            $job_title="Member of Wet Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Mediator</li>
                <br>
                <li>Interest: Playing video games & Singing</li>            
                </ul>
            </p>";
            $title_explain="Zoin is always chasing after the other people's experiments to complete the experiment records.";
            $popup_img="./img/human/members008.jpg";
            $popup_img_alt="";
            $person_title="#EXPERIMENTS_RECORDER";
            $person_icon="🌱";
            include "./sub/popup.php";
        ?>
        <?php
            $id=9;
            $name="Bo-Qin Wu";
            $job_title="Member of Wet Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Adventurer</li>
                <br>
                <li>Interest: Cycling</li>            
                </ul>
            </p>";
            $title_explain="Bo-Qin edits over 80% of slides for wet lab, especially illustrations and animations.";
            $popup_img="./img/human/members009.jpg";
            $popup_img_alt="";
            $person_title="#ILLUSTRATION_GENERATOR";
            $person_icon="😐";
            include "./sub/popup.php";
        ?>
        <?php
            $id=10;
            $name="Chi-Yang Lin";
            $job_title="Leader of Dry Lab";
            $content="
            <p>
                <ul>
                <li>Department of Computer Science and Information Engineering</li>
                <br>
                <li>16 personality: Mediator</li>
                <br>
                <li>Interest: Trying something new</li>            
                </ul>
            </p>";
            $title_explain="Chi-Yang devoted his specialty in programming to make our wiki and web game perfect.";
            $popup_img="./img/human/members010.jpg";
            $popup_img_alt="";
            $person_title="#SOFTWARE_DEVELOPER";
            $person_icon="🥺";
            include "./sub/popup.php";
        ?>
        <?php
            $id=11;
            $name="Si-Ru Zhou";
            $job_title="Co-leader of Dry Lab";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Entertainer</li>
                <br>
                <li>Interest: Singing during meeting & Swimming</li>            
                </ul>
            </p>";
            $title_explain="Si-Ru always brings some snacks or drinks for our buddies. She takes care of not only the dry lab, but all the team members.";
            $popup_img="./img/human/members011.jpg";
            $popup_img_alt="";
            $person_title="#MEMBER_FEEDER";
            $person_icon="💍";
            include "./sub/popup.php";
        ?>
        <?php
            $id=12;
            $name="Hao-Fang Chan";
            $job_title="Member of Dry Lab";
            $content="
            <p>
                <ul>
                <li>Department of Mechanical Engineering</li>
                <br>
                <li>16 personality: Mediator</li>
                <br>
                <li>Interest: Taking a stroll</li>            
                </ul>
            </p>";
            $title_explain="Hao-Fang sometimes provokes the  dry lab co-leader for some stupid reasons. Therefore, he has to apologize to Si-Ru once a day.";
            $popup_img="./img/human/members012.jpg";
            $popup_img_alt="";
            $person_title="#CO-LEADER_PROVOKER";
            $person_icon="😃";
            include "./sub/popup.php";
        ?>
        <?php
            $id=13;
            $name="Hao-Yuan Cheng";
            $job_title="Leader of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Psychology</li>
                <br>
                <li>16 personality: Mediator</li>
                <br>
                <li>Interest: Bartending & Coding</li>            
                </ul>
            </p>";
            $title_explain="Hao-Yuan seldom finishes work before the deadline.";
            $popup_img="./img/human/members013.jpg";
            $popup_img_alt="";
            $person_title="#PROGRESS_PROCRASTINATOR";
            $person_icon="🧀";
            include "./sub/popup.php";
        ?>
        <?php
            $id=14;
            $name="Yi-Yun Lee";
            $job_title="Co-leader of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Campaigner</li>
                <br>
                <li>Interest: Making a bullet journal & enjoying music & trying new things</li>            
                </ul>
            </p>";
            $title_explain="Yi-Yun is always laughing. Hahahahahahahahahahaha.";
            $popup_img="./img/human/members014.jpg";
            $popup_img_alt="";
            $person_title="#ALL-TIME_LAUGHER";
            $person_icon="🥰";
            include "./sub/popup.php";
        ?>
        <?php
            $id=15;
            $name="Peng-Jen Chen";
            $job_title="Member of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Campaigner</li>
                <br>
                <li>Interest: Painting & Reading novel</li>            
                </ul>
            </p>";
            $title_explain="Peng-Jen created the character – <i> E. coli6 </i>.";
            $popup_img="./img/human/members015.jpg";
            $popup_img_alt="";
            $person_title="#E. COLI_INCUBATOR";
            $person_icon="🍠 ";
            include "./sub/popup.php";
        ?>
        <?php
            $id=16;
            $name="Guan-Chen Li";
            $job_title="Member of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Biomedical Sciences</li>
                <br>
                <li>16 personality: Protagonist</li>
                <br>
                <li>Interest: Playing guitar & reading</li>            
                </ul>
            </p>";
            $title_explain="Guan-Chen usually carries many members’ lunch or dinner to the lab.";
            $popup_img="./img/human/members016.jpg";
            $popup_img_alt="";
            $person_title="#FOOD_DELIVER";
            $person_icon="🥫";
            include "./sub/popup.php";
        ?>
        <?php
            $id=17;
            $name="Yu-Quan Chou";
            $job_title="Member of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Philosophy</li>
                <br>
                <li>16 personality: Campaigner</li>
                <br>
                <li>Interest: Enjoying free jazz</li>            
                </ul>
            </p>";
            $title_explain="Yu-Qian helps the team speak English better. I can teach you better!";
            $popup_img="./img/human/members017.jpg";
            $popup_img_alt="";
            $person_title="#ENGLISH_TEACHER";
            $person_icon="😏";
            include "./sub/popup.php";
        ?>
        <?php
            $id=18;
            $name="Jung-Hsuan Hsiao";
            $job_title="Member of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Philosophy</li>
                <br>
                <li>16 personality: Campaigner</li>
                <br>
                <li>Interest: Listening to music & Playing volleyball</li>            
                </ul>
            </p>";
            $title_explain="Jung-Hsuan often forgets to reply to messages.";
            $popup_img="./img/human/members018.jpg";
            $popup_img_alt="";
            $person_title="#MESSAGE_IGNORER";
            $person_icon="🦊";
            include "./sub/popup.php";
        ?>
        <?php
            $id=19;
            $name="Wei-Chun Fu";
            $job_title="Member of Human Practice";
            $content="
            <p>
                <ul>
                <li>Department of Business Administration</li>
                <br>
                <li>16 personality: Consul</li>
                <br>
                <li>Interest: Singing</li>            
                </ul>
            </p>";
            $title_explain="Wei-Chun holds a campus walking activity. Not just walking inside CCU campus, he has found his way to NCCU.";
            $popup_img="./img/human/members019.jpg";
            $popup_img_alt="";
            $person_title="#DANIEL_WALKER";
            $person_icon="🤩";
            include "./sub/popup.php";
        ?>
    </div>
<?php include "./sub/footer.php"?>
</body>
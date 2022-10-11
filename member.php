<head>
  
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/member.css">
</head>

<body style="margin:0; padding:0; height:100vh;" onload="load_finish()">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/human/banner-members.png" alt="">
    <div class="marge" style="--width:calc(3em + 5vh)"></div>

    <div class="member_card row justify-content-around">

        
        <div class="bulletin">
            <div id="carousel_member" class="carousel slide" data-bs-touch="false" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carousel_member" data-bs-slide-to="6" aria-label="Slide 7"></button>
                </div>
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
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members001.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="leaders_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup2">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members002.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="leaders_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup3">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members003.jpg";?>" alt="">
                                </button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="wet_lab_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup4">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members004.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_title" style="--id:1">
                                <div class="member_portrait">
                                    Wet Lab
                                </div>
                            </div>
                            <div class="wet_lab_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup5">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members005.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:5">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup6">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members006.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:6">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup7">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members007.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:7">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup8">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members008.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="wet_lab_person" style="--id:8">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup9">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members009.jpg";?>" alt="">
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
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members010.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="dry_lab_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup11">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members011.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="dry_lab_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup12">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members012.jpg";?>" alt="">
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
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members013.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup14">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members014.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup15">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members015.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:5">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup16">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members016.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:6">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup17">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members017.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:7">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup18">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members018.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="hp_person" style="--id:8">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup19">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members019.jpg";?>" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="primary_title" style="--id:1">
                                <div class="member_portrait">
                                    Primary Principal Investigator
                                </div>
                            </div>
                            <div class="primary_person" style="--id:2">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup20">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members202.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="primary_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup21">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members201.jpg";?>" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="secondary_title" style="--id:1">
                                <div class="member_portrait">
                                    Secondary Principal Investigators
                                </div>
                            </div>
                            <div class="secondary_person" style="--id:2">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup22">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members301.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="secondary_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup23">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members302.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="secondary_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup24">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members303.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="secondary_person" style="--id:5">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup25">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members304.jpg";?>" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <div class="a_group">
                            <div class="instructors_title" style="--id:1">
                                <div class="member_portrait">
                                    Instructors
                                </div>
                            </div>
                            <div class="instructors_person" style="--id:2">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup26">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members401.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="instructors_person" style="--id:3">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup27">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members402.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="instructors_person" style="--id:4">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup28">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members403.jpg";?>" alt="">
                                </button>
                            </div>
                            <div class="instructors_person" style="--id:5">
                                <button type="button" class="member_portrait" data-bs-toggle="modal" data-bs-target="#popup29">
                                    <img class="person_img lazy" data-src="<?php echo imgfile."/human/members404.jpg";?>" alt="">
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
            $name="Chia-Hsieh Kung";
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
            $title_explain="Chia-Hsieh always provides the laughter for the team. Though there are different trivia that need to be dealt with, a meme is always a suitable cure for everyone.";
            $popup_img="/human/members101.jpg";
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
            $popup_img="/human/members102.jpg";
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
            $title_explain="Yun-Chi tends to deal with her work at midnight and stays up late because she has the highest efficiency during midnight.";
            $popup_img="/human/members103.jpg";
            $popup_img_alt="";
            $person_title="#MIDNIGHT_OVERWORKER";
            $person_icon="😢";
            include "./sub/popup.php";
        ?>
        <?php
            $id=4;
            $name="Ting-Hung Chang";
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
            $title_explain="Ting-Hung has to get into the swing of every experiment and the content of lab work that we show on the wiki. Thus, seldom does he sleep enough.";
            $popup_img="/human/members104.jpg";
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
            $popup_img="/human/members105.jpg";
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
            $title_explain="Chen-Yu always tries to make experiments more methodically, finishing experiments as soon as possible, and asking members not to waste time.";
            $popup_img="/human/members106.jpg";
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
            $title_explain="As a wet lab member, Chi-Huan disappeared for the whole of July because of the music performance with his orchestra members.";
            $popup_img="/human/members107.jpg";
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
            $title_explain="Zong-Ying is always chasing after other people's experiments to complete the experiment records.";
            $popup_img="/human/members108.jpg";
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
            $title_explain="Bo-Qin edits over 80% of slides for the wet lab, especially illustrations and animations.";
            $popup_img="/human/members109.jpg";
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
            $title_explain="Chi-Yang devoted his speciality to programming to make our wiki and web game perfect.";
            $popup_img="/human/members110.jpg";
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
            $title_explain="Si-Ru always brings some snacks or drinks for our buddies. She takes care of not only the dry lab but all the team members.";
            $popup_img="/human/members111.jpg";
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
            $title_explain="Hao-Fang sometimes provokes the dry lab co-leader for some stupid reasons. Therefore, he has to apologize to Si-Ru once a day.";
            $popup_img="/human/members112.jpg";
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
            $popup_img="/human/members113.jpg";
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
            $popup_img="/human/members114.jpg";
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
            $title_explain="Peng-Jen created the <i>E. coli</i> character–PACO .";
            $popup_img="/human/members115.jpg";
            $popup_img_alt="";
            $person_title="#E. COLI_INCUBATOR";
            $person_icon="🍠 ";
            include "./sub/popup.php";
        ?>
        <?php
            $id=16;
            $name="Kuan-Chen Lee";
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
            $popup_img="/human/members116.jpg";
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
            $popup_img="/human/members117.jpg";
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
            $popup_img="/human/members118.jpg";
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
            $popup_img="/human/members119.jpg";
            $popup_img_alt="";
            $person_title="#DANIEL_WALKER";
            $person_icon="🤩";
            include "./sub/popup.php";
        ?>
        <?php
            $id=20;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: Transgenic mice (pancreatic adenocarcinoma, colorectal cancer), Cancer stem cell, Cancer cell biology, Stem cell
            </p>";
            $title_explain="Assistant Professor, Department of Biomedical Sciences";
            $popup_img="/human/members202.jpg";
            $popup_img_alt="";
            $person_title="Ching-Chieh Weng";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=21;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: Stem cell biology, Cellular biology, Molecular biology
            </p>";
            $title_explain="Assistant Professor, Department of Biomedical Sciences";
            $popup_img="/human/members201.jpg";
            $popup_img_alt="";
            $person_title="Chun-Ying Yu";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=22;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: Biochemistry, Biophysics, Molecular Modeling
            </p>";
            $title_explain="Professor, Department of Biomedical Sciences";
            $popup_img="/human/members301.jpg";
            $popup_img_alt="";
            $person_title="Cheng-I Lee";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=23;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: Cancer Epigenomics, Bioinformatics
            </p>";
            $title_explain="Professor, Department of Biomedical Sciences";
            $popup_img="/human/members302.jpg";
            $popup_img_alt="";
            $person_title="Wing-Yan Chan";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=24;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: RNA Molecular Biology, Yeast Genetics
            </p>";
            $title_explain="Associate professor, Department of Biomedical Sciences";
            $popup_img="/human/members303.jpg";
            $popup_img_alt="";
            $person_title="Hau-Ren Chen";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=25;
            $name="Name";
            $job_title="Job title";
            $content="
            <p>
                Specialties: Magnetic resonance spectroscopy and imaging, Physical chemistry, and Biophysics
            </p>";
            $title_explain="Assistant Professor, Department of Chemistry and Biochemistry";
            $popup_img="/human/members304.jpg";
            $popup_img_alt="";
            $person_title="Eugene C. Lin";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=26;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: Advanced English Technical Writing
            </p>";
            $title_explain="Assistant Professor, Department of Electrical Engineering";
            $popup_img="/human/members401.jpg";
            $popup_img_alt="";
            $person_title="Gerald Rau";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=27;
            $name="";
            $job_title="";
            $content="
            <p>
                Specialties: Sociolinguistics, Austronesian linguistics, Applied linguistics
            </p>";
            $title_explain="Professor, Graduate Institute of Linguistics";
            $popup_img="/human/members402.jpg";
            $popup_img_alt="";
            $person_title="Victoria Rau";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=28;
            $name="";
            $job_title="";
            $content="
            <p>
            Specialties: Lab & Factory Management and Equipment Maintenance, Occupational Safety and Health Management
            </p>";
            $title_explain="Adjunct Assistant Professor, Department of Mechanical Engineering";
            $popup_img="/human/members403.jpg";
            $popup_img_alt="";
            $person_title="Hsiang-Chiu Wu";
            $person_icon="";
            include "./sub/popup.php";
        ?>
        <?php
            $id=29;
            $name="";
            $job_title="";
            $content="
            <p>
                Dr. Chang Chang helps sharpen our project and gives us directions for experimental design and entrepreneurship.
            </p>";
            $title_explain="Chief Executive Officer, Trade Wind Biotech Co., Ltd. (TWBIO)";
            $popup_img="/human/members404.jpg";
            $popup_img_alt="";
            $person_title="Lance Chang";
            $person_icon="";
            include "./sub/popup.php";
        ?>
    </div>
<?php include "./sub/footer.php"?>
</body>
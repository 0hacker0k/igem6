<?php
            function change_attr_icon($i){
                switch($i){
                    case 1:
                        return "leadership";
                        break;
                    case 2:
                        return "presentation";
                        break;
                    case 3:
                        return "slides_editor";
                        break;
                    case 4:
                        return "experiment";
                        break;
                    case 5:
                        return "software";
                        break;
                    case 6:
                        return "hardware";
                        break;
                    case 7:
                        return "measurement";
                        break;
                    case 8:
                        return "education";
                        break;
                    case 9:
                        return "wiki";
                        break;
                    case 10:
                        return "ihp";
                        break;
                    case 11:
                        return "collaboration";
                        break;
                    default:
                        return $i;
                }
            }
            ?>
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/attribution.css">
    <script src="<?php echo jsfile;?>/attribution.js"></script>
</head>

<body onload="load_finish();locate_note();">
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
        <div id="attribution_left" class="attribution_left">
            <div id="nav_note" class="attribution_nav" style="background-image:url('<?php echo imgfile;?>/note_untouch3.png')">
                <div class="attribution_nav_content">
                    <a href="#1" onclick="move_note2()"><div class="nav_control nav_control_a"><li>Primary Principal Investigator</li></div></a>
                    <a href="#2" onclick="move_note2()"><div class="nav_control nav_control_a"><li>Secondary Principal Investigators</li></div></a>
                    <a href="#3" onclick="move_note2()"><div class="nav_control nav_control_a"><li>Instuctor</li></div></a>
                    <a href="#4" onclick="move_note2()"><div class="nav_control nav_control_b"><li>Leaders</li></div></a>
                    <a href="#5" onclick="move_note2()"><div class="nav_control nav_control_b"><li>Wet lab</li></div></a>
                    <a href="#6" onclick="move_note2()"><div class="nav_control nav_control_b"><li>Dry lab</li></div></a>
                    <a href="#7" onclick="move_note2()"><div class="nav_control nav_control_b"><li>Human practice</li></div></a>
                    <a href="#8" onclick="move_note2()"><div class="nav_control nav_control_a"><li>Advisors</li></div></a>
                </div>    
            </div>
        </div>
        <div class="attribution_right">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Primary Principal Investigators</h1>
            </div>
            <?php
                $name="Ching-Chieh Weng";
                $photo="/attributions/attributions101.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Biomedical Science Institute, National Sun Yat-sen University</div>Aka ???????????????";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chun-Ying Yu";
                $photo="/attributions/attributions102.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Molecular Medicine, National Taiwan University</div>Dr. Yu helps team members to establish the whole vision, monitors the team process, and provides consulting on Wet lab experiments and HP activities.";
                include "sub/attribution_card.php";
            ?>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Secondary Principal Investigators</h1>
            </div>
            <?php
                $name="Cheng-I Lee";
                $photo="/attributions/attributions201.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Biophysical Chemistry, Yale University.</div>Dr. Lee builds up the laboratory and assists the executive affairs.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Michael Chan";
                $photo="/attributions/attributions202.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Anatomical and Cellular Pathology, The Chinese University of Hong Kong</div>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hau-Ren Chen";
                $photo="/attributions/attributions203.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Microbial Immunity, National Yang-Ming University</div>Dr. Chen gives advice on experimental design, and instructs the wet lab experiments.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Eugene C. Lin";
                $photo="/attributions/attributions204.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Chemistry and Biochemistry, University of California</div>Dr. Lin helps team members to sharpen the original ideas, gives advice on dry lab experimental designs, instructs and provides technical resources of modeling.";
                include "sub/attribution_card.php";
            ?>
            <div id="3" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Instructors</h1>
            </div>
            <?php
                $name="Gerald Rau";
                $photo="/attributions/attributions301.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Plant Breeding, Cornell University</div>Dr. Rau gave comments, corrections, and suggestions on the monthly team presentations, video scripts, picture book, and other English materials.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Victoria Rau";
                $photo="/attributions/attributions302.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Linguistics, Cornell University</div>Dr. Rau gave comments, corrections, and suggestions on the monthly team presentations, video scripts, picture book, and other English materials.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hsiang-Chiu Wu";
                $photo="/attributions/attributions303.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Ph.D. in Electronics Engineering, National Tsing Hua University</div>";
                include "sub/attribution_card.php";
            ?>
            <div id="4" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Leaders</h1>
            </div>
            <?php
                $name="Chia-Hsien Kung";
                $photo="/attributions/attributions001.jpg";
                $icon1="1";
                $icon2="presentation";
                $icon3="";
                $content="Team leader: Responsible for deciding the team???s target, integrating and communicating among groups, and team representative to other teams.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yuan-Chi Tsai";
                $photo="/attributions/attributions002.jpg";
                $icon1="leadership";
                $icon2="experiment";
                $icon3="hardware";
                $content="Team Co-leader: Responsible for communication between wet lab and dry lab. Performing part of the protein expression in the wet lab group, and designing machines in the dry lab group.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yun-Chi Chiu";
                $photo="/attributions/attributions003.jpg";
                $icon1="presentation";
                $icon2="experiment";
                $icon3="ihp";
                $content="Team Co-leader: Responsible for communication between wet lab and human practice. Designing cloning methods in the wet lab group, and assisting social media, IHP and open lab in the human practice group.";
                include "sub/attribution_card.php";
            ?>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Wet Lab</h1>
            </div>
            <?php
                $name="Ding-Hong Chang";
                $photo="/attributions/attributions004.jpg";
                $icon1="leadership";
                $icon2="presentation";
                $icon3="experiment";
                $content="Wet Lab leader: Responsible for cloning design, scheduling experiments, and coordinating with other groups.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yu-Chen Huang";
                $photo="/attributions/attributions005.jpg";
                $icon1="experiment";
                $icon2="wiki";
                $icon3="education";
                $content="Wet Lab co-leader: Assisting group leader, and responsible for the protein expression of <i>pfa B</i>, <i>pfa C</i>, and <i>pfa E</i> genes.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chen-Yu Wu";
                $photo="/attributions/attributions006.jpg";
                $icon1="experiment";
                $icon2="";
                $icon3="";
                $content="Responsible for the protein expression of <i>pfa A</i> and <i>pfa D</i> genes.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chi-Huan Zheng";
                $photo="/attributions/attributions007.jpg";
                $icon1="presentation";
                $icon2="experiment";
                $icon3="";
                $content="Responsible for protein expression of <i>pfa A</i>, and <i>pfa  D</i> genes";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Zong-Ying He";
                $photo="/attributions/attributions008.jpg";
                $icon1="experiment";
                $icon2="wiki";
                $icon3="";
                $content="Responsible for protein expression of <i>pfa B</i>, <i>pfa  C</i>, and <i>pfa E</i> genes";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Bo-Qin Wu";
                $photo="/attributions/attributions009.jpg";
                $icon1="slides_editor";
                $icon2="experiment";
                $icon3="";
                $content="Responsible for DHA detection and the protein expression of <i>pfa B</i>, <i>pfa C</i>, and <i>pfa E</i> genes.";
                include "sub/attribution_card.php";
            ?>
            <div id="6" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Dry Lab</h1>
            </div>
            <?php
                $name="Chi-Yang Lin";
                $photo="/attributions/attributions010.jpg";
                $icon1="leadership";
                $icon2="software";
                $icon3="hardware";
                $content="Dry lab leader: Responsible for coordinating with other groups and coding the web game, wiki, as well as programs of the machine.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Si-Ru Zhou";
                $photo="/attributions/attributions011.jpg";
                $icon1="leadership";
                $icon2="measurement";
                $icon3="wiki";
                $content="Dry lab co-leader: Responsible for art designing of wiki, team logo, and social media.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hao-Fang Chan";
                $photo="/attributions/attributions012.jpg";
                $icon1="hardware";
                $icon2="measurement";
                $icon3="wiki";
                $content="Responsible for designing and establishing the machine.";
                include "sub/attribution_card.php";
            ?>
            <div id="7" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Human Practice</h1>
            </div>
            <?php
                $name="Hao-Yuan Cheng";
                $photo="/attributions/attributions013.jpg";
                $icon1="leadership";
                $icon2="software";
                $icon3="education";
                $content="Human practice leader: Responsible for coordinating with other groups and designing the web game.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yi-Yun Lee";
                $photo="/attributions/attributions014.jpg";
                $icon1="presentation";
                $icon2="slides_editor";
                $icon3="education";
                $content="Human practice co-leader: Responsible for holding Open Lab and fundraising.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Peng-Jen Chen";
                $photo="/attributions/attributions015.jpg";
                $icon1="wiki";
                $icon2="";
                $icon3="";
                $content="Responsible for most of the art illustrations.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Guan-Chen Li";
                $photo="/attributions/attributions016.jpg";
                $icon1="wiki";
                $icon2="";
                $icon3="";
                $content="Responsible for designing and directing the promotion video.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yu-Quan Chou";
                $photo="/attributions/attributions017.jpg";
                $icon1="wiki";
                $icon2="ihp";
                $icon3="collaboration";
                $content="Responsible for IHP projects.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Jung-Hsuan Hsiao";
                $photo="/attributions/attributions018.jpg";
                $icon1="education";
                $icon2="ihp";
                $icon3="collaboration";
                $content="Responsible for collaboration and marketing.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Wei-Chun Fu";
                $photo="/attributions/attributions019.jpg";
                $icon1="education";
                $icon2="";
                $icon3="";
                $content="Responsible for holding campus walking.";
                include "sub/attribution_card.php";
            ?>
            <div id="8" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Advisors</h1>
            </div>
            <?php
                $name="Chun-Kai Li";
                $photo="/attributions/attributions401.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hong-Fu Liao";
                $photo="/attributions/attributions402.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chia-Chia Tsai";
                $photo="/attributions/attributions403.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Shi-Jie Nga";
                $photo="/attributions/attributions404.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="";
                include "sub/attribution_card.php";
            ?>
        </div>
    </div>
    <?php include "./sub/footer.php"?>   
</body>
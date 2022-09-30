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
            <div id="nav_note" class="attribution_nav" style="background-image:url('<?php echo imgfile;?>/note_untouch.png')">
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
                $content="<div class='graduate'>Assistant Professor, Department of Biomedical Sciences</div>An essential role in building up the team. Dr. Weng guided us to consider the larger picture and story behind our concept, managed team schedules, and assisted in organizing human practice events.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chun-Ying Yu";
                $photo="/attributions/attributions102.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Assistant Professor, Department of Biomedical Sciences</div>An essential role in building up the team. Dr. Yu contributed to the experimental design, instructed safety requirements, and provided consulting on wet lab experiments and human practice events.";
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
                $content="<div class='graduate'>Professor, Department of Biomedical Sciences</div>Dr. Lee shared her experience and reviewed the technicalities.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Wing-Yan Chan";
                $photo="/attributions/attributions202.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Professor, Department of Biomedical Sciences</div>Dr. Chan provided support for the team concerning judging issues.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hau-Ren Chen";
                $photo="/attributions/attributions203.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Associate professor, Department of Biomedical Sciences</div>Dr. Chen gave insightful advises on our experimental designs and project feasibility.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Eugene C. Lin";
                $photo="/attributions/attributions204.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Assistant Professor, Department of Chemistry and Biochemistry</div>Dr. Lin helped us in evaluating the viability of our initial ideas and advised on dry lab hardware designs.";
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
                $content="<div class='graduate'>Assistant Professor, Department of Electrical Engineering</div>Dr. Rau instructed and reviewed our monthly team presentation, and gave suggestions on our team wiki, team poster, and promotion video.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Victoria Rau";
                $photo="/attributions/attributions302.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Professor, Graduate Institute of Linguistics</div>Dr. Rau instructed and reviewed our monthly team presentation, and gave suggestions on our team wiki, team poster, and promotion video.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hsiang-Chiu Wu";
                $photo="/attributions/attributions303.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Adjunct Assistant Professor, Department of Mechanical Engineering</div>Dr. Wu instructed the overall hardware development, including creating technical drawings, essential machining skills and machine design.";
                include "sub/attribution_card.php";
            ?>
            <div id="4" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Leaders</h1>
            </div>
            <?php
                $name="Chia-Hsieh Kung";
                $photo="/attributions/attributions001.jpg";
                $icon1="leadership";
                $icon2="presentation";
                $icon3="ihp";
                $content="Team leader: 
                <li>The team representative in external activities.</li>
                <li>Responsible for determining the team’s target, integrating all groups, and coordinating the whole project.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yuan-Chi Tsai";
                $photo="/attributions/attributions002.jpg";
                $icon1="leadership";
                $icon2="presentation";
                $icon3="hardware";
                $content="Team Co-leader: 
                <li>Bridge between wet lab and dry lab.</li>
                <li>Responsible for designing plasmid, and establishing the hardware.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yun-Chi Chiu";
                $photo="/attributions/attributions003.jpg";
                $icon1="experiment";
                $icon2="ihp";
                $icon3="";
                $content="Team Co-leader: 
                <li>Bridge between wet lab and human practice.</li>
                <li>Responsible for designing the gene expression, assisting social media, IHP, fundraising and Open Lab activity.</li>";
                include "sub/attribution_card.php";
            ?>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Wet Lab</h1>
            </div>
            <?php
                $name="Ting-Hung Chang";
                $photo="/attributions/attributions004.jpg";
                $icon1="leadership";
                $icon2="presentation";
                $icon3="experiment";
                $content="Wet Lab leader: 
                <li>Responsible for scheduling the experiment and coordinating with other groups.</li>
                <li>Responsible for cloning pSTV28- <i>pfa B</i> - <i>pfa C</i> - <i>pfa E</i> and the protein expression.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yu-Chen Huang";
                $photo="/attributions/attributions005.jpg";
                $icon1="presentation";
                $icon2="experiment";
                $icon3="education";
                $content="Wet Lab co-leader: 
                <li>Assisting wet Lab leader.</li>
                <li>Responsible for cloning pSTV28- <i>pfa B</i> - <i>pfa C</i> - <i>pfa E</i> and the protein expression.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chen-Yu Wu";
                $photo="/attributions/attributions006.jpg";
                $icon1="experiment";
                $icon2="";
                $icon3="";
                $content="Responsible for cloning pColdI - <i>pfa A</i> - <i>pfa D</i> and the protein expression.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chi-Huan Zheng";
                $photo="/attributions/attributions007.jpg";
                $icon1="";
                $icon2="experiment";
                $icon3="";
                $content="Responsible for cloning pET28a - <i>AccBC</i> - <i>AccD1E</i> and the protein expression.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Zong-Ying He";
                $photo="/attributions/attributions008.jpg";
                $icon1="experiment";
                $icon2="wiki";
                $icon3="";
                $content="<li>Responsible for cloning pET28a - <i>AccBC</i> - <i>AccD1E</i> and the protein expression.</li>
                <li>Responsible for triple antibiotics selection.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Bo-Qin Wu";
                $photo="/attributions/attributions009.jpg";
                $icon1="slides_editor";
                $icon2="experiment";
                $icon3="";
                $content="Responsible for cloning pColdI - <i>pfa A</i> - <i>pfa D</i> and the protein expression.";
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
                $content="Dry lab leader: 
                <li>Responsible for coordinating with other groups and coding the web game, wiki, as well as programs of the machine.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Si-Ru Zhou";
                $photo="/attributions/attributions011.jpg";
                $icon1="leadership";
                $icon2="wiki";
                $icon3="collaboration";
                $content="Dry lab co-leader: 
                <li>Responsible for art designing of team wiki and team logo, and proofreading the word contents of wiki and social media.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hao-Fang Chan";
                $photo="/attributions/attributions012.jpg";
                $icon1="hardware";
                $icon2="wiki";
                $icon3="";
                $content="Responsible for establishing the hardware and creating the animations.";
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
                $content="Human practice leader: 
                <li>Responsible for planning the structure of human practice works, coordinating with other groups and designing the web game.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yi-Yun Lee";
                $photo="/attributions/attributions014.jpg";
                $icon1="slides_editor";
                $icon2="education";
                $icon3="wiki";
                $content="Human practice co-leader: 
                <li>Responsible for planning the structure of human practice works, holding Open Lab and fundraising.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Peng-Jen Chen";
                $photo="/attributions/attributions015.jpg";
                $icon1="wiki";
                $icon2="";
                $icon3="";
                $content="Responsible for most of the art illustrations and managing the social media accounts.";
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
                $icon1="presentation";
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
                $content="<div class='graduate'>Department of Biomedical Sciences</div>He instructed web lab experiments and part registry, and assisted us in Open Lab activity.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hong-Fu Liao";
                $photo="/attributions/attributions402.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Department of Chemical Engineering</div>He offered suggestions for the project's early brainstorming session.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chia-Chia Tsai";
                $photo="/attributions/attributions403.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Department of Biomedical Sciences</div>She gave helpful advice on team organization and external communication.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Shi-Jie Nga";
                $photo="/attributions/attributions404.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Department of Psychology</div>She gave helpful advice on team organization and external communication.";
                include "sub/attribution_card.php";
            ?>
        </div>
    </div>
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/attribution.js"></script>  
</body>
<?php
            function change_attr_icon($i){
                switch($i){
                    case "原本的名字":
                        return "要改成的名字";
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
    <img class="full_size_image" src="<?php echo imgfile;?>/attributions/banner-attributions.png" alt=""> 
    
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
                    <a href="#9" onclick="move_note2()"><div class="nav_control nav_control_a"><li>Special thanks</li></div></a>
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
                $content="<div class='graduate'>Assistant Professor, Department of Biomedical Sciences</div>Dr. Weng guided us to consider the larger picture and story behind our concept, managed team schedules, and assisted in organizing human practice events.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chun-Ying Yu";
                $photo="/attributions/attributions102.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Assistant Professor, Department of Biomedical Sciences</div>Dr. Yu contributed to the experimental design, instructed safety requirements, and provided consulting on wet lab experiments and human practice events.";
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
                $content="<div class='graduate'>Professor, Department of Biomedical Sciences</div>Dr. Lee shared her experience with past iGEM teams and reviewed the technical issues.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Wing-Yan Chan";
                $photo="/attributions/attributions202.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Professor, Department of Biomedical Sciences</div>Dr. Chan provided support for the team concerning judging practices.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hau-Ren Chen";
                $photo="/attributions/attributions203.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Associate professor, Department of Biomedical Sciences</div>Dr. Chen gave insightful advice on our experimental design and project feasibility.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Eugene C. Lin";
                $photo="/attributions/attributions204.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Assistant Professor, Department of Chemistry and Biochemistry</div>Dr. Lin helped us evaluate the viability of our initial ideas and advised on dry lab hardware designs.";
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
                $content="<div class='graduate'>Assistant Professor, Department of Electrical Engineering</div>Dr. G. Rau instructed and reviewed our monthly team presentation, and made corrections on the English of our team wiki, team poster, and promotion video.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Victoria Rau";
                $photo="/attributions/attributions302.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Professor, Graduate Institute of Linguistics</div>Dr. V. Rau instructed and reviewed our monthly team presentation, and gave suggestions on our team wiki, team poster, and promotion video.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hsiang-Chiu Wu";
                $photo="/attributions/attributions303.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Adjunct Assistant Professor, Department of Mechanical Engineering</div>Dr. Wu instructed us in hardware development, including creating technical drawings, essential machining skills and machine design.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Lance Chang";
                $photo="/attributions/attributions304.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Chief Executive Officer, Trade Wind Biotech Co., Ltd. (TWBIO)</div>Dr. Chang offered invaluable advice on our presentation and advised us on what types of products are feasible with our project.";
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
                <li>Responsible for designing plasmid, and developing the hardware.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yun-Chi Chiu";
                $photo="/attributions/attributions003.jpg";
                $icon1="experiment";
                $icon2="ihp";
                $icon3="education";
                $content="Team Co-leader: 
                <li>Bridge between wet lab and human practice.</li>
                <li>Responsible for designing the gene expression, assisting with social media, IHP, fundraising and Open Lab activity.</li>";
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
                <li>Responsible for cloning pSTV28- <i>pfa B</i> - <i>pfa C</i> - <i>pfa E</i> and their protein expression.</li>
                <li>Responsible for pET28a - <i>AccBC</i> - <i>AccD1E</i> protein expression.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yu-Chen Huang";
                $photo="/attributions/attributions005.jpg";
                $icon1="presentation";
                $icon2="experiment";
                $icon3="education";
                $content="Wet Lab co-leader: 
                <li>Assisting wet lab leader.</li>
                <li>Responsible for cloning pSTV28- <i>pfa B</i> - <i>pfa C</i> - <i>pfa E</i> and their protein expression.</li>
                <li>Responsible for pET28a - <i>AccBC</i> - <i>AccD1E</i> protein expression.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chen-Yu Wu";
                $photo="/attributions/attributions006.jpg";
                $icon1="experiment";
                $icon2="";
                $icon3="";
                $content="Responsible for cloning pColdI - <i>pfa A</i> - <i>pfa D</i> and their protein expression.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chi-Huan Zheng";
                $photo="/attributions/attributions007.jpg";
                $icon1="";
                $icon2="experiment";
                $icon3="";
                $content="Responsible for cloning pET28a - <i>AccBC</i> - <i>AccD1E</i> and their protein expression.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Zong-Ying He";
                $photo="/attributions/attributions008.jpg";
                $icon1="experiment";
                $icon2="wiki";
                $icon3="";
                $content="<li>Responsible for cloning pET28a - <i>AccBC</i> - <i>AccD1E</i>.</li>
                <li>Responsible for triple antibiotic selection.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Bo-Qin Wu";
                $photo="/attributions/attributions009.jpg";
                $icon1="slides-editor";
                $icon2="experiment";
                $icon3="";
                $content="Responsible for cloning pColdI - <i>pfa A</i> - <i>pfa D</i>.";
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
                <li>Responsible for coordinating with other groups and coding the web game, wiki, as well as programing of the machine.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Si-Ru Zhou";
                $photo="/attributions/attributions011.jpg";
                $icon1="leadership";
                $icon2="wiki";
                $icon3="collaboration";
                $content="Dry lab co-leader: 
                <li>Responsible for art designing of team wiki and team logo, and proofreading the contents of wiki and social media.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hao-Fang Chan";
                $photo="/attributions/attributions012.jpg";
                $icon1="hardware";
                $icon2="wiki";
                $icon3="";
                $content="Responsible for developing the hardware and creating the animations.";
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
                <li>Responsible for planning the structure of human practice activities, coordinating with other groups and designing the web game.</li>";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Yi-Yun Lee";
                $photo="/attributions/attributions014.jpg";
                $icon1="slides-editor";
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
                $name="Kuan-Chen Lee";
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
                $content="Responsible for campus walking activity.";
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
                $content="<div class='graduate'>Department of Biomedical Sciences</div>Mr. Li instructed us with web lab experiments and part registry, and assisted us in the Open Lab activity.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Hong-Fu Liao";
                $photo="/attributions/attributions402.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Department of Chemical Engineering</div>Mr. Liao offered suggestions during the project's early brainstorming session.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Chia-Chia Tsai";
                $photo="/attributions/attributions403.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Department of Biomedical Sciences</div>Ms. Tsai gave helpful advice on team organization and external communication.";
                include "sub/attribution_card.php";
            ?>
            <?php
                $name="Shi-Jie Nga";
                $photo="/attributions/attributions404.jpg";
                $icon1="";
                $icon2="";
                $icon3="";
                $content="<div class='graduate'>Department of Psychology</div>Ms. Nga gave helpful advice on team organization and external communication.";
                include "sub/attribution_card.php";
            ?>
            <div id="9" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Special Thanks</h1>
            </div>
            <div class="card" style="flex-direction: column;">
                <div class="special_thanks">
                    <?php
                        $name="Zhang-Hua Fong";
                        $job_title="President, National Chung Cheng University";
                        $introdution="President Fong provided financial support for the team registration fee.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Hsien-Bin Huang";
                        $job_title="Professor, Department of Biomedical Sciences, National Chung Cheng University";
                        $introdution="Dr. Huang supplied us with experiment materials.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Wan Chia Chang";
                        $job_title="Department of Arts and Creative Industries, National Dong Hwa University";
                        $introdution="Ms. Chang illustrated our team portraits.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>   
                <div class="dotted-line"></div>
                <div class="special_thanks">
                    <?php
                        $name="Campus walking";
                        $job_title="Center for Innovative Research on Aging Society, National Chung Cheng University";
                        $introdution="Center for Innovative Research on Aging Society gave us financial support for the campus walking activity.";
                        include "sub/attribution_card_3.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Feng-Ming Hao";
                        $job_title="Vice president, National Chung Cheng University";
                        $introdution="Mr. Hao gave full support on the campus walking, such as financial support and promotion resources.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Mei-Man Chen";
                        $job_title="Office director, Center for Innovative Research on Aging Society, National Chung Cheng University";
                        $introdution="Ms. Chen gave us suggestions on the details of preparation and promotions of the campus walking activity.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="dotted-line"></div>
                <div class="special_thanks">
                    <?php
                        $name="TCUS entrepreneurship competition";
                        $job_title="Career Development Center, National Chung Cheng University";
                        $introdution="Career Development Center supported us with funds, facility rental, activity preparation and promotion for the Taiwan Comprehensive University System (TCUS) entrepreneurship competition.";
                        include "sub/attribution_card_3.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Wun-Bin Gao";
                        $job_title="Professor, Department of Adult and Continuing Education";
                        $introdution="Dr. Gao assisted us with details of organization and preparation for the TCUS entrepreneurship competition.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Ren-Hao Lai";
                        $job_title="Career Development Advisor, Career Development Center, National Chung Cheng University";
                        $introdution="Mr. Lai assisted us in the preparation and the process of the TCUS entrepreneurship competition.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="I-Son Grace Ng";
                        $job_title="Professor, Department of Chemical Engineering, National Cheng Kung University";
                        $introdution="Dr. Ng was the guest speaker of the TCUS entrepreneurship competition.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Liang-Chun Wang";
                        $job_title="Assistant Professor, Department of Marine Biotechnology and Resources,  National Sun Yat-sen University";
                        $introdution="Dr. Wang was the guest speaker and the judge of the TCUS  entrepreneurship competition.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Lance Chang";
                        $job_title="Chief Executive Officer, Trade Wind Biotech Co., Ltd. (TWBIO)";
                        $introdution="Dr. Chang was the guest speaker and the judge of the TCUS entrepreneurship competition.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Shu-Yuan Yang";
                        $job_title="Associate professor, Department of Biomedical Sciences, Chang Gung University";
                        $introdution="Dr. Yang was the guest speaker and the judge of the TCUS entrepreneurship competition.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="dotted-line"></div>
                <div class="special_thanks">
                    <?php
                        $name="IHP specialist";
                        $job_title="";
                        $introdution="";
                        include "sub/attribution_card_3.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Chih-Kai Wu";
                        $job_title="Pharmacist, Seven Star Pharmacy, Minxiong Township, Chiayi County";
                        $introdution="Mr. Wu offered invaluable advice on the intake precautions for our product.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Yan-Chang Lee Ph.D.";
                        $job_title="Postdoctoral fellow, Precision Molding Research Center, National Chung Cheng University";
                        $introdution="Dr. Lee offered invaluable advice on our quantitative agar faucet and gel preparation machine design.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Chang-Jer Wu Ph.D.";
                        $job_title="Secretary-general, Health Food Society of Taiwan";
                        $introdution="Dr. Wu offered invaluable advice on the perspectives of the law and endotoxin to our product promotion.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Miranda Chen";
                        $job_title="Dietitian, develop in self-media management";
                        $introdution="Ms. Chen offered invaluable advice on the importance of the diet and exercise for CVD prevention.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
                <div class="special_thanks">
                    <?php
                        $name="Shuk-Fong Lee";
                        $job_title="Professor, Department of Athletic Sports, National Chung Cheng University";
                        $introdution="Dr. Lee offered invaluable advice on exercising suggestions.";
                        include "sub/attribution_card_2.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/attribution.js"></script>  
</body>
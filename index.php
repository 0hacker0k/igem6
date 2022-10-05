<!doctype html> 
<head>
    <title>wiki</title>
    <meta charset="UTF-8" />
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/index.css">
</head>

<body onload="load_finish()">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <div id="map" style="bottom: -100%;">
        <img id="map_icon" src="<?php echo imgfile;?>/home/heart-icon.png">
        <img id="epa" src="<?php echo imgfile;?>/drop.png">
        <img id="go_top" onclick="go_top()" src="<?php echo imgfile;?>/home/go-to-top.png">
    </div>
    <div id="bottomleft">
        <img class="bl-background" src="<?php echo imgfile;?>/home/bottomleft-background.png">
    </div>
    <style id="parameter"></style>
    <div class="page" style="top:200%;" id="page_1">
        <div class="typesetting_block">
            <div class="first_page"></div>
            <img id="team_name" src="<?php echo imgfile;?>/home/team_name.png">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_2">
        <img id="team_logo" src="<?php echo imgfile;?>/home/logo.png">
    </div>
    <div class="page" style="top:200%;" id="page_3">
        <img id="earth" src="<?php echo imgfile;?>/home/earth-rotation.gif">
    </div>
    <div class="page" style="top:200%;" id="page_4">
        <img id="map_of_world" src="<?php echo imgfile;?>/home/map-of-world.jpg">
        <div class="white_background">
            Cardiovascular disease (CVD) is one of the moCardiovascular disease (CVD) is one of the most severe diseases worldwide. In 2019, an estimated 17.9 million people died from CVD, representing 32% of all global deaths (WHO official website).
            <a href="###">[1]</a>
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_5">
        <!-- <img id="team_name" src="<?php echo imgfile;?>/home/team_name.png"> -->
        <img id="page5_epa" src="<?php echo imgfile;?>/home/page5_epa.png">
    </div>
    <div class="page" style="top:200%;" id="page_6">
        <div class="white_background">
            Modern living habits and diet cause an excess intake of cholesterol, inducing the accumulation of oxidized low-density lipoproteins (LDL) in arteries.
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page5-role1" src="<?php echo imgfile;?>/home/page5-role1.png">
            <img class="illustration" id="page5-role2" src="<?php echo imgfile;?>/home/page5-role2.png">
            <img class="illustration" id="page5-role3" src="<?php echo imgfile;?>/home/page5-role3.png">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_7">
        <div class="white_background">
            The LDL accumulation and impeded blood flow damage the arteries, which leads to atherosclerosis, the severe CVD.
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_8">
        <div class="white_background">
            Recently, daily intake of eicosapentaenoic acid (EPA) has been proven to reduce CVD efficiently, reducing the chance of death.
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_9">
        <div class="white_background">
            EPA scavenges the reactive oxygen species (ROS) to prevent the oxidative damage of cell membranes and consequently reduces the LDL-caused inflammation and prevents vascular injury.
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_10">
        <div class="white_background">
            However, the major source of EPA, marine fishes, is the end consumer in the food chain, and the accumulation of heavy metals and microplastics is not rare in marine fishes. 
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_11">
        <div class="white_background">
            Therefore, the development of a new EPA source is necessary to cover future consumption and avoid potential contamination.
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_12">
        <div id="page_12_white" class="white_background top_block">
            To generate an EPA supplement without potential contaminants, our team applied synthetic biology to produce pure EPA. 
        </div>
        <div id="page_12_content">
            <div id="information1">
                <li class="learn_more_title">
                    Genes form deep-sea bacteria
                </li>
                <div id="learn_more_1" class="learn_more" onclick="more_information('learn_more_1','learn_more_1_content','information2')">
                    <div class="triangle_to_right"></div>Learn more
                </div>
                <div id="learn_more_1_content" class="learn_more_content">
                    The previous research shows that combination of the pfa genes of deep-sea bacteria Moritella marina MP-1 and Shewanella pneumatophori SCRC-2738 can produce EPA in  E. coli.
                </div>
            </div>
            <div id="information2">
                <li class="learn_more_title">
                    Gene engineering
                </li>
                <div id="learn_more_2" class="learn_more" onclick="more_information('learn_more_2','learn_more_2_content','information1')">
                    <div class="triangle_to_right"></div>Learn more
                </div>
                <div id="learn_more_2_content" class="learn_more_content">
                    We cloned the pfa A, pfa C, pfa D, and pfa E genes from MP-1, and pfa B gene from SCRC-2738. All these five pfa genes are expressed in E. coli to produce EPA.
                </div>
            </div>
            
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_13">
        <div class="white_background">
            reference
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_13">
        <img id="team_logo_2" src="<?php echo imgfile;?>/home/logo.png">
    </div>
    <div class="page" style="top:200%;" id="page_14">
        <div class="typesetting_block">
            <img id="team_name_2" src="<?php echo imgfile;?>/home/team_name.png">
        </div>
    </div>
    <div id="first_background" class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <img class="background" src="<?php echo imgfile;?>/home/vessel-1.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-2.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-3.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-4.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-5.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-6.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-7.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-8.png">
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <!-- <div id="final_item"></div> -->
    <script>
        var display_mod=1;
    </script>
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/index.js"></script>
    <script>close_header();</script>
</body>
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
    <style id="parameter"></style>
    <div class="page" style="top:200%;" id="page_1">
        <div class="typesetting_block">
            <div class="first_page"></div>
            <img id="team_name" src="<?php echo imgfile;?>/home/team-name.gif">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_2">
        <img id="team_name" src="<?php echo imgfile;?>/home/team-name.gif">
    </div>
    <div class="page" style="top:200%;" id="page_3">
        <img id="team_name" src="<?php echo imgfile;?>/home/team-name.gif">
    </div>
    <div class="page" style="top:200%;" id="page_4">
        <img id="map_of_world" src="<?php echo imgfile;?>/home/map-of-world.jpg">
        <div class="white_background">
            Cardiovascular disease (CVD) is one of the most severe diseases that took away millions of lives.
            In 2019, an estimated 17.9 million people died from CVD, representing 32% of all global deaths.
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_5">
        <img id="team_name" src="<?php echo imgfile;?>/home/team-name.gif">
    </div>
    <div class="page" style="top:200%;" id="page_6">
        <div class="white_background">
            The living habits nowadays cause the excess intake of cholesterol from the modern diet,
            inducing the artery's low-density lipoproteins ( LDL ) accumulation. 
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_7">
        <div class="white_background">
            The LDL accumulation and impeded blood flow damage the arteries, which leads to atherosclerosis, the severe CVD.
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_8">
        <div class="white_background">
            Recently, the daily intake of eicosapentaenoic acid (EPA) has been proven to reduce CVD efficiently and severe CVD causes death.
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
        <div class="white_background top_block">
            To generate an EPA supplement without potential contaminants, our team applied synthetic biology to produce pure EPA. 
        </div>
    </div>
    
    <img class="background" src="<?php echo imgfile;?>/stage1/background.png">
    <img class="background" src="<?php echo imgfile;?>/stage1/background.png">
    <img class="background" src="<?php echo imgfile;?>/stage1/background.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/home/vessel.jpg">
    <img class="background" src="<?php echo imgfile;?>/stage1/background.png">
    <!-- <div id="final_item"></div> -->
    <script>
        var display_mod=0;
    </script>
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/index.js"></script>
    <script>close_header();</script>
</body>
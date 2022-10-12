
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <div class="guide" id="guide">
        <div id="guide_content">
            <div class="guide_label" onclick="move_to_item('1')">
                Overview
            </div>
            <div class="guide_sub_label" onclick="move_to_item('2')">
                Goal 3
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4')">
                Goal 10
            </div>
            <div class="guide_sub_label" onclick="move_to_item('6')">
                Goal 14
            </div>
            <div class="guide_sub_label" onclick="move_to_item('8')">
                The SDGs Conference
            </div>
        </div>
        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
            
        </div>    
    </div>
    <img class="full_size_image" src="<?php echo imgfile;?>/sustainable/banner-sustainable.png" alt=""> 
 
    <div class="article">
        <div class="in_center">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Overview</h1>
            </div>
            <p>
                &emsp;&emsp;In 2015, the United Nations announced the "2030 Sustainable Development Goals" (SDGs). The SDGs contain 17 core goals, which guide the world to work together to achieve sustainable development.
            </p>
            <p>
                &emsp;&emsp;This year, our team aims to achieve three SDG goals. First, we achieve goal 3, maintaining good health and well-being, by producing pure EPA supplements, and promoting good eating and exercise habits.  Second, we achieve goal 10 of reducing inequalities by producing an alternative for rural school to replace expensive experiment equipment like electric pipettes. Last, to achieve goal 14, sustaining life below water, we use microbes to produce EPA supplements, instead of extracting them from fish, which will decrease the use of marine resources.
            </p>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Goal 3</h1>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Ensure healthy lives and promote well-being for all at all ages</h2>
            </div>
            <p>
                &emsp;&emsp;"By 2030, reduce by one third premature mortality from non-communicable diseases through prevention and treatment and promote mental health and well-being"
            </p>
            <p>
                &emsp;&emsp;The ultimate goal of our PACOmega project, to reduce mortality due to cardiovascular diseases (CVDs) and promote CVD prevention, identifies closely with target 3. Cardiovascular disease, which caused 32% of global deaths in 2019, according to the World Health Organization, is currently one of the most severe non-communicable diseases. Our project tackled the problem not only by producing pure EPA, which is important in the prevention of CVDs, but also by <a href="https://2022.igem.wiki/ccu-taiwan/education" class="link_subtitle">initiating activities</a> to promote the prevention and treatment of CVDs. What we want to promote isn't just the amelioration of CVDs, but also healthy behavior in daily lives.
            </p>
            <div id="4" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Goal 10</h1>
            </div>
            <div id="5" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Reduce inequality within and among countries</h2>
            </div>
            <p>
                &emsp;&emsp;In Chiayi country, there are many rural schools located in the mountains, or in fishing villages without sufficient resources. Resource allocation is always a serious problem in the rural region in Taiwan. The original aim of our Open Lab activity was sharing synthetic biology. However, unexpectedly, we faced the reality of the urban-rural education gap. Our university already has teams supporting the education of rural students. Since teaching resources are important in education, we think that we may reduce the workload of rural teachers by providing convenient and affordable laboratory equipment. Thus, we designed a manual gel pouring machine, which is more affordable than an expensive electronic one. We hope to contribute our effort, step by step, to reduce the inequality between rural and urban areas.
            </p>
            <div id="6" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Goal 14</h1>
            </div>
            <div id="7" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Conserve and sustainably use the oceans, seas and marine resources for sustainable development</h2>
            </div>
            <p>
                &emsp;&emsp;Although we knew the positive role played by EPA in CVD prevention, since EPA can decrease LDL accumulation and inflammation, the common sources of EPA are fish and fish oil. Marine fish, especially those rich in Omega-3 PUFAs, are a limited resource. People tried to replace marine fish with krill as a source of EPA, but this action severely reduced the number of whales (Armstrong and Siegried, 1991; Prado-Cabrero and Nolan, 2021).
            </p>
            <p>
                &emsp;&emsp;Our PACOmega aims to generate an alternative source of EPA for CVD prevention. With the success of the PACOmega project, we can reduce the consumption of marine resources. 
            </p>
            <div id="8" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">The SDGs Conference</h1>
            </div>
            <p>
                &emsp;&emsp;To share about the potential worldwide impact of our project, we collaborated with team Korea_HS to attend the SDG conference they organized.
            </p>
            <p>
                &emsp;&emsp;Communicating with other teams allowed us to share the impact our project could have on the world. During the conference, each attendee presented their project and how they devoted themselves to the sustainable development goals. On the second day, we broke into two groups, each writing a contract indicating how we could take action to improve the world, attaining SDGs in particular. The conference gave us an opportunity to get connected with organizations and individuals working on achieving SDGs, so together we can make the world a better place.
            </p>

            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            
            <p class="h25">
                Reference:
                <ol>
                    <li>
                        Armstrong, A., & Siegfried, W. (1991). Consumption of Antarctic krill by Minke whales. Antarctic Science, 3 (1), 13-18.
                    </li>
                    <li>
                        Prado-Cabrero, A., Nolan, J.M. (2021).Omega-3 nutraceuticals, climate change and threats to the environment: The cases of Antarctic krill and <i>Calanus finmarchicus. Ambio</i> 50, 1184–1199.
                    </li>
                </ol>
            </p>          
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
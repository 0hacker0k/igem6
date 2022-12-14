
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
            <div class="guide_label" onclick="move_to_item('1');guide_toggle()">
                Overview
            </div>
            <div class="guide_label" onclick="move_to_item('2');guide_toggle()">
                Open Lab
            </div>
            <div class="guide_label" onclick="move_to_item('7');guide_toggle()">
                Campus walking
            </div>
            <div class="guide_label" onclick="move_to_item('11');guide_toggle()">
                Web Game
            </div>
            <div class="guide_label" onclick="move_to_item('21');guide_toggle()">
                World Heart Day
            </div>
        </div>
        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
        </div>
    </div>
    <img class="full_size_image" src="<?php echo imgfile;?>/education/banner-education.png" alt=""> 
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="color: #EA2B1F;">Overview</h1>
            </div>
        </div>
    </div>
    
    <div class="article">
        <div class="in_center">
        
            <p>
                &emsp;&emsp;Aside from lab work, education and science communication play an essential role in science research. With proper interaction and brain-storming activities, we, as responsible and reliable scientists, can genuinely understand the viewpoint of our target audience to foster mutual communication. Therefore, we attempted to share information about synthetic biology and our project with various communities.
            </p>
            <p>
                &emsp;&emsp;Our education and science communication projects mainly focus on two goals: <b>a.</b> introducing synthetic biology to the public and <b>b.</b> raising awareness of CVD prevention. We have observed that most people have a vague and one-sided understanding of these two fields. As a result, they have difficulty connecting them in a comprehensive way. We attempted to solve this problem by constructing a brand-new concept linking the health issue to our resolution.
            </p>
            <p>
                &emsp;&emsp;The revolutionary concept  is as follows: To prevent CVD, we want to use EPA, which has been proven to have a positive effect on reducing cardiac events. Our approaches to CVD prevention include producing pure EPA by synthetic biology and promoting a healthy lifestyle.
            </p>
            <p>
                &emsp;&emsp;Having this in mind, we held an Open Lab activity for high school students intended to share synthetic biology experiments and we initiated a campus walking activity to draw more attention to CVD prevention. To support the World Heart Day activities in Chiayi, we gathered together on September 29th to provide more information about arterial care.
            </p>
            <p>
                &emsp;&emsp;To make our ideas accessible to a broader audience, we designed a web game to promote CVD prevention virtually and remotely. Combining the ideas of synthetic biology and CVD prevention, we created a storyline in which the main character, PACO, is dispatched on an adventure wrapped in the theme of experimentation, to save her kingdom from illness.
            </p>       
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Bridging the Gap – Open Lab</h1>
            </div>
            <p>
                &emsp;&emsp;To prevent the CVD crisis, we devised a new way to synthesize pure EPA without contamination. However, the idea of synthetic biology may be too abstract for normal people to grab. Accordingly, to educate people on how we synthesize pure EPA and the beauty of synthetic biology, we held an <b>Open Lab science camp</b> and invited high school students to get involved in synthetic biology experiments.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education01.jpg">
                    <div class="triangle_to_top"></div>Group photo - our members with the participants
                </div>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">How do we publicize synthetic biology?</h2>
            </div>
            <p>
                &emsp;&emsp;To help participants understand the concept of synthetic biology, we decided to have participants conduct the experiments themselves. Meanwhile, with our team members' explanation of the experimental principles and the importance of laboratory safety, we can provide participants with clear and comprehensive information on the technology we use.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Before the activity</h2>
            </div>
            <p>
                &emsp;&emsp;Although we were well prepared, with the course materials and experimental equipment to be used in the course, we were uncertain whether our explanation and teaching style would be suitable for people with no experience in synthetic biology.
            </p>
            <p>
                &emsp;&emsp;As a result, we held two rehearsals, inviting peers from our campus with different majors to experience the course and make sure they could understand the concepts. Afterward, our peers gave us some advice to improve our teaching style. To illustrate, the peers point out that some of the principles and technical terms are too abstruse to comprehend, so they suggested that we use similes when expounding them. This advice greatly helped us, allowing us to complete the activity successfully.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education02.jpg">
                    <div class="triangle_to_top"></div>First rehearsals - our members with campus peers
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="pdf">
                    <iframe src="<?php echo imgfile;?>/education/open-lab-textbook.pdf" height="100%" width="100%"></iframe>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Open Lab course handout
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="5" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">During the activity</h2>
            </div>
            <p>
                &emsp;&emsp;In the experiment, to allow the participants to observe the results more easily and understand the effect of the technology, we used green fluorescent protein (GFP), which is often used as a reporter gene in synthetic biology, as the target gene. This operation has often been done in the research field. In the process, we ligated the GFP gene into pET15b, using pET15b as the plasmid to transform it into <i>E. coli</i>. During the experiment, we lead them through the processes of PCR, Gel electrophoresis, amplicon purification, ligation, and transformation sequentially, finally observing the <i>E. coli</i> that expresses GFP protein.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education03.jpg">
                    <div class="triangle_to_top"></div>Helping participants understand the concept of synthetic biology
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education04.jpg">
                    <div class="triangle_to_top"></div>Working on pipette use - team member and participants
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education05.jpg">
                    <div class="triangle_to_top"></div>Principle explanation - PCR mechanism 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education06.jpg">
                    <div class="triangle_to_top"></div>Experiment conducted by the participants - gel electrophoresis
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education07.jpg">
                    <div class="triangle_to_top"></div>Experiment conducted by the participants - transformation
                </div>
            </div>
            <div id="6" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Feedback from participants</h2>
            </div>
            <p>
                &emsp;&emsp;After the camp, we set up a quiz using Kahoot, which is a platform that provides an interactive game to evaluate whether the participants have indeed obtained the knowledge. The data of results show that over 70% of them understood the principles we wanted to convey. Additionally, some participants also sent us messages after the activity, indicating that this activity aroused their interest in synthetic biology, and also corrected their misunderstandings about gene modification.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/education/education08.jpg">
                </div>
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/education/education09.jpg">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Kahoot quiz - first place (left) and top three (right) participants
            </div>
        <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="7" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Balanced sight, Balanced life – Campus walking</h1>
            </div>
            <p>
                &emsp;&emsp;According to the official statistics from the Taiwanese government, the percentage of elderly living nearby (i.e. in MingXiong township) is the highest among regions in Taiwan, and correspondingly, the CVD crisis is more serious in MingXiong township. Hence, based on the research (Tian & Meng, 2019) and consultation with an <a href="https://2022.igem.wiki/ccu-taiwan/human-practices#12" class="link_subtitle">exercise professor</a>, we learned that aerobic exercise significantly affects lipid metabolism, and "walking" is the easiest aerobic exercise to achieve in everyone's daily life. As a result, we initiated a campus walking activity called "Walking with the elderly, walking to a better heart."
            </p>
            <div id="8" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Before the activity</h2>
            </div>
            <p>
                &emsp;&emsp;Ｗith the help of our adviser, <a href="https://admbio.ccu.edu.tw/zh-tw/teacher_info.php?key=biowyc" class="link_subtitle">Dr. Chan</a>, we cooperated with the "<a href="http://agei.ccu.edu.tw/CIRAS/index.php" class="link_subtitle">Center for Innovative Research on Aging Society (CIRAS)</a>" at CCU to hold this activity. CIRAS provided us some advice about holding activities and shared experience on interacting with the elderly. For example, CIRAS suggested amended usage of specific terms in the interactive games to avoid misleading or confusing the elderly. 
            </p>
            <p>
                &emsp;&emsp;We also went to the village and the elderly in CCU to invite them to our activity in person, hoping our sincere invitation could interest them to participate in the event. In the promotion phase, we found that some of the elderly seldom have an outdoor activity, therefore, this reinforces our desire to provide an opportunity for them to walk with us.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education095.jpg">
                    <div class="triangle_to_top"></div>Invite the elderly to our campus walking in the village
                </div>
            </div>
            <div id="9" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">During the activity</h2>
            </div>
            <p>
                &emsp;&emsp;On the day of the event, almost a hundred people joined us in the event: "Walking with the elderly, walking to a better heart." Through this event, we hope to raise public awareness through the interactive games, guiding them to know more about cardiovascular disease. Therefore, we set up 5 different interactive games for the elderly along the walking route. The first game let the public know about the severity of cardiovascular disease. The second game let people know what types of living habits would lead to cardiovascular diseases. The third game caused people to think about how to prevent cardiovascular disease through daily food consumption. The fourth game taught people how to prevent cardiovascular disease through different kinds of exercise. Last but not least, we tested them to see if they understood the ideas from the whole activity.
            </p>
            <div id="10" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Feedback from participants</h2>
            </div>
            <p>
                &emsp;&emsp;After the event, we received a participant's response about his personal experience in fighting with CVDs, providing us with a stronger impetus to promote this issue. A man around 55 years old told us that he suffered from cardiovascular disease 10 years ago, but since he started to do aerobic exercise regularly, the condition has become better and better, and currently, his blood pressure and heart condition have returned to normal. Although research tells us that aerobic exercise is helpful for cardiovascular disease, it was really touching to hear a real experience through this event. We hope that through our efforts, more people can understand this issue and try to change their lifestyles.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education10.jpg">
                    <div class="triangle_to_top"></div>Warm-up exercise to avoid sports injuries
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education11.jpg">
                    <div class="triangle_to_top"></div>Our staff explained how to prevent cardiovascular disease through an interactive game
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education12.jpg">
                    <div class="triangle_to_top"></div>Taking the whole family to participate in our event
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education13.jpg">
                    <div class="triangle_to_top"></div>Testing if the participants have learned about cardiovascular disease. Every participant demonstrated knowledge of cardiovascular disease
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education14.jpg">
                    <div class="triangle_to_top"></div>Group photo for the activity!

                </div>
            </div>
            <div id="11" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Accessible material – Web game</h1>
            </div>
            <p>
                &emsp;&emsp;To promote the concept of synthetic biology and our PACOmega project without the limitation of distance, we decided to produce a web game with a captivating story with an interesting plot about the CVD crisis and how to prevent CVD. This web game also describes how we produce EPA by synthetic biology to help prevent CVD. To meet the needs of both local and global audiences, we wrote it in both Chinese and English. Also, we used easy terms to describe the adventure of PACOmega, making the web game suitable for all ages. Through this web game, we are sure that people can understand the big picture about CVD and synthetic biology.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education15.jpg">
                    <div class="triangle_to_top"></div>The opening of <a href="https://2022.igem.wiki/ccu-taiwan/webgame" class="link_subtitle">PACOmega web game</a>
                </div>
            </div>
            <div id="12" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The design of our storyline</h2>
            </div>
            <p>
                &emsp;&emsp;To explain how we produce EPA by synthetic biology and to convey CVD information, we wrote a captivating story with an interesting plot to convey knowledge about CVD as players go through the situation personally.
            </p>
            <p>
                &emsp;&emsp;The story is about a kingdom named PACOmega that was suffering from a serious CVD crisis. The main character, PACO, wanted to save her grandfather, who was tortured by CVD. She embarked on a journey to find solutions for the CVD crisis. During her journey, she encountered stages guarded by priests, and each priest had their own sorrowful stories related to the CVD crisis. Every time PACO completes a stage, she can get an element we use to synthesize EPA in our project. Finally, PACO overcomes all the difficulties and collects all the elements to synthesize EPA. Through the storyline design, we hope to help players realize the seriousness of the CVD crisis, the risk factors, and share information about CVD prevention.
            </p>
            <div id="13" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The design of game stages</h2>
            </div>
            <p>
                &emsp;&emsp;The main design of the web game allows the players to focus more on the information delivered, by lowering the entry barrier. Thus, we applied familiar game forms, such as matching games, memory games, shooting games, and simulation games, to establish our game stages.
            </p>
            <p>
                &emsp;&emsp;We designed our game stages to describe the main concepts in synthetic biology. However, we skipped some details to balance the game difficulty and reality, because it is not our goal to frustrate players. Totally, we generated five game stages.
            </p>
            <div id="14" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Stage 1 - the building blocks of DNA, base pairing, and the principle of PCR</h2>
            </div>
            <p>
                &emsp;&emsp;DNA is a molecule made up of four types of bases: adenine (A), cytosine (C), guanine (G), and thymine (T). In the double stranded DNA, the base A pairs with T, and C pairs with G. 
            </p>
            <p>
                &emsp;&emsp;In the beginning, the player can select the level of the game's difficulty.  In stage 1, players will use the "wordle" game form to guess the correct DNA sequence, and pair the DNA bases to finish the complete DNA double helix sequence. The principle of PCR will be introduced in the cutscenes.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education16.jpg">
                    <div class="triangle_to_top"></div>The selection of difficulty levels
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education17.jpg">
                    <div class="triangle_to_top"></div>Guessing the correct DNA sequence 
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education18.jpg">
                    <div class="triangle_to_top"></div>Pairing the selected DNA bases
                </div>
            </div>
            <div id="15" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Stage 2 - Observing the PCR product: gel electrophoresis</h2>
            </div>
            <p>
                &emsp;&emsp;To demonstrate the complicated steps of gel electrophoresis, we designed a game similar to the popular online simulation game, Overcooked. Players can operate the main character to make gel, load marker and sample, run gel electrophoresis, and take a picture of the gel. The result of the gel image is dependent on the operation in each step. For example, there's a Quick Time Event (QTE) that decides whether the player loads the marker or samples accurately or not. Another example is that if the TAE-agarose mixture is overheated or set aside too long, there will be cracks on the gel image when the picture is taken.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education19.jpg">
                    <div class="triangle_to_top"></div>The main scenes of stage 2
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education20.jpg">
                    <div class="triangle_to_top"></div>A gel image with cracks

                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education21.jpg">
                    <div class="triangle_to_top"></div>Comments on the gel images
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education22.jpg">
                    <div class="triangle_to_top"></div>The Quick Time Event bar
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;We also took a suggestion from NCKU_Tainan and NYCU_Formosa made during Taiwan iGEM meet '22. They mentioned that although we explained how to finish the steps before starting, players without an experimental background might find playing difficult because remembering the entire procedure without any reminder is difficult. Thus, we wrote down the protocol as game instructions, and showed the protocol as a post-it note in each main scene. Players can check it at any time to recall the procedure of the experiment.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:33%;">
                    <img src="<?php echo imgfile;?>/education/education23.jpg">
                </div>
                <div class="img" style="--width:33%;">
                    <img src="<?php echo imgfile;?>/education/education24.jpg">
                </div>
                <div class="img" style="--width:33%;">
                    <img src="<?php echo imgfile;?>/education/education25.jpg">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>The content of protocol on the post-it note.
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;With some selfishness and mischief, we buried a shortcut in this stage, our automatic gel maker. We hope that the players will notice the icon is similar to our automatic gel maker and apply it for making the gel. This shortcut will be activated as adequate material is added to the machine. It will automatically make gel without any other complex processes, just like our design for supporting rural teachers. The main character can remotely control the device; when the device has finished the task, a wifi sign will flicker on top of the device and above PACO to remind the player that the gel is available to be used.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education26.jpg">
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education27.jpg">
                </div>
            </div>
            <div id="16" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Stage 3 - Ligation: the concept of complementary pairing</h2>
            </div>
            <p>
                &emsp;&emsp;In stage 3, we convey the principle of successful ligation, complementary pairing, to the players. This principle is presented as a classic matching game. In this stage, there will be eighteen sequences and nine groups of complementary base pairs. Players must remember the nitrogenous base pair sequence and match the corresponding one as quickly as possible.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education28.jpg">
                    <div class="triangle_to_top"></div>The main scenes of stage 3
                </div>
            </div>
            <div id="17" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Stage 4 - Transformation</h2>
            </div>
            <p>
                &emsp;&emsp;In stage 4, we simulate the actual situation of transformation. The players have to transform the plasmid into <i>E. coli</i> in this shooting game using a gene gun. To demonstrate the concept of antibiotic selection, we set a cordon of antibiotic selection at the bottom of the screen. The falling <i>E. coli</i> will only be able to pass this cordon if they contain the collection of five different colored antibiotic plasmids.
            </p>
            <p>
                &emsp;&emsp;The <i>E. coli</i> that successfully pass the cordon will be used in stage 5 to express protein.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education29.jpg">
                    <div class="triangle_to_top"></div>The main scene of stage 4
                </div>
            </div>
            <div id="18" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Stage 5 - Picking colonies</h2>
            </div>
            <p>
                &emsp;&emsp;Finally, in stage 5, players will pick bacteria colonies and culture them. The players have to use a toothpick to select colonies of different sizes. The factor of button-pressing time, which refers to choosing strength and colony size, will be related to the final score of this stage.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education30.jpg">
                    <div class="triangle_to_top"></div>The main scene of stage 5
                </div>
            </div>
            <div id="19" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The  interlude and postscript of game design</h2>
            </div>
            <p>
                &emsp;&emsp;During the design phase, we came up with many ideas about the gameplays and art designs. One of these is the starting map, where the player can choose the stage they want to play. Although we were not sure how to design that at first, we came up with an original idea that we could combine an outline of the shape of Taiwan with the iGEM official logo. On one hand, the shape of Taiwan is similar to the <i>E. coli</i> on the logo, which can echo our project. On the other hand, we could promote Taiwan and iGEM competition to people worldwide.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education31.jpg">
                    <div class="triangle_to_top"></div>The draft of the design
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;However, as we joined the <a href="https://2022.igem.wiki/ccu-taiwan/collaborations#6" class="link_subtitle">Taiwan iGEM meet '22</a>, we found that our idea accidentally matched the conference icon.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education32.jpg">
                    <div class="triangle_to_top"></div>Taiwan iGEM meet '22 logo
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Of course, we did not want to commit plagiarism, but we thought it would be sad to change the map design, since it represents our hometown. Thus, we asked NCKU_Tainan, who sponsored the Taiwan iGEM meet '22 to identify the author of the logo. From this we found that Matilda Key, who participated in the 2020 iGEM competition in iGEM_CSMU, created the logo two years ago.
            </p>
            <p>
                &emsp;&emsp;We sincerely requested her permission to use a similar design in the map of our web game. She said she was happy that we liked her design and agreed to our request as long as we use it without commercial use or distribution.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Finally, the starting map looks like this:
            </p>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education34.jpg">
                    <div class="triangle_to_top"></div>The current map design
                </div>
            </div>
            <div id="20" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Future work</h2>
            </div>
            <p>
                &emsp;&emsp;Besides promoting synthetic biology and making synthetic biology products more acceptable, we hope that we can improve the game in both teaching and playing experience aspects, and also make some effort in the connection between real experiments and virtual game displays. In addition, we are dedicated to promoting the game and spreading this innovative approach to more people. Last but not least, we also hope that other iGEM teams can wisely utilize our novel idea to improve awareness of synthetic biology in the future.
            </p>
            <div id="21" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Practical Interaction – World Heart Day</h1>
            </div>
            <p>
                &emsp;&emsp;World Heart Day, September 29th, is a global event created by the World Heart Federation to inform people around the world about the severeness of heart diseases and strokes. Since the PACOmega project targeted the prevention of CVD, we decided to advocate the idea of World Heart Day with our own event. We went to the Culture Park in the downtown area of Chiayi city and shared information about heart diseases, especially CVD.
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div><div id="22" class="title-label-div">
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education345.jpg">
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div><div id="22" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Advocacy for PACOmega</h2>
            </div>
            
            <p>
                &emsp;&emsp;To publicize CVD on World Heart day, we came up with several creative and interactive activities, including flyers, postcards, check-in boards and message boards, to draw the attention of the Chiayi citizens.
            </p>
            <div id="23" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Health Education Flyer</h2>
            </div>
            <p>
                &emsp;&emsp;To find out what kind of CVD information the public is interested in, and what they wanted to know more about, we performed a preliminary survey and got 852 responses. The top two responses are as follows: Who are typical CVD patients and how can we prevent CVD. As a result, we put information about these two questions in our flyer.
            </p>
            <div class="full_block">
                <div class="img" style="--width:90%;">
                    <img src="<?php echo imgfile;?>/education/education35.jpg">
                </div>
            </div>
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/education/education36.jpg">
                    <div class="triangle_to_top"></div>The health education flyer
                </div>
            </div>
            <div id="24" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Checklist Health Declaration</h2>
            </div>
            <p>
                &emsp;&emsp;In the Culture Park, we introduced CVD and ways of preventing CVD to citizens using our flyer. To be more interactive, we invited the respondents to fill in their health declaration about CVD prevention on a checklist.
            </p>
            <p>
                &emsp;&emsp;On the checklist, there is a fill in the blank sentence that states, "For my heart to be healthy, I'm willing to _______". The local residents were invited to choose the actions they prefered to protect their heart, and stick their choices on the board. For example, they could choose to eat more Omega-3 rich food, or take Omega-3 supplements.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education37.jpg">
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/education/education38.jpg">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Residents and their checklists
            </div>
            <div id="25" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Message Board for Health Declaration</h2>
            </div>
            <p>
                &emsp;&emsp;In addition to the checklist, we also set up a message board for local residents to be creative, and think of what kind of actions they could take or have already taken to have a healthy heart. On the board, there is another fill in the blank question stating, "For my heart to be healthy, I'm willing to _______", and residents could write their own answers to this health declaration on the board.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education39.jpg">
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education40.jpg">
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education41.jpg">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Residents writing their health declaration on the message board
            </div>
            <div id="26" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Postcards Regarding CVD Prevention</h2>
            </div>
            <p>
                &emsp;&emsp;After filling in the checklist or message board, we gave participants a postcard to express our thanks. We designed three kinds of postcards (as seen below) that suggested three methods associated with the PACOmega project to prevent CVDs, including healthy diet, exercising, and EPA supplements. Through these activities, the World Heart Day and also our PACOmega project could reach a broader audience.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education42.jpg">
                    <div class="triangle_to_top"></div>Our postcard design: Consume EPA supplements
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education43.jpg">
                    <div class="triangle_to_top"></div>Our postcard design: Eat healthily!
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/education/education44.jpg">
                    <div class="triangle_to_top"></div>Our postcard design: Do exercise
                </div>
            </div>
            <div id="27" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">What we shared and learned in the World Heart Day Event</h2>
            </div>
            <p>
                &emsp;&emsp;In this World Heart Day event, we learned that people care about their health, but don't know how to implement it. Through message boards and checklists, we raised the awareness of Chiayi residents about the importance of preventing CVD through daily routines.
            </p>
            <p>
                &emsp;&emsp;In return, the local residents shared how they can translate the concept of CVD prevention into activities in daily life. Students can start by riding bicycles to school instead of taking the bus, and seniors can take a short stroll in the warm afternoon sun instead of taking naps.
            </p>
            <p>
                &emsp;&emsp;The World Heart Day event isn't just about us giving out information to the public; we also got their direct feedback about what they can do. The concept of healthy daily behaviors should always be foremost in everyone's heart, and CCU_Taiwan will never stop disseminating this idea.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/education/education45.jpg">
                    <div class="triangle_to_top"></div>Our team taking a picture with students from a nearby school
                </div>
            </div>
            <div id="28" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Conclusion</h2>
            </div>
            <p>
                &emsp;&emsp;To better convey our project and synthetic biology, our education activities are not limited to a single method, instead, they are all age-appropriate and individually designed to meet the needs of different groups.
            </p>
            <p>
                &emsp;&emsp;Recognizing the importance of efficient science communication and education, we built up a cogent dissemination strategy starting from the introduction of synthetic biology to the student community, to promoting awareness of CVD prevention in the elderly. We also considered voices from local Chiayi and other countries, developing different ways to connect these opinions with our team.
            </p>
            <p>
                &emsp;&emsp;With these attempts, we sincerely hope that we can make efforts to bridge the gap between society and academics, embracing multilateral collaboration as well.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h25">
                Reference:
                <ul>
                    <li>
                        Tian, D., & Meng, J. (2019). Exercise for prevention and relief of cardiovascular disease: prognoses, mechanisms, and approaches. Oxidative Medicine and Cellular Longevity, 2019.
                    </li>
                </ul>
            </p>



        </div>
    </div>
    <div class="marge" style="--width:calc(3em + 5vh)"></div>

    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>

<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/education/banner-education.png" alt=""> 
    
    
    <div class="article">
        <div class="in_center">
        <div class="guide" id="guide">
            <div id="guide_content">
                <div class="guide_label" onclick="move_to_item('1')">
                    Overview
                </div>
                <div class="guide_label" onclick="move_to_item('2')">
                    Refining our PACOmega project
                </div>
                <div class="guide_label" onclick="move_to_item('8')">
                    United we stand
                </div>
                <div class="guide_label" onclick="move_to_item('15')">
                    Together, we louder
                </div>
                <div class="guide_label" onclick="move_to_item('18')">
                    Summary
                </div>
            </div>
            <div id="expansion" onclick="guide_toggle()">
                <div class="overlap_item trapezoid"></div>
                <!-- <div class="overlap_item triangle_to_left"></div> -->
                <div class="overlap_item triangle_to_right"></div>
                
            </div>
            
            
        </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <h1>Overview</h1>
            <p>
                &emsp;&emsp;Aside from the lab work, science communication plays an essential role as experimentation in the application. With proper interaction and brain-storming activities, we, as responsible and reliable scientists, can genuinely share the same level of standpoints with our target audience and explore mutual communication. Therefore, we attempt to share information about synthetic biology and our project with relative communities.
            </p>
            <p>
                &emsp;&emsp;Our education and science communication projects mainly focus on two goals: <b>a.</b> introducing synthetic biology to the public and <b>b.</b> raise the awareness of CVD prevention. These two are tethered together because lacking any of it might end up failing to tell the whole story of our project: utilizing the synthetic biological way to create pure EPA supplements for artery care. We have observed that most contact people have a vague and one-sided understanding of these two fields. As a result, they have difficulty connecting them in a comprehensive way. We solve the problem by constructing a coherent story from the current issue to our resolution.
            </p>
            <p>
                &emsp;&emsp;The story is as follows: To prevent CVD, we want to use EPA, which has been proven to have a good effect on reducing cardiac events. Our approaches to CVD prevention include producing pure EPA by synthetic biology and promoting a healthy lifestyle.
            </p>
            <p>
                &emsp;&emsp;Having this in mind, we held an Open Lab activity for high school students intended to share the synthetic biological experiments and initiated a campus walking activity to draw more attention to CVD prevention. In echoing the World Heart Day activity in Chiayi, we gathered together on September 29th to send more information about arterial care.
            </p>
            <p>
                &emsp;&emsp;To make our idea more accessible, we designed a web game to promote CVD prevention virtually and remotely. Combining the idea of synthetic biology and CVD prevention, we created a storyline in which the main character, PACO, is dispatched on an adventure wrapped in the theme of experimentation to save her kingdom from illness.
            </p>
            <p>
                &emsp;&emsp;With those attempts, we sincerely hope that we can make efforts to bridge the gap between society and the academic field. And we are embracing multilateral collaboration.
            </p>        
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Open Lab</h1>
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Overview</h2>
            </div>
            <p>
                &emsp;&emsp;To prevent the CVD crisis, we devised a new way to synthesize pure EPA without contamination. However, the idea of synthetic biology may be too abstract for normal people to grab. Accordingly, to educate people how we synthesize pure EPA and the beauty of synthetic biology, we held the <b>Open Lab science camp</b> and invited high school students to get involved in synthetic biological experiments.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education01.jpg">
                    <div class="triangle_to_top"></div>Group photo - our members with the participants
                </div>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">How do we achieve the publicity of synthetic biology?</h2>
            </div>
            <p>
                &emsp;&emsp;To let participants precisely realize the concept of synthetic biology, we decided to have participants manually conducting the experiments. Meanwhile, with our team members' explanation of the experimental principle and the importance of laboratory safety, we can provide participants with clear and comprehensive information on the technology we use.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Before the activity</h2>
            </div>
            <p>
                &emsp;&emsp;Although we are well prepared with the course materials and experiment equipment that will be used in the course, it is uncertain for us to make sure whether the explanation and the teaching styles are suitable for people who have never met synthetic biology.
            </p>
            <p>
                &emsp;&emsp;As a result, we set rehearsals twice and invited peers on our campus with different majors to experience the course and make sure they could completely absorb the knowledge. In return, the peers gave us some advice to improve our teaching styles. To illustrate, the peers point out that some of the principles and technical terms are too abstruse to comprehend, they suggest that we use similes when expounding them. All this advice has ideally helped us complete an excellent activity.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education02.jpg">
                    <div class="triangle_to_top"></div>First rehearsals - our members with campus peers
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="5" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Record during the activity</h2>
            </div>
            <p>
                &emsp;&emsp;In the experiment, to allow the operator to observe the results more effectively and understand the effect of the technology we adopt, we used green fluorescent protein (GFP), which is often used as a reporter gene in synthetic biology, as the target gene and has been significantly used in the research field. Also, we use pET15b as plasmid and transform it into E. coli. During the experiment, we lead them to start with PCR, Gel electrophoresis, amplicon purification, ligation, and transformation sequentially. Finally, observing the E. coli that expresses GFP protein.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education03.jpg">
                    <div class="triangle_to_top"></div>Letting participants precisely understand the concept of synthetic biology
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education04.jpg">
                    <div class="triangle_to_top"></div>Hard working on pipette using - team member and the participants
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
                    <div class="triangle_to_top"></div>Experience of the participants - gel electrophoresis
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education07.jpg">
                    <div class="triangle_to_top"></div>Experiment operated by the participants - transformation
                </div>
            </div>
            <div id="6" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Feedback from participants</h2>
            </div>
            <p>
                &emsp;&emsp;After the camp, we set up a quiz section through Kahoot, which is a platform that provides an interactive game to evaluate whether the participants have indeed obtained the knowledge. The data of results show that over 70% of them have well understood the principle we want to convey. Additionally, some participants also sent us a message after the activity, indicating that this activity efficiently arouses their interest in synthetic biology, and also corrects their misunderstanding about gene modification.
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
                <div class="triangle_to_top"></div>Kahoot section - first place (left) and top three (right) of the participants
            </div>
        <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="7" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Campus walking</h1>
            </div>
            <div id="8" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Overview</h2>
            </div>
            <p>
                &emsp;&emsp;According to the official statistics from the Taiwanese government, the percentage of elderly living nearby (i.e. Ming Xiong township) is relatively higher than in other places in Taiwan, and through cross-comparison, the CVD crisis is more serious in this region. Hence, based on the research (<i>Oxid Med Cell Longev</i>, Apr 9, 2019, 3756750) and consultation with experts, we learned that aerobic exercise significantly affects lipid metabolism, and "walking" is the easiest aerobic exercise to achieve in everyone's daily life. As a result, we initiated a campus walking activity called "Walking with the elderly, walking to a better heart".
            </p>
            <div id="9" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Before the activity</h2>
            </div>
            <p>
                &emsp;&emsp;Ｗith the help of our adviser, Dr. Chan, we cooperated with the "Center for Innovative Research on Aging Society (CIRAS)" in CCU to hold this activity. CIRAS provided us some advice about holding activities and shared experience on interacting with the elderly. For example, the CIRAS suggested the amended usage of specific terms in the interacting game to avoid misleading the elderly.
            </p>
            <p>
                &emsp;&emsp;We also went to the village and the elderly university in CCU to invite them to our activity in person, hoping our sincere invitation can interest them to participate in the event. In the promotion phase, we know that some of the elderly seldom have an outdoor activity, therefore, this reinforces us to provide a great opportunity for them to walk with us.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Record during the activity</h2>
            </div>
            <p>
                &emsp;&emsp;On that day, almost a hundred people joined us in the event: “Walking with the elderly, walking to a better heart.” Through this event, we hope to raise public awareness through the interactive game, guiding them to know more about cardiovascular disease. Therefore, we set up 5 different games to interact with elderly along the walking route. The first game lets the public know about the severity of cardiovascular disease. The second game makes people know what type of living habit will lead to cardiovascular diseases. The third game leads people to think about how we prevent cardiovascular disease in every day’s food consumption. The fourth game teaches people how to prevent cardiovascular disease through different kinds of exercise. Last but not least, tested them if they got the ideas for the whole activity.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Feedback from participants</h2>
            </div>
            <p>
                &emsp;&emsp;After the event, we received a participant’s response about his true experience in fighting with CVDs, providing us with a stronger impetus on promoting this issue. A man around 55 years old told us that he suffered from cardiovascular disease 10 years ago, but since he started to do aerobic exercise regularly, the condition has become better and better, and currently, his blood pressure and heart condition have become normal. Although the research tells us that aerobic exercise is helpful for cardiovascular disease, it is really touching to hear the real experience through this event. We hope that through our efforts, more people in the world can understand this issue and try to change their lifestyles.
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
                    <div class="triangle_to_top"></div>Our staff explained how to prevent cardiovascular disease through the interactive game
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
                    <div class="triangle_to_top"></div>Testing if every participant learns about the knowledge of the cardiovascular disease, it turns out that every participant knows about the whole concept of cardiovascular disease
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/education/education14.jpg">
                    <div class="triangle_to_top"></div>Group photo for the activity!

                </div>
            </div>      
        </div>
    </div>
    <div class="marge" style="--width:calc(3em + 5vh)"></div>

    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
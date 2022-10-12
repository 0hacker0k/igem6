
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
                Alleviating public prejudice against synthetic biology
            </div>
            <!-- <div class="guide_sub_label" onclick="move_to_item('3')">
                Web game
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4')">
                Social media
            </div>
            <div class="guide_sub_label" onclick="move_to_item('5')">
                World Heart Day
            </div> -->
            <div class="guide_sub_label" onclick="move_to_item('6')">
                Sharing the power of synthetic biology
            </div>
            <!-- <div class="guide_sub_label" onclick="move_to_item('7')">
                Open lab
            </div> -->
            <!-- <div class="guide_sub_label" onclick="move_to_item('8')">
                Synthetic biology based EPA generation
            </div>
            <div class="guide_sub_label" onclick="move_to_item('9')">
                Campus walking
            </div>
            <div class="guide_sub_label" onclick="move_to_item('10')">
                TCUS entrepreneurship competition
            </div> -->
            <div class="guide_sub_label" onclick="move_to_item('10')">
                Echoes from the TCUS entrepreneurship competition
            </div>
            <div class="guide_sub_label" onclick="move_to_item('11')">
                Communication among iGEM teams
            </div>
            <!-- <div class="guide_sub_label" onclick="move_to_item('13')">
                Taiwan iGEM meet '22
            </div>
            <div class="guide_sub_label" onclick="move_to_item('14')">
                Asian Federation of Biotechnology (AFOB) - AFOB Regional Symposium (ARS)
            </div> -->
            <div class="guide_label" onclick="move_to_item('14')">
                Conclusion
            </div>
        </div>
        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
            
        </div>    
    </div>
    <img class="full_size_image" src="<?php echo imgfile;?>/communication/banner-communication.png" alt=""> 
 
    <div class="article">
        <div class="in_center">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Overview</h1>
            </div>
            <p>
                &emsp;&emsp;Successful scientific communication should convince the public and convey the message as widely as possible. Therefore, we focused on two aspects of communication: alleviating the public prejudice against synthetic biology, and sharing the power of synthetic biology. 
            </p>
            <p>
                &emsp;&emsp;To alleviate public prejudice against synthetic biology without being limited by distance, we utilized <b>social media</b>, <b>web games</b> and <b>pop-up activity</b>. In social media, we regularly posted knowledge about synthetic biology to enable all ages to learn about biotechnology. In the <a href="https://2022.igem.wiki/ccu-taiwan/webgame" class="link_subtitle">web game</a>, we focused on introducing the experimental process, and conveyed the benefits of synthetic biology. We also held a local activity on <a href="https://2022.igem.wiki/ccu-taiwan/education#21" class="link_subtitle">World Heart Day</a>, reminding the public of the importance of CVD prevention, and explaining how we deal with this problem using synthetic biology. 
            </p>
            <p>
                &emsp;&emsp;To share the power of synthetic biology, we held an <a href="https://2022.igem.wiki/ccu-taiwan/education#2" class="link_subtitle">Open Lab activity</a>, and introduced the beauty of synthetic biology by allowing the teenagers to personally operate the experiment. We also held a <a href="https://2022.igem.wiki/ccu-taiwan/education#7" class="link_subtitle">campus walking activity</a> to tell the nearby elderly how our PACOmega project contributes to CVD prevention. Finally, we held the <a href="https://2022.igem.wiki/ccu-taiwan/collaborations#7" class="link_subtitle">Taiwan Comprehensive University System (TCUS) entrepreneurship competition</a>, in which we and other iGEM teams shared our projects with synthetic biology professors and a company. Consequently, we build connections to translate our ideas into real products in the future.  
            </p>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Alleviating public prejudice against synthetic biology</h1>
            </div>
            <p class="h13">
                All ages, not limited by distance
            </p>
            <p>
                &emsp;&emsp;Synthetic biology is a new concept to the public, so we need to build better societal understanding of this new technology, eliminate doubts, and increase the acceptance of products of biological technology. We use the internet to spread the ideas, since it can share the information of synthetic biology to all ages regardless of location. We applied two online tools, Web game and social media, to promote the concept more effectively. 
            </p>
            <div id="3" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Web game</h2>
            </div>
            <p>
                &emsp;&emsp;Compared to learning the experimental process through a textbook, web games are a more interesting approach for the current generation. By fusing basic steps of synthetic biological experiments and an inspiring story line, we can make the game more immersive. Moreover, since people can play our web game on any device, distance barriers are overcome. In the game, players need to accomplish five main stages to learn the principles of PCR, gel electrophoresis, ligation, transformation and choosing a colony. By enjoying our game, people can experience the principles of synthetic biology without going to a practical lab or purchasing expensive experiment tools. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:48%;">
                    <img src="<?php echo imgfile;?>/communication/communication01.png"/>
                </div>
                <div class="img" style="--width:48%;">
                    <img src="<?php echo imgfile;?>/communication/communication02.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div> Web game fusing synthetic biological experiments and an inspiring story line.          
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="4" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Social media</h2>
            </div>
            <p>
                &emsp;&emsp;Social media is a very popular way to convey information nowadays. To spread the idea of synthetic biology more effectively, using social media for promotion is essential. As a result, we used Instagram and Facebook to share our ideas to the public with the assistance of an algorithm. We posted the information about the common applications of synthetic biology, and shared the result of the activities we held to the public. Sometimes we also mentioned the daily activities of our team, making life in the laboratory more approachable for people. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/communication/communication03.png"/>
                    <div class="triangle_to_top"></div>Synthetic biology introduction on Instagram.           
                </div>
            </div>
            <div id="5" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">World Heart Day event</h2>
            </div>
            <p>
                &emsp;&emsp;9/29 is global World Heart Day. To support the holiday, we planned an event to promote our PACOmega project and the concept of healthy diet and regular exercise to the public. We prepared a message board for people, asking them to share their good habits that are beneficial for the prevention of CVD. They could also write what changes they were willing to make to improve their overall health. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/communication/communication04.png"/>
                    <div class="triangle_to_top"></div>Promotion of CVD prevention on World Heart Day.           
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="6" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Sharing the power of synthetic biology</h1>
            </div>
            <p>
                &emsp;&emsp;To better understand the needs of our target audiences for science communication, we performed surveys to collect opinions from students in our college. The questions included CVD information, EPA supplements, and synthetic biology. After the survey, we aimed to better be able to share the power of synthetic biology with various kinds of people. For those who are new to synthetic biology and show interest, we prepared activities that converted textbook knowledge into actual experience. Moreover, through these activities we can also educate people how we synthesize pure EPA, making people more willing to accept the PACOmega project and consume the product. 
            </p>
            <div id="7" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Open lab</h2>
            </div>
            <p>
                &emsp;&emsp;To educate teenagers about synthetic biology, we held an Open Lab science camp that invited high school students. During the Open Lab activity, the students participated in PCR, gel electrophoresis, amplicon purification, ligation, and transformation. Finally, they were able to observe the <i>E. coli</i> plate that expressed the target gene. In order to allow students to observe the final result more clearly, we applied green fluorescent protein (GFP) as the expressed gene in the experiment. By including several basic experiment processes of synthetic biology, we tried to make students more familiar with the new technology in an enjoyable activity. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/communication/communication05.png"/>
                    <div class="triangle_to_top"></div>Participants trying to learn how to use the micropipette.           
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="8" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Campus walking activity</h2>
            </div>
            <p>
                &emsp;&emsp;To make people aware of the seriousness of CVD and how we deal with the CVD crisis with synthetic biology, we held a campus walking activity for local elderly. In the event, we designed five simple games to help people understand the CVD crisis and how we fight with it by synthetic biology. Through the simple games, even elders could enjoy the process of playing and learning. Thus we successfully combined an interesting way of gaining knowledge about how to prevent the dreadful disease with an event encouraging physical activity. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/communication/communication06.png"/>
                    <div class="triangle_to_top"></div>Senior citizens walking on campus.           
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="9" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The TCUS entrepreneurship competition</h2>
            </div>
            <p>
                &emsp;&emsp;To communicate with the industry, we decided to hold the TCUS entrepreneurship competition, in collaboration with <a href="https://2022.igem.wiki/ncku-tainan/collaborations" class="link_subtitle">NCKU_Tainan</a>. In this competition, we invited the academic professor and CEO of a synthetic biology company to share their experiences in translating ideas into products. This also led to win-win cooperation, making more novel and interesting ideas come true. 
            </p>
            <div id="10" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Echoes from the TCUS entrepreneurship competition</h1>
            </div>
            <p>
                &emsp;&emsp;After the TCUS entrepreneurship competition, we invited the CEO of <a href="https://www.twbioscience.com/" class="link_subtitle">TWBIO</a>, Dr. Chang, to be our instructor. Dr. Chang showed strong interest in our project, and signed an MOU for a long-term cooperative relationship with us. We will continually improve and perfect our project, to make our dream come true. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/communication/communication07.png"/>
                    <div class="triangle_to_top"></div>Presentation advice from Dr. Chang.             
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="11" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Communication among iGEM teams</h1>
            </div>
            <p class="h13">
                Synthetic biology followers
            </p>
            <p>
                &emsp;&emsp;In regard to the focus of our project, to utilize synthetic biology to generate EPA for CVD prevention, it’s possible for us to meet unforeseen problems. To deal with this, besides getting advice from experts, we also hunted for connections with groups experienced in synthetic biology to give us some advice. Through the process, by learning and understanding the project mutually, we not only exchanged suggestions and received more feedback to accomplish our project, but found more similarities between teams, developed collaboration opportunities, and achieved a win-win relationship. 
            </p>
            <div id="12" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')"><a href="https://2022.igem.wiki/ccu-taiwan/collaborations#8" class="link_subtitle_no_bgc">Taiwan iGEM meet '22</a></h2>
            </div>
            <p>
                &emsp;&emsp;On 8/22 we participated in the Taiwan iGEM meet ‘22, a conference for TAIWAN IGEM teams and participants to learn about every team’s project, discuss the projects, and get feedback from every Taiwan IGEM team for improvement and inspiration. 
            </p>
            <p>
                &emsp;&emsp;During this conference, we received feedback on our presentation and poster, and we got some inspiration about how we can present our project to the public and synthetic biology followers more clearly. Also, we were inspired to further develop our <a href="https://2022.igem.wiki/ccu-taiwan/hardware#2" class="link_subtitle">Quantitative Agar Faucet</a>. Therefore, to improve our equipment to accomplish automation and standardization, we interviewed Prof. Lee.
            </p>
            <p>
                &emsp;&emsp;After the Meet, further collaboration led to projects such as the iGEM theme song project with <a href="https://2022.igem.wiki/csmu-taiwan/" class="link_subtitle">CSMU_Taiwan</a>, iGEM map with <a href="https://2022.igem.wiki/nthu-taiwan/" class="link_subtitle">NTHU_Taiwan</a>, and the infographic exchange with <a href="https://2022.igem.wiki/gems-taiwan/index" class="link_subtitle">Gems_Taiwan</a>. 
            </p>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:60%;">
                    <img src="<?php echo imgfile;?>/communication/communication08.png"/>
                    <div class="triangle_to_top"></div>Discussion and presentation of our project.           
                </div>
            </div>
            <div class="marge" style="--width:calc(2em + 2vh)"></div>
            <div id="13" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Asian Federation of Biotechnology (AFOB) - AFOB Regional Symposium (ARS)</h2>
            </div>
            <p>
                &emsp;&emsp;Asian Federation of Biotechnology (AFOB) is a non-profit organization established in 2008, committed to enhancing the exchange of knowledge, skills, and people, to complement and support events and research related to biotechnology, and promote the awareness of beneficial uses of biotechnology to the public. The AFOB Regional Symposium (ARS), is the annual conference for people in the biotechnology field to exchange ideas on projects and gain inspiration. 
            </p>
            <p>
                &emsp;&emsp;During this event, we learned about a project from teams who invest in biotechnology in Asia. It’s the first conference we participated in. During the project presentation and opinion exchange process, we  learned many about novel projects and slide designs, acknowledged the shortcomings of our work, and were inspired to explore new ideas for our presentation and improve the completeness of our project, and found new directions to improve our project design. 
            </p>
            <div id="14" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Conclusion</h1>
            </div>
            <p>
                &emsp;&emsp;Synthetic biology is a new concept for the public. Through the survey, we learned that the success of the synbio product is tightly bound with an understanding of synthetic biology. To increase the understanding of synthetic biology, we utilized social media, web games, campus walking, and a World Heart Day activity to alleviate the public prejudice. To demonstrate the power of synthetic biology, we held an Open Lab activity, and TCUS entrepreneurship competition. 
            </p>
            <p>
                &emsp;&emsp;These activities connected our PACOmega project to the future. Not only potential customers, but also a cooperating company was involved. We hope that more and more people can be convinced by the potential of synthetic biology and interested in it. Finally, we hope to gradually enhance the acceptance of synbio products, and promote the booming developments of synthetic biology. 
            </p>
                
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
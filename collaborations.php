
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    
    <div class="overview justify-content-around">
        <div class="col-7">
            <h1>Overview</h1>
            <p>
                This year, CCU_Taiwan tackles the problems of the CVD crisis by the PACOmega project. To refine our project and presentation, we reached out to other iGEM teams, professors, judges, and even the CEO of a biotech company. We also collaborated with local and global iGEMers to share each other's projects by storybook translation, website, and map. So now, please scroll down and step on our wonderful journey of collaboration with us!
            </p>
        </div>
    </div>
    
    <div class="article">
        <!-- <div class="marge" style="--width:calc(1em + 1vh)"></div> -->
        <div class="guide" id="guide">
            <div id="guide_content">
                <div class="guide_label" onclick="move_to_item('1')">
                    COLLABORATION
                </div>
                <div class="guide_label" onclick="move_to_item('2')">
                    Voices From Abroad
                </div>
                <div class="guide_sub_label" onclick="move_to_item('3')">
                    guide_sub_label
                </div>
            </div>
            <div id="expansion" onclick="guide_toggle()">
                <div class="overlap_item trapezoid"></div>
                <!-- <div class="overlap_item triangle_to_left"></div> -->
                <div class="overlap_item triangle_to_right"></div>
                
            </div>
            
            
        </div>
        <div class="in_center">
            <div id="1" class="title-label-div">
                <h1>Collaboration- Refining our PACOmega project</h1>
            </div>
            <div id="1" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Project feedback From Abroad-Exeter</h1>
            </div>
            <p>
                &emsp;&emsp;&emsp;During our IHP interview with the dietitian Miranda Chen, she told us that EPA supplement alone wasn't sufficient enough to prevent CVD. From her professional perspective, she suggested that we should also value the importance of having a healthy diet during daily life.
            </p>
            <p>
                &emsp;&emsp;&emsp;To promote healthy diets to every citizen on this beautiful planet, we initiated a CVD-Free Cookbook, inviting iGEM teams from all around the world to share special ingredients in their countries that are good for cardiovascular health. Therefore, our cookbook features cuisines that are exotic but also healthy so that people who intend to care for their vessels can check it out for ideas of daily diets.
            </p>
            <p>
                &emsp;&emsp;&emsp;The following are our CookBook partner teams: Mingdao, NYCU_Formosa, NCKU, Gems_Taiwan, Korea_HS, Copenhagen, iGEM_CSMU, and CU_Egypt.
            </p>
            <p>
                &emsp;&emsp;&emsp;During our IHP interview with the dietitian Miranda Chen, she told us that EPA supplement alone wasn't sufficient enough to prevent CVD. From her professional perspective, she suggested that we should also value the importance of having a healthy diet during daily life.
                To promote healthy diets to every citizen on this beautiful planet, we initiated a CVD-Free Cookbook, inviting iGEM teams from all around the world to share special ingredients in their countries that are good for cardiovascular health. Therefore, our cookbook features cuisines that are exotic but also healthy so that people who intend to care for their vessels can check it out for ideas of daily diets.
                The following are our CookBook partner teams: Mingdao, NYCU_Formosa, NCKU, Gems_Taiwan, Korea_HS, Copenhagen, iGEM_CSMU, and CU_Egypt.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations01.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations02.png"/>
                    <div class="triangle_to_top"></div>A small peek of our cookbook
                </div>
            </div>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Voices From Abroad</h1>
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Exeter</h2>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations03.png">
                </div>
            </div>
            <p>
                &emsp;&emsp;&emsp;During our online meetup with Exeter iGEM team, they gave us inspiration on how we could improve our presentation, and we helped each other in finding both of our shortcomings. They are working on the topic of synthetic silk-graphene composites, which is the potential candidate to reduce concerns over silk farming and plastic waste.
            </p>
            <p>
                &emsp;&emsp;&emsp;Although our projects didn't share similar approaches or goals, that gave us the opportunities to cut in a completely different and novel perspective on listening to others' presentations.
            </p>
            <p>
                &emsp;&emsp;&emsp;After the meeting, not only did we get feedback and some questions to clarify deeper, we also learned from their presentation skill, and changed our original lengthy and tedious slides into a more simplified and concise version.
            </p>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Korea_HS</h1>
            </div>
            <p>
                &emsp;&emsp;&emsp;Our virtual meeting with iGEM Korea_HS exchanged both of our projects' ideas. We gave comments on each other's presentations and asked questions about both of our improvements, including details about how we integrate into society, and how to be innovative in promoting each of our projects. After the meeting, they asked us to participate in several of their projects and conferences they held, and we surely gained a lot of new abilities and knowledge due to these collaboration opportunities.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Copenhagan</h1>
            </div>
            <p>
                &emsp;&emsp;&emsp;Our project and team Copenhagen's share the same goal of protecting marine resources but in different approaches. They focused on making fishing nets, which take a great account of marine garbage nowaday, biodegradable; Whileist, our team tackled the problem of marine resources diminishing by producing EPA supplements that are commonly taken from fish and fish oil by synthetic biology. During our meeting, both of our teams shared our presentations and how we tackle the care of marine resources. Not only did we exchange opinions on both our projects, but they also gave us advice on our CVD-free cookbook to focus on Mediterranean diets due to their profession in food science, which we deeply appreciated.
            </p>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Local Meetups</h1>
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Taiwan iGEM meet ‘22</h1>
            </div>
            <p>
                &emsp;&emsp;&emsp;On 8/22, we joined Taiwan iGEM meet ‘22 to exchange our ideas with other Taiwan iGEM teams. This meet-up was hosted by NCKU_Tainan iGEM team, and the participants include NCHU_Taichung, iGEM NTHU, NYCU_Formosa, iGEM KCIS Xiugang, iGEM CSMU, iGEM Mingdao, GEMS Taiwan, NYCU_Taipei, and our team. During the conference, all participants gathered together to discuss each team's projects and gave concrete feedback in the hope of improving, including presentation and inspecting and learning each other's poster.
            </p>
            <p>
                &emsp;&emsp;&emsp;After the conference, we were inspired to further examine our Quantitative Agar Faucet . As a result, we reached out to Prof. Lee to explore potential development opportunities. Besides, this meetup gave us a chance to have deeper communication with teams around Taiwan, and is a leading of many of the following collaborations, including the the iGEM theme song project with CSMU_Taiwan, iGEM map with NTHU_Taiwan, and the infographic exchange with Gems_Taiwan.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations08.png">
                    <div class="triangle_to_top"></div>Exchange ideas of poster during the meet-up
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations06.png">
                    <div class="triangle_to_top"></div>Demo our web game to other teams
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations07.png">
                    <div class="triangle_to_top"></div>Group photo in the venue
                </div>
            </div>
            <div id="6" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">TCUS Entrepreneurship Competition</h1>
            </div>
            <p>
                &emsp;&emsp;&emsp;With the experience in <i><b>Taiwan iGEM meet ‘22</b></i>, we hosted a competition for the teams in Taiwan Comprehensive University System (TCUS), including NCKU_Tainan and NCHU_Taichung, to attend and present projects on our CCU campus to imitate the competitive vibe. The competition let the participants be more prepared before the Grand Jamboree. Not only did we want to interchange ideas between different teams, we also wanted to seek suggestions from experts that are already working in the bioscience industry.
            </p>
            <p>
                &emsp;&emsp;&emsp;Therefore, we invited several professors from academic and the bioscience industry, including Professor I-Son Grace Ng, Professor Liang-Chun Wang, Professor Shu-Yuan Yang, and Dr. Lance Chang, the CEO of TWBIO. They gave keynote speeches on either their research, novel techniques, how synthetic biology has already been applied on the market, and even an experience of judging an iGEM competition. The TCUS competition is an event that values industry-academia cooperation, which is a future trend that will definitely lead to more innovative ideas and techniques to be created.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations09.png">
                    <div class="triangle_to_top"></div>Group photo in our campus, National Chung Cheng University
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations10.png">
                    <div class="triangle_to_top"></div>Keynote speech given by professor Shu Yuan Yang about her judging experience in iGEM competiton
                </div>
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations11.png">
                    <div class="triangle_to_top"></div>Our team presenting our project
                </div>
            </div>
            <div id="7" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Connecting iGEMers Around The World</h1>
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">iGEM_CSMU</h1>
            </div>
            <p class="h25">iGEM Theme Song</p>
            <p>
                &emsp;&emsp;&emsp;We got acquainted with iGEM_CSMU at Taiwan iGEM Meet '22. After the meet-up, they created an iGEM theme song and invited us to record the song and shoot the music video together. With a catchy melody and lyrics describing the days during the preparation of iGEM, we spread the joy and fun of participating in a synthetic biology competition. Also, iGEM_CSMU has translated the theme song into English, so the international iGEM community can share this song and its delight anywhere at any time.
            </p>
            <div id="8" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">CU_Egypt</h1>
            </div>
            <p class="h25">Translate Storybook Into Chinese Mandarin</p>
            <p>
                &emsp;&emsp;&emsp;This year, CU_Egypt is working on treating Alzheimer's Disease, and they wrote a book to spread awareness of it. The content of the book is the diary of a patient that has Alzheimer's Disease, and has knowledge of the disease contained. To have more people be cautious of Alzheimer's, they ask for different iGEM teams to help them translate the book into various languages. Our team helped translate their storybook into Chinese Mandarin for people in Sinophone districts to read and learn about Alzheimer's disease, and we also obtained a lot of new knowledge during the process.
            </p>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations12.png">
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations13.png">
                </div>
            </div>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations14.png">
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations15.png">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>The Storybook in Chinese Mandarin
            </div>            
            <div id="9" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Korea_HS</h1>
            </div>
            <p class="h25">The Badge Project</p>
            <p>
                &emsp;&emsp;&emsp;Korea_HS launched a project called the “iGEMers' Badge Project” that gave iGEM teams opportunities to create their design for a badge. We gave them our badges, and Korea_HS shipped the badges back to us in Taiwan. It's a meaningful project that connects all iGEMers together, creating a global iGEM community and connecting every one of us.
            </p>
            <p class="h25">SDG Conference</p>
            <p>
                &emsp;&emsp;&emsp;To emphasize the importance of the Sustainable Development Goals (SDGs) and discuss how we can take action to make the world a better place, we participated in a SDG conference held by Korea_HS online. The conference lasted two days and included several meaningful agendas.
            </p>
            <p>
                &emsp;&emsp;&emsp;On the first day, every presenter, including five iGEM teams and twelve individual clubs interested in and contributing to achieving SDG goals, presented every one of their projects and demonstrated how they linked with SDGs. On the second day, all the attendees were divided into two groups and wrote a contract that included ways to improve the world by implementing SDG goals.
            </p>
            <p>
                &emsp;&emsp;&emsp;During this conference, we not only get to know how people and organizations worldwide are dedicated to improving all the existing problems in the world, but we also get to think a step forward: How can we all link together and make the world better as a whole? This conference is a great benefit that takes all of us a step further toward the vision. We hope there will be more and more similar opportunities that bring everyone who has devoted themselves to the same task together: To exchange our ideas, our projects, and most importantly, to share our dream of a brighter future.
            </p>
            <div class="full_block">
                <div class="img" style="--width:35%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations17.png">
                </div>
                <div class="img" style="--width:35%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations18.png">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>The SDGs our team presented on the conference
            </div>
            <div id="10" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">NTHU_Taiwan</h1>
            </div>   
            <p class="h25">The iGEM Map</p>
            <p>
                &emsp;&emsp;&emsp;NTHU_Tawian created an iGEM map this year to promote the importance of synthetic biology and point out where these experiments are located in the world. They collected characters created by various iGEM groups and put it on a map so that everyone can immerse in this global village of synthetic biology. CCU_Taiwan, which is located in Minxiong, Chiayi, and our own iconic E. coli character can be found in the southern part of Taiwan!
            </p>
            <div class="full_block">
                <div class="img" style="--width:90%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations19.png">
                    <div class="triangle_to_top"></div>The iGEM Map that NTHU_Taiwan created
                </div>
            </div>
            <div id="11" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Promoting Our Project To The World</h1>
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Gems_Taiwan, Korea_HS, Thailand_RS</h1>
            </div>
            <p class="h25">Infographic Exchange Project</p>
            <p>
                &emsp;&emsp;&emsp;This year, Gems_Taiwan, Korea_HS, and Thailand_RS partnered together and created an infographic exchange project. They gathered infographics from different iGEM teams and translated them into Mandarin, Korean, and Thai, to eliminate barriers between countries and let people who don't speak English be able to learn about iGEM projects. We participate in this project by giving our team's infographic, hoping the world can know more about the crisis of cardiovascular disease and how we can provide a solution.
            </p>
            <div class="full_block">
                <div class="img" style="--width:35%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations20.png">
                </div>
                <div class="img" style="--width:35%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations21.png">
                </div>
            </div>
            <div class="full_block">
                <div class="img" style="--width:35%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations22.png">
                </div>
                <div class="img" style="--width:35%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations23.png">
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Our infographic in English, Korean, and Thai
            </div>
            <div id="11" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">NCHU_Taiwan</h1>
            </div>
            <p class="h25">NCHU Taiwan iGEM youtube channel</p>
            <p>
                &emsp;&emsp;&emsp;NCHU_Taichung created a youtube channel called “Taiwan iGEM”, where they will post videos created by several iGEM teams around Taiwan. The contents of the videos are about each of our projects, but in mandarin, so that the public in Taiwan can understand them easily. Furthermore, short videos like the ones on “Taiwan iGEM” youtube channel are a trend nowadays so that people can not only obtain knowledge fast and quick, but also can arouse their attention on synthetic biology in a short time.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations24.png">
                    <div class="triangle_to_top"></div>The YouTube page of Taiwan iGEM
                </div>
            </div>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>

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
    <img class="full_size_image" src="<?php echo imgfile;?>/collaborations/banner-collaborations.png" alt=""> 
    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="color: #EA2B1F;">Overview</h1>
            </div>
            <p>
                This year, CCU_Taiwan tackled the problems of the cardiovascular disease (CVD) crisis by the PACOmega project. To refine our project and presentation, we reached out to other iGEM teams, professors, judges, and even the CEO of a biotech company. We also collaborated with local and global iGEMers to share each other's projects by storybook translation, website, and map. So now, please scroll down and step on our wonderful journey of collaboration with us!
            </p>
        </div>
    </div>
    
    <div class="article">
        <!-- <div class="marge" style="--width:calc(1em + 1vh)"></div> -->
        <div class="in_center">
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Refining our PACOmega project</h1>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Project feedback From Abroad - <a href="https://2022.igem.wiki/exeter/index.html" class="link_subtitle_no_bgc">Exeter</a></h2>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations01.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;During our online meetup with the Exeter iGEM team, they gave us suggestions on how we could improve our presentation, and we helped each other in finding our shortcomings. They are working on the topic of synthetic silk-graphene composites, which is a potential candidate to reduce concerns over silk farming and plastic waste. Although our projects didn’t share similar approaches or goals, that gave us the opportunity to provide a completely different and novel perspective by listening to others’ presentations.
            </p>
            <p>
                &emsp;&emsp;After the meeting, we got feedback and some questions to clarify our presentation, and we also learned from their presentation skills. We changed our original lengthy and tedious slides into a more simplified and concise version.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Project feedback From Abroad - <a href="https://2022.igem.wiki/korea-hs/collaborations" class="link_subtitle_no_bgc">Korea_HS</a></h2>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations02.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In our virtual meeting with iGEM Korea_HS we exchanged information about our projects. We gave comments on each other’s presentations and asked questions about how to improve, including details about how we could integrate into society and how to be innovative in promoting our projects. After the meeting, they asked us to participate in several of their projects and conferences (link of Korea_HS’s badge project), and we indeed gained a lot of new abilities and knowledge due to these collaboration opportunities.
            </p>
            <div id="5" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Project feedback From Abroad - <a href="https://2022.igem.wiki/ucopenhagen/collaborations#item2" class="link_subtitle_no_bgc">Copenhagan</a></h2>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations03.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Our project and team Copenhagen’s share the same goal of protecting marine resources, but with different approaches. They focused on making biodegradable fishing nets, since nets compose a great amount of marine garbage nowadays. On the other hand, our team tackled the problem of diminishing marine resources by producing EPA supplements that are commonly made from fish and by making fish oil using synthetic biology. During our meeting, both teams shared our presentations and how we tackle the care of marine resources. Not only did we exchange opinions on both our projects, but they also gave us advice on our CVD-free cookbook to focus on Mediterranean diets due to their experience in food science, which we deeply appreciated.
            </p>
            <div id="6" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Project feedback from local - Taiwan iGEM meet '22</h2>
            </div>
            <p>
                &emsp;&emsp;On 8/22, we joined <b>Taiwan iGEM meet ‘22</b>, a live conference, to exchange our ideas with other Taiwan iGEM teams. The <a href="https://2022.igem.wiki/ncku-tainan/collaborations" class="link_subtitle">NCKU_Tainan</a> iGEM team hosted this meet-up, and the participants included <a href="https://2022.igem.wiki/nchu-taichung/" class="link_subtitle">NCHU_Taichung</a>, <a href="https://2022.igem.wiki/nthu-taiwan/collaborations" class="link_subtitle">iGEM NTHU</a>, <a href="https://2022.igem.wiki/nycu-formosa/collaborations" class="link_subtitle">NYCU_Formosa</a>, <a href="https://2022.igem.wiki/kcis-xiugang-taipei/collaborations" class="link_subtitle">iGEM KCIS Xiugang</a>, <a href="https://2022.igem.wiki/csmu-taiwan/collaborations#taiwanigemmeet22" class="link_subtitle">iGEM CSMU</a>, <a href="https://2022.igem.wiki/mingdao/collaborations#NCKU_Tainan%202022%20and%20Taiwan%20iGEMers%20Jamboree" class="link_subtitle">iGEM Mingdao</a>, <a href="https://2022.igem.wiki/gems-taiwan/collaborations#Taiwan-Synbio-Alliance-Meetup" class="link_subtitle">GEMS Taiwan</a>, <a href="https://2022.igem.wiki/nycu-taipei/partnership#collaboration" class="link_subtitle">NYCU_Taipei</a>, and our team. During the conference, all participants gathered to discuss each team’s projects and gave concrete feedback in the hope of improving, including presentation and inspecting and learning from each other’s posters.
            </p>
            <p>
                &emsp;&emsp;After the conference, we were inspired to examine further our Quantitative Agar Faucet (link to DL’s quantitative agar faucet). As a result, we reached out to Prof. Lee (link to professor Lee’s IHP page) to explore potential development opportunities. Besides, this meetup gave us a chance to have deeper communication with teams around Taiwan and led to many of the following collaborations, including the iGEM theme song project with CSMU_Taiwan (link), iGEM map with NTHU_Taiwan (link), and the infographic exchange with Gems_Taiwan (link).
            </p>            
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations04.png"/>
                    <div class="triangle_to_top"></div>Exchange ideas of poster during the meet-up           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations05.png"/>
                    <div class="triangle_to_top"></div>Demo our web game to other teams           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations06.png"/>
                    <div class="triangle_to_top"></div>Group photo in the venue           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="7" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Project feedback from local - TCUS Entrepreneurship Competition</h2>
            </div>
            <p>
                &emsp;&emsp;After the experience in <i>Taiwan iGEM meet '22</i>, we hosted a competition for the teams in Taiwan Comprehensive University System (TCUS), a group of four universities in southern Taiwan, including <a href="https://2022.igem.wiki/ncku-tainan/collaborations" class="link_subtitle">NCKU_Tainan</a> and <a href="https://2022.igem.wiki/nchu-taichung/" class="link_subtitle">NCHU_Taichung</a>, to attend and present projects on our CCU campus to imitate the competitive vibe of the Grand Jamboree. Not only did we want to interchange ideas between different teams, but we also wanted to seek suggestions from experts already working in the bioscience industry. 
            </p>
            <p>
                &emsp;&emsp;Therefore, we partnered with NCKU_Tainan to invite several professors from the academic and the bioscience industry, including Professor <a href="https://www.che.ncku.edu.tw/index.php?inter=staff&cid=3&kind=%E7%B8%BD%E8%A1%A8&id=101" class="link_subtitle">I-Son Grace Ng</a> with synthetic biology expertise, Professor <a href="https://mbr.nsysu.edu.tw/p/406-1260-200563,r3899.php?Lang=zh-tw" class="link_subtitle">Liang-Chun Wang</a> with marine biology expertise, Dr. Lance Chen, the CEO of <a href="https://www.twbioscience.com/about-us/" class="link_subtitle">TWBIO</a>, and Professor <a href="https://ls.cgu.edu.tw/p/412-1073-5044.php?Lang=zh-tw" class="link_subtitle">Shu-Yuan Yang</a>, a former iGEM judge. They gave keynote speeches on either their research, novel techniques, how synthetic biology has already been applied in the market, and even the experience of judging an iGEM competition. The TCUS competition is an event that values industry-academia cooperation, a future trend that will definitely lead to more innovative ideas and techniques.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations07.png"/>
                    <div class="triangle_to_top"></div>Group photo in our campus, National Chung Cheng University           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations08.png"/>
                    <div class="triangle_to_top"></div>Keynote speech given by professor Shu Yuan Yang about her judging experience in iGEM competiton           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations09.png"/>
                    <div class="triangle_to_top"></div>Our team presenting our project           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="8" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">United we stand</h1>
            </div>
            <div id="9" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Our PACOmega project - <i>CCU_Taiwan</i></h2>
            </div>
            <p>
                &emsp;&emsp;During our IHP interview with dietitian Miranda Chen (link to dietitian’s IHP page), she told us that an EPA supplement alone wasn’t sufficient to prevent CVD. From her professional perspective, she suggested that we should also emphasize the importance of having a healthy diet and daily life.
            </p>
            <p>
                &emsp;&emsp;To promote healthy diets for every citizen on this beautiful planet, we initiated a CVD-Free Cookbook, inviting iGEM teams from around the world to share special recipes from their countries that are good for cardiovascular health. Therefore, our cookbook features cuisines that are exotic but also healthy so that people who intend to care for their vessels can check it out for ideas for daily diets.
            </p>
            <p>
                &emsp;&emsp;Our CookBook partner teams are: <a href="https://2022.igem.wiki/mingdao/collaborations#CCU_Taiwan" class="link_subtitle">Mingdao iGEM</a>, <a href="https://2022.igem.wiki/nycu-formosa/collaborations" class="link_subtitle">NYCU_Formosa</a>, <a href="https://2022.igem.wiki/ncku-tainan/collaborations" class="link_subtitle">NCKU_Tainan</a>, <a href="https://2022.igem.wiki/gems-taiwan/collaborations#CCU-Taiwan" class="link_subtitle">Gems_Taiwan</a>, <a href="https://2022.igem.wiki/korea-hs/collaborations" class="link_subtitle">Korea_HS</a>, <a href="https://2022.igem.wiki/ucopenhagen/collaborations#item2" class="link_subtitle">Copenhagen</a>, <a href="https://2022.igem.wiki/csmu-taiwan/collaborations#themesong" class="link_subtitle">iGEM_CSMU</a>, and <a href="https://2022.igem.wiki/cu-egypt/collaborations.html" class="link_subtitle">CU_Egypt</a>.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations10.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations11.png"/>
                    <div class="triangle_to_top"></div>A small peek of our cookbook           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="10" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The iGEM Theme Song project - <i>iGEM_CSMU</i></h2>
            </div>
            <p>
                &emsp;&emsp;We got acquainted with iGEM_CSMU at <b>Taiwan iGEM Meet '22</b>. After the meet-up, they created an <a href="https://2022.igem.wiki/csmu-taiwan/collaborations#themesong" class="link_subtitle">iGEM theme song</a> and invited us to record the song and shoot a music video together. With a catchy melody and lyrics describing the days during the preparation of iGEM, we spread the joy and fun of participating in a synthetic biology competition. Also, iGEM_CSMU has translated the theme song into English, so the international iGEM community can share this song and its delight anywhere at any time.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="11" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The iGEM Map project - <i>NTHU_Taiwan</i></h2>
            </div>
            <p>
                &emsp;&emsp;<a href="https://2022.igem.wiki/nthu-taiwan/collaborations" class="link_subtitle">NTHU_Tawian</a> created an iGEM map this year to promote the importance of synthetic biology and point out where these experiments are located in the world. They collected characters created by various iGEM groups and put them on a map so that everyone can be immersed in this global village of synthetic biology. CCU_Taiwan, which is located in Minxiong, Chiayi, and our own iconic <i>E. coli</i> character can be found in the southern part of Taiwan!
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations12.png"/>
                    <div class="triangle_to_top"></div>The iGEM Map that NTHU_Taiwan created           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="12" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The Alzheimer project - <i>CU_Egypt</i></h2>
            </div>
            <p>
                &emsp;&emsp;This year, <a href="https://2022.igem.wiki/cu-egypt/collaborations.html" class="link_subtitle">CU_Egypt</a> is working on treating Alzheimer’s Disease, and they wrote a book to spread awareness of it. The content of the book is the diary of a patient that has Alzheimer’s Disease, and contains knowledge of the disease. To make more people more aware of Alzheimer's, they asked different iGEM teams to help them translate the book into various languages. Our team helped translate their storybook into Chinese Mandarin for people in Sinophone districts to read and learn about Alzheimer’s disease, and we also obtained a lot of new knowledge during the process.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="left_block">
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations13.png"/>
                </div>
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations14.png"/>
                </div>
            </div>
            <div class="left_block">
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations15.png"/>
                </div>
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations16.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>The Storybook in Chinese Mandarin           
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="13" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The Badge Project - Korea_HS</h2>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations17.png"/>
                </div>
            </div>
            <p>
                &emsp;&emsp;<a href="https://2022.igem.wiki/korea-hs/collaborations" class="link_subtitle">Korea_HS</a> launched a project called the “iGEMers’ Badge Project” that gave iGEM teams opportunities to create their design for a badge. We gave them our badges, and Korea_HS shipped the badges back to us in Taiwan. It’s a meaningful project that connects all iGEMers together, creating a global iGEM community and connecting every one of us.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="14" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The SDG Conference - Korea_HS</h2>
            </div>
            <p>
                &emsp;&emsp;To emphasize the importance of the Sustainable Development Goals (SDGs), which include promotion of human health and conservation of marine resources, and discuss how we can take action to make the world a better place, we participated in a SDG conference held by <a href="https://2022.igem.wiki/korea-hs/collaborations" class="link_subtitle">Korea_HS</a> online. The conference lasted two days and included several meaningful agendas.
            </p>
            <p>
                &emsp;&emsp;On the first day, every presenter, including five iGEM teams and twelve individual clubs interested in and contributing to achieving SDG goals, presented their projects and demonstrated how they linked with SDGs. On the second day, all the attendees were divided into two groups and wrote a contract that included ways to improve the world by implementing SDG goals.
            </p>
            <p>
                &emsp;&emsp;During this conference, we not only got to know how people and organizations worldwide are dedicated to improving all the existing problems in the world, but we also got to think a step forward: How can we all link together and make the world better as a whole? This conference was a great benefit that took all of us a step further toward the vision. We hope there will be more and more similar opportunities that bring everyone who has devoted themselves to the same task together: To exchange our ideas, our projects, and most importantly, to share our dream of a brighter future.
            </p>
            <div class="full_block">
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations18.png"/>
                </div>
                <div class="img" style="--width:40%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations19.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>The SDGs our team presented on the conference           
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="15" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Together, we louder</h1>
            </div>
            <div id="16" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The Infographic Exchange Project -  <i>Gems_Taiwan</i>, <i>Korea_HS</i>, <i>Thailand_RS</i></h2>
            </div>
            <p>
                &emsp;&emsp;This year, <a href="https://2022.igem.wiki/gems-taiwan/partnership" class="link_subtitle">Gems_Taiwan</a>, Korea_HS, Thailand_RIS, and <a href="https://2022.igem.wiki/uioslo-norway/partnership" class="link_subtitle">UiOslo_Norway</a> partnered together to create an infographic exchange project. We gathered infographics from different iGEM teams and translated them into Mandarin, Korean, Thai, and Norwegian, to eliminate barriers between countries and allow people who don't speak English to learn about iGEM projects. We participated in this project by giving our team’s infographic, hoping the world can know more about the crisis of cardiovascular disease and how we can provide a solution.
            </p>
            <div class="left_block">
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations20.png"/>
                </div>
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations21.png"/>
                </div>
            </div>
            <div class="left_block">
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations22.png"/>
                </div>
                <div class="img" style="--width:49%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations23.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Our infographic in English, Korean, Norwegian and Thai           
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="17" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">NCHU Taiwan iGEM youtube channel- <i>NCHU_Taiwan</i></h2>
            </div>
            <p>
                &emsp;&emsp;<a href="https://2022.igem.wiki/nchu-taichung/" class="link_subtitle">NCHU_Taichung</a> created a YouTube channel called "<a href="https://www.youtube.com/channel/UCS1MK60X7kBsEvcOowSieCQ" class="link_subtitle">Taiwan iGEM</a>", where they will post videos created by several iGEM teams around Taiwan. The contents of the videos are about each of our projects, but in Mandarin, so that the public in Taiwan can understand them easily. Furthermore, short videos like the ones on "<a href="https://www.youtube.com/channel/UCS1MK60X7kBsEvcOowSieCQ" class="link_subtitle">Taiwan iGEM</a>" YouTube channel are a trend nowadays so that people can not only obtain knowledge quickly, but also can arouse their attention on synthetic biology in a short time.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/collaborations/collaborations24.png"/>
                    <div class="triangle_to_top"></div>The YouTube page of Taiwan iGEM           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="18" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Summary</h1>
            </div>
            <p>
                &emsp;&emsp;Through collaboration, we gained advice from others and participated in their projects, which is a mutual benefit for all of us. The process of our collaboration with various iGEM teams is a combination of communicating, learning, improving, and most important of all, a fruitful journey that brings the whole iGEM community closer together.
            </p>   
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
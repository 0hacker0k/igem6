<!doctype html> 
<head>
    <title>wiki</title>
    <meta charset="UTF-8" />
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/index.css">
</head>

<body onload="load_finish()">
    <script>
        window.onerror = function (msg, url, line) {
            if (msg == "[IFRAME ERROR MESSAGE]") {
                console.log(1);
                return true
            }
            else {
                console.log(2);
                //do nothing
            }
        }
    </script>
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
            <img id="team_name" src="<?php echo imgfile;?>/home/team-name.png">
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
            Cardiovascular disease (CVD) is one of the most severe diseases worldwide. In 2019, an estimated 17.9 million people died from CVD, representing 32% of all global deaths 
            <a href="https://www.who.int/news-room/fact-sheets/detail/cardiovascular-diseases-(cvds)">(WHO official website).</a>
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_5">
        <!-- <img id="team_name" src="<?php echo imgfile;?>/home/team_name.png"> -->
        <img id="page5_epa" src="<?php echo imgfile;?>/home/page5-epa.png">
    </div>
    <div class="page" style="top:200%;" id="page_6">
        <div class="white_background">
            Modern living habits and diet cause an excess intake of cholesterol, inducing the accumulation of oxidized low-density lipoproteins (LDL) in arteries. 
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page6-role1" src="<?php echo imgfile;?>/home/page6-role1.png">
            <img class="illustration" id="page6-role2" src="<?php echo imgfile;?>/home/page6-role2.png">
            <img class="illustration" id="page6-role3" src="<?php echo imgfile;?>/home/page6-role3.png">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_7">
        <div class="white_background">
            The LDL accumulation impedes blood flow and damages the arteries, which leads to atherosclerosis, the severe form of CVD <a onclick="index_move_to_page(17)">(Berger and Naseem 2022)</a>.
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page7-role3" src="<?php echo imgfile;?>/home/page7-role3.png">
            <img class="illustration" id="page7-role4" src="<?php echo imgfile;?>/home/page7-role3.png">
            <img class="illustration" id="page7-role5" src="<?php echo imgfile;?>/home/page7-role3.png">
            <img class="illustration" id="page7-role1" src="<?php echo imgfile;?>/home/page7-role1.png">
            <img class="illustration" id="page7-role2" src="<?php echo imgfile;?>/home/page7-role2.png">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_8">
        <div class="white_background">
            Recently, daily intake of eicosapentaenoic acid (EPA) has been proven to reduce CVD efficiently, reducing the chance of death <a onclick="index_move_to_page(17)">(Peter, Joho et al. 2022)</a>.
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page8-role1" src="<?php echo imgfile;?>/home/page8-role1.png">
            <img class="illustration" id="page8-role3" src="<?php echo imgfile;?>/home/page6-role2.png">
            <img class="illustration" id="page8-role2" src="<?php echo imgfile;?>/home/page6-role2.png">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_9">
        <div class="white_background">
            EPA reduces CVD in two ways. In the arteries, EPA can split heme into biliverdin, free iron, and carbon monoxide to reduce free radicals and thus reduce oxidized LDL accumulation. EPA can also relax the surrounding smooth muscle to avoid severe CVD by enhancing nitric oxide production <a onclick="index_move_to_page(17)">(Sherratt, Libby et al. 2022)</a>.
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page9-role1" src="<?php echo imgfile;?>/home/page7-role1.png">
            <img class="illustration" id="page9-role2" src="<?php echo imgfile;?>/home/page9-role1.png">
            <!-- <img class="illustration" id="page9-role2" src="<?php echo imgfile;?>/home/page6-role2.png"> -->
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_10">
        <div class="white_background">
            However, the major source of EPA, fish oil, comes from marine fish, which are the end consumers in the food chain, leading to the accumulation of heavy metals and microplastics.
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page10-role1" src="<?php echo imgfile;?>/home/page10-role1.png">
            <!-- <img class="illustration" id="page10-role2" src="<?php echo imgfile;?>/home/page9-role1.png"> -->
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_11">
        <div class="white_background">
            Therefore, the development of a new EPA source is necessary to cover future consumption and avoid potential contamination <a onclick="index_move_to_page(17)">(Hong, Lumibao et al. 2015, Abbasi, Soltani et al. 2018, Benvenga, Fama et al. 2022)</a>.
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page11-role1" src="<?php echo imgfile;?>/home/page11-role1.png">
            <!-- <img class="illustration" id="page10-role2" src="<?php echo imgfile;?>/home/page9-role1.png"> -->
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
                    Previous research has shown that a combination of the <i>pfa</i> genes of deep-sea bacteria <i>Moritella marina</i> MP-1 and <i>Shewanella pneumatophori</i> SCRC-2738 can produce EPA in <i>E. coli</i>.
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
                    We cloned the <i>pfa A</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i> genes from MP-1, and <i>pfa B</i> gene from SCRC-2738. All these five <i>pfa</i> genes are expressed in <i>E. coli</i> to produce EPA <a onclick="index_move_to_page(17)">(Orikasa, Tanaka et al. 2009)</a>.
                </div>
            </div>
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page12-role1" src="<?php echo imgfile;?>/home/page12-role1.png">
            <!-- <img class="illustration" id="page10-role2" src="<?php echo imgfile;?>/home/page9-role1.png"> -->
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_13">
        <div id="page_13_white" class="white_background top_block">
            Cost is a core point for running a business. To reduce the cost, we increase the raw material of EPA in <i>E. coli</i> by expressing ACC complex, and add the chemical cerulenin to inhibit the competing fatty acid synthesis pathway.
        </div>
        <div id="page_13_content">
            <div id="information3">
                <li class="learn_more_title">
                    Acc complex
                </li>
                <div id="learn_more_3" class="learn_more" onclick="more_information('learn_more_3','learn_more_3_content','information4')">
                    <div class="triangle_to_right"></div>Learn more
                </div>
                <div id="learn_more_3_content" class="learn_more_content">
                    The ACC complex can increase malonyl-CoA, the raw material of EPA. The <i>ACC</i> genes (<i>AccBC</i>, <i>AccD1</i>, and <i>AccE</i>) were therefore cloned into the target plasmid and expressed in <i>E. coli</i> <a onclick="index_move_to_page(17)">(Giner-Robles, Lazaro et al. 2018)</a>.
                </div>
            </div>
            <div id="information4">
                <li class="learn_more_title">
                    Chemical cerulenin
                </li>
                <div id="learn_more_4" class="learn_more" onclick="more_information('learn_more_4','learn_more_4_content','information3')">
                    <div class="triangle_to_right"></div>Learn more
                </div>
                <div id="learn_more_4_content" class="learn_more_content">
                    Cerulenin inhibits the fatty acid synthesis pathway that competes with <i>pfa</i> genes in <i>E. coli</i>, thus increasing the efficiency of EPA production <a onclick="index_move_to_page(17)">(Satoh, Ozaki et al. 2020)</a>.
                </div>
            </div>
        </div>
        <div class="bottomleft">
            <img class="illustration" id="page13-role1" src="<?php echo imgfile;?>/home/page13-role1.png">
            <!-- <img class="illustration" id="page10-role2" src="<?php echo imgfile;?>/home/page9-role1.png"> -->
        </div>
    </div>



    <div class="page" style="top:200%;" id="page_14">
        <img id="team_logo_2" src="<?php echo imgfile;?>/home/logo.png">
    </div>
    <div class="page" style="top:200%;" id="page_15">
        <div class="typesetting_block">
            <img id="team_name_2" src="<?php echo imgfile;?>/home/team-name.png">
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_16">
        <div class="promotion-video-div">
            <iframe id="promotion-video" title="CCU_Taiwan: The EPA production from E. coli. to prevent cardiovascular diseases (2022) - Project Promotion [English]" src="https://video.igem.org/videos/embed/0f0c1ce3-b6fe-4ec3-b95b-b10aae022dee" frameborder="0" allowfullscreen="" sandbox="allow-same-origin allow-scripts allow-popups"></iframe>
        </div>
    </div>
    <div class="page" style="top:200%;" id="page_17">
        <div class="white_background">
            <li class="reference" id="r1">Abbasi, S., N. Soltani, B. Keshavarzi, F. Moore, A. Turner and M. Hassanaghaei (2018). "Microplastics in different tissues of fish and prawn from the Musa Estuary, Persian Gulf." <i>Chemosphere</i> 205: 80-87.</li>
            <li class="reference" id="r2">Benvenga, S., F. Fama, L. G. Perdichizzi, A. Antonelli, G. Brenta, F. Vermiglio and M. Moleti (2022). "Fish and the Thyroid: A Janus Bifrons Relationship Caused by Pollutants and the Omega-3 Polyunsaturated Fatty Acids." <i>Front Endocrinol (Lausanne)</i> 13: 891233.</li>
            <li class="reference" id="r3">Berger, M. and K. M. Naseem (2022). "Oxidised Low-Density Lipoprotein-Induced Platelet Hyperactivity-Receptors and Signalling Mechanisms." <i>Int J Mol Sci</i> 23(16).</li>
            <li class="reference" id="r4">Giner-Robles, L., B. Lazaro, F. de la Cruz and G. Moncalian (2018). "fabH deletion increases DHA production in Escherichia coli expressing Pfa genes." <i>Microb Cell Fact</i> 17(1): 88.</li>
            <li class="reference" id="r5">Hong, M. Y., J. Lumibao, P. Mistry, R. Saleh and E. Hoh (2015). "Fish Oil Contaminated with Persistent Organic Pollutants Reduces Antioxidant Capacity and Induces Oxidative Stress without Affecting Its Capacity to Lower Lipid Concentrations and Systemic Inflammation in Rats." <i>J Nutr</i> 145(5): 939-944.</li>
            <li class="reference" id="r6">Orikasa, Y., M. Tanaka, S. Sugihara, R. Hori, T. Nishida, A. Ueno, N. Morita, Y. Yano, K. Yamamoto, A. Shibahara, H. Hayashi, Y. Yamada, A. Yamada, R. Yu, K. Watanabe and H. Okuyama (2009). "pfaB products determine the molecular species produced in bacterial polyunsaturated fatty acid biosynthesis." <i>FEMS Microbiol Lett</i> 295(2): 170-176.</li>
            <li class="reference" id="r7">Peter P. Toth, M. John Chapman, Klaus G. Parhofer, John R. Nelson (2022). "Differentiating EPA from EPA/DHA in cardiovascular risk reduction "<i>American Heart Journal Plus: Cardiology Research and Practice</i> 17</li>
            <li class="reference" id="r8">Satoh, S., M. Ozaki, S. Matsumoto, T. Nabatame, M. Kaku, T. Shudo, M. Asayama and S. Chohnan (2020). "Enhancement of fatty acid biosynthesis by exogenous acetyl-CoA carboxylase and pantothenate kinase in Escherichia coli." <i>Biotechnol Lett</i> 42(12): 2595-2605.</li>
            <li class="reference" id="r9">Sherratt, S. C. R., P. Libby, D. L. Bhatt and R. P. Mason (2022). "A biological rationale for the disparate effects of omega-3 fatty acids on cardiovascular disease outcomes." <i>Prostaglandins Leukot Essent Fatty Acids</i> 182: 102450.</li>
            <li class="reference" id="r10">WHO official website: <a href="https://www.who.int/news-room/fact-sheets/detail/cardiovascular-diseases-(cvds)">https://www.who.int/news-room/fact-sheets/detail/cardiovascular-diseases-(cvds)</a></li>
        </div>
    </div>
    <div id="first_background" class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div><!-- -->
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div><!-- -->
    <!-- <img class="background" src="<?php echo imgfile;?>/home/vessel-1.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-2.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-3.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-4.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-5.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-6.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-7.png">
    <img class="background" src="<?php echo imgfile;?>/home/vessel-8.png"> -->
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <div class="background"></div>
    <!-- <div id="final_item"></div> -->
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/index.js"></script>
    <script>close_header();</script>
</body>
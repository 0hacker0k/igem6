
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/description/banner-description.png" alt="">

    <div class="article">
        <div class="in_center">
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In 2020, the World Health Organization (WHO) revealed the leading causes of death and disability worldwide, which covers the period from 2000 to 2019. Among the leading causes of death globally, heart disease remains the number one killer, which caused around 2 million deaths in 2000, and increased to 9 million in 2019. Importantly, if we extend the death number to include vascular disorders, namely cardiovascular diseases (CVDs), the number of deaths will increase to 17.9 million per year.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description01.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;The global CVD crisis makes us notice if CVD is a serious problem in Taiwan. According to the official statistics, heart disease is the secondary leading cause of death, which causes 21569 deaths per year, while the first cause, cancer, causes 48784 deaths per year. However, If we take the vascular diseases, such as cerebrovascular diseases, diabetes, hypertensive diseases, and kidney diseases, into account, the CVD-caused deaths is much more than that caused by cancer. This observation suggested that CVD is also an important issue in Taiwan.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description02.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In the human body, the cardiovascular system is responsible for transporting essential substances, such as nutrients, or oxygen to each cell, and removing the metabolic waste. The deterioration of the cardiovascular system is progressive, and the courses are complex. However, the important risk factors associated with CVDs are unhealthy diet, physical inactivity, smoking, excessive alcohol use, and aging. The effects of risk factors on individuals may show up as high blood pressure, high blood glucose, high blood lipid, and obesity.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description03.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Our university, National Chung Cheng University, is located in the Mingxiong township, which is the most aging city in Taiwan. Since we learned that aging is the important risk factor of CVDs, and the situation will only become worse in the future aging society, we decided to tackle the CVD crisis this year.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description04.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;To find out the potential solution, we first consulted a cardiologist (whose name is unshown by request) from National Taiwan University Hospital. From discussion, we learned that, due to the unexpected and violent features of serious CVDs, working on early CVD prevention is better than performing therapy. One important cause of CVD is the accumulation of oxidized low-density lipoprotein (LDL) in blood vessels, and taking eicosapentaenoic acid (EPA) supplements can reduce the risk of CVDs (Sherratt, Libby et al. 2022).
            </p>
            <p>
                &emsp;&emsp;The EPA can prevent CVDs from different aspects. In arteries, EPA preserves the membrane structure and regulates cholesterol distribution. In blood cells, EPA can split heme into several reducers to clean the free radicals, and reduce the oxidative LDL accumulation. Consequently, EPA prevents the inflammation caused by oxidative LDL. In the vascular environment, EPA can also relax the surrounding smooth muscle by enhancing nitric oxide production to avoid severe CVDs (Peter, John et al. 2022). Accordingly, EPA sounds like a promising candidate.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description05.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;However, the further survey shows that the common resource of EPA, fishes and fish oils, might have some problems.
            </p>
            <p>
                &emsp;&emsp;At first, the fish oils are the mixture of docosahexaenoic acid (DHA) and EPA, and a recent cohort study shows that the function of EPA on CVD prevention can be reset to zero if mixed with DHA (Sherratt, Libby et al. 2022). Next, fishes are the top of marine food chain, and contaminants, such as heavy metals and microplastics, may accumulate in the fish body and fish oil. In addition, using fish as a source of EPA will exhaust the marine resource. Finally, the EPA from fish oil is not vegan-friendly. The population of vegetarians is considerable and keeps increasing. Because most sources of EPA are non-vegan, a vegan-friendly EPA may open the new market.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description06.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Therefore, we decided to apply synthetic biology to generate the pure and vegan-friendly EPA.
            </p>
            <p>
                &emsp;&emsp;To produce pure EPA, we decided to express the EPA-producing genes <i>pfa A</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i> (from <i>Moritella marina</i> MP-1), and the <i>pfa B</i> gene (from <i>Shewanella pneumatophori</i>) in <i>E. coli</i>. In addition, we planned to increase the raw material, malonyl-CoA, to enhance EPA production through co-expressing the ACC complex (from <i>Corynebacterium glutamicum</i>) with <i>pfa</i> genes. Finally, the chemical cerulenin will be added to inhibit the competing fatty acid synthesis pathway and consequently enhance the function of <i>pfa</i> genes.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:95%;">
                    <img src="<?php echo imgfile;?>/description/description07.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:95%;">
                    <img src="<?php echo imgfile;?>/description/description08.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;EPA is one of the answers to solve the CVD crisis. However, there are still other risk factors associated with CVDs. To prevent CVD in a more comprehensive way, we consulted the dietitian Miranda Chen. She pointed out that CVDs prevention should initiate from the optimization of daily routines, which can be specifically themed on the emphasizing of daily exercises and diets, in such cultivation of healthy daily habits can the public achieve artery caring.
            </p>
            <p>
                &emsp;&emsp;Accordingly, we decided to raise public awareness of CVD severity and draw more attention to CVD prevention. Besides, we also tried to emphasize the importance of a healthy lifestyle. These ideas all come together and form  the PACOmega project.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description09.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description10.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In the PACOmega project, we divided our solution of CVD prevention into two parts. The first one is healthy living and the secondary one is  healthy eating. 
            </p>
            <p>
                &emsp;&emsp;In the healthy living part, we promote the concept of healthy diet through online cookbooks, and regular exercising through campus walking activity. We also generated a webgame and held an openlab activity to share the information about the CVD crisis and the beauty of synthetic biology.
            </p>
            <p>
                &emsp;&emsp;In the healthy eating part, we applied synthetic biology to produce pure EPA. This approach will provide an alternative source of EPA supplement, which covers what fish oils can not achieve. 
            </p>
            <p>
                &emsp;&emsp;Together, we believe that the PACOmega project will show its value and become a good answer to the CVD crisis.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h25">
                Reference:
            </p>
            <ol>
                <li>
                    Sherratt, S. C. R., P. Libby, D. L. Bhatt and R. P. Mason (2022). "A biological rationale for the disparate effects of omega-3 fatty acids on cardiovascular disease outcomes." Prostaglandins Leukot Essent Fatty Acids 182: 102450.
                </li>
                <li>
                    Peter, P. Toth, M. J. Chapman, K. G.Parhofer, J. R. Nelsone (2022). "Differentiating EPA from EPA/DHA in cardiovascular risk reduction." American Heart Journal Plus: Cardiology Research and Practice 17:100148
                </li>
            </ol>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>

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
                &emsp;&emsp;In 2020, the World Health Organization (WHO) revealed the leading causes of death and disability worldwide, covering the period from 2000 to 2019. Among the leading causes of death globally, heart disease remains the number one killer, causing around 2 million deaths in 2000, but 9 million in 2019. Importantly, if we include vascular disorders, the number of deaths in 2019 due to all cardiovascular diseases (CVDs), was 17.9 million.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description01.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;This global CVD crisis made us notice that CVD is also a serious problem in Taiwan. According to the official statistics, heart disease is the second leading cause of death, 21569 deaths per year, while the first cause, cancer, leads to 48784 deaths per year. However, If we consider all vascular diseases, such as cerebrovascular diseases, diabetes, hypertensive diseases, and kidney diseases, the number of CVD-related deaths is far more than those caused by cancer. This observation suggested that CVD is also an important issue in Taiwan.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description02.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In the human body, the cardiovascular system is responsible for transporting essential substances, such as nutrients and oxygen to each cell, and removing the metabolic waste. The deterioration of the cardiovascular system is progressive, and the courses are complex. However, important risk factors associated with CVDs are unhealthy diet, physical inactivity, smoking, excessive alcohol use, and aging. The effects of risk factors on individuals may show up as high blood pressure, high blood glucose, high blood lipid, and obesity.
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
                &emsp;&emsp;To find a potential solution, we first consulted a cardiologist (name not shown, by request) from National Taiwan University Hospital. From our discussion, we learned that, due to the unexpected and violent features of serious CVDs, early CVD prevention is better than therapy. One important cause of CVD is the accumulation of oxidized low-density lipoprotein (LDL) in blood vessels, but taking eicosapentaenoic acid (EPA) supplements can reduce the risk of CVDs (Sherratt, Libby et al. 2022).
            </p>
            <p>
                &emsp;&emsp;EPA can prevent CVDs in several ways. In arteries, EPA preserves the membrane structure and regulates cholesterol distribution. In blood cells, EPA can split heme into several reducers to remove free radicals, and prevent the oxidation of LDL. Consequently, EPA decreases the inflammation caused by oxidative LDL. In the vascular environment, EPA can also relax the surrounding smooth muscle by enhancing nitric oxide production to avoid severe CVDs (Peter, John et al. 2022). Accordingly, EPA sounds like a promising candidate as a dietary supplement.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description05.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;However, our further survey showed that the common sources of EPA, fish and fish oils, might have some problems. 
            </p>
            <p>
                &emsp;&emsp;First, fish oils are a mixture of docosahexaenoic acid (DHA) and EPA, and a recent cohort study showed that the benefit of EPA for CVD prevention can be reduced to zero if mixed with DHA (Sherratt, Libby et al. 2022). Next, fish are the top of the marine food chain, so contaminants, such as heavy metals and microplastics, may accumulate in the fish and fish oil. In addition, using fish as a source of EPA will exhaust the marine resources. Finally, the EPA from fish oil is not vegan-friendly. The population of vegetarians is considerable and keeps increasing. Because most sources of EPA are non-vegan, a vegan-friendly EPA may open the new market. 
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/description/description06.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Therefore, we decided to apply synthetic biology to generate pure and vegan-friendly EPA.
            </p>
            <p>
                &emsp;&emsp;To produce pure EPA, we decided to express the EPA-producing genes <i>pfa A</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i> (from <i>Moritella marina</i> MP-1), and the <i>pfa B'</i> gene (from <i>Shewanella pneumatophori</i>) in <i>E. coli</i>. In addition, we planned to increase the raw material, malonyl-CoA, to enhance EPA production through co-expressing the ACC complex (from Corynebacterium glutamicum) with <i>pfa</i> genes. Finally, the chemical cerulenin will be added to inhibit the competing fatty acid synthesis pathway and consequently enhance the function of <i>pfa</i> genes.
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
                &emsp;&emsp;EPA is one of the answers to solve the CVD crisis. However, there are still other risk factors associated with CVDs. To prevent CVD in a more comprehensive way, we consulted the dietitian Miranda Chen. She pointed out that CVD prevention should begin with the optimization of daily routines, particularly daily exercises and diet, and that such cultivation of healthy daily habits can improve vascular health.
            </p>
            <p>
                &emsp;&emsp;Accordingly, we decided to raise public awareness of CVD severity and draw more attention to CVD prevention. Concurrently, we also tried to emphasize the importance of a healthy lifestyle. These ideas all came together to form  the PACOmega project.
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
                &emsp;&emsp;In the PACOmega project, we divided our solution of CVD prevention into two parts. The first is healthy living and the second is  healthy eating.
            </p>
            <p>
                &emsp;&emsp;For the healthy living part, we promoted the concept of healthy diet through online cookbooks, and promoted regular exercise through a campus walking activity. We also generated a web game and held an openlab activity to share information about the CVD crisis and the beauty of synthetic biology.
            </p>
            <p>
                &emsp;&emsp;In the healthy eating part, we applied synthetic biology to produce pure EPA. This approach will provide an alternative source of EPA supplement, which covers what fish oils can not achieve.
            </p>
            <p>
                &emsp;&emsp;Together, we believe that the PACOmega project will be a valuable addition to solving the CVD crisis.
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
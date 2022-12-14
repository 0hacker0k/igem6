
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
                Raise concern about CVD
            </div>
            <div class="guide_sub_label" onclick="move_to_item('3')">
                Rationale
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4')">
                Activities and Target audiences
            </div>
            <div class="guide_label" onclick="move_to_item('5')">
                Alternative source of pure EPA
            </div>
            <div class="guide_sub_label" onclick="move_to_item('6')">
                Rationale
            </div>
            <div class="guide_label" onclick="move_to_item('7')">
                Product Design
            </div>
            <div class="guide_sub_label" onclick="move_to_item('8')">
                Synthetic biology based EPA generation
            </div>
            <div class="guide_sub_label" onclick="move_to_item('9')">
                Vegan-friendly capsule
            </div>
            <div class="guide_sub_label" onclick="move_to_item('10')">
                Dark storage bottle
            </div>
            <div class="guide_sub_label" onclick="move_to_item('11')">
                Defining the dosage
            </div>
            <div class="guide_sub_label" onclick="move_to_item('12')">
                User’s information
            </div>
        </div>
        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
            
        </div>    
    </div>
    <img class="full_size_image" src="<?php echo imgfile;?>/implementation/banner-implementation.png" alt=""> 
    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="color: #EA2B1F;">Overview</h1>
            </div>    
            <p>
                Being the best known deadly disease of this era, cardiovascular disease (CVD) issue is definitely an issue that needs to be resolved. To prevent the CVD crisis, we established the PACOmega project to raise concern about CVD, and to provide an alternative source of eicosapentaenoic acid (EPA) supplements.
            </p>
        </div>
    </div>

    
    

    <div class="article">
        <div class="in_center">
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">To raise concern about CVD</h1>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Rationale</h2>
            </div>
            <p>
                &emsp;&emsp;According to the statistical data of World Health Organization, in 2019, 32% of deaths worldwide were caused by CVD. In Taiwan, severe CVD caused more than 42 thousand deaths. CVD is a progressive disease, which means that even if one person is young, he or she still needs to take care of their physical condition to reduce the risk of CVD in the future. 
            </p>
            <div id="4" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Activities and Target audiences</h2>
            </div>       
            <p>
                &emsp;&emsp;Accordingly, we defined our target audiences (TAs) based on age. To reach out to our TAs and raise their concern about the CVD crisis, we planned the following activities: 
            </p>
            <ul>
                <li class="biggerli">
                    To reach out to the elderly TA efficiently, we consulted with the "Center for Innovative Research on Aging Society (CIRAS)" in our university. CIRAS pointed out that in-person communication is the most efficient way to convice the elderly of the importance of CVD prevention. Therefore, we held a <a href="https://2022.igem.wiki/ccu-taiwan/education#7" class="link_subtitle">campus walking activity</a> to gather the local elderly and share about a healthy lifestyle using fun games and exercises (link to education).
                </li>
                <li class="biggerli">
                    For the young TA, we shared information about the CVD crisis and had a special activity in downtown Chiayi on <a href="https://2022.igem.wiki/ccu-taiwan/education#21" class="link_subtitle">World Heart Day</a>. Furthermore, to let the youth know that synthetic biology is also a solution for the CVD crisis, we held the <a href="https://2022.igem.wiki/ccu-taiwan/education#2" class="link_subtitle">Open lab activity</a> to share the beauty of synthetic biology, the CVD crisis, and how the PACOmega project benefits CVD prevention (link to education). 
                </li>
                <li class="biggerli">
                    Finally, we thought about how to reach out to more people to promote CVD prevention. The answer was a simple <a href="https://2022.igem.wiki/ccu-taiwan/webgame" class="link_subtitle">web game</a>, which is suitable for all ages and not limited to the local audience.  (link to education).
                </li>
            </ul>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">To provide an alternative source of pure EPA</h1>
            </div>
            <div id="6" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Rationale</h2>
            </div>  
            <p>
                &emsp;&emsp;The common resource of EPA, fish and fish oils, might have some problems. For example, fish are at the top of the marine food chain. Therefore, contaminants, such as heavy metals and microplastics, may accumulate in the fish body and fish oil. Further, using fish as a source of EPA supplement will exhaust the marine resource in the future. Finally, the EPA from fish oil is not vegan-friendly. Since the number of vegetarians grow in recent years, a vegan-friendly EPA is a potential product for a new market. In addition, fish oils are a mixture of docosahexaenoic acid (DHA) and EPA, but a recent cohort study showed that the benefit of EPA for CVD prevention can be abolished if mixed with DHA (Saini and Keum 2018, Sherratt, Libby et al. 2022). Together, we decided that a well-packaged, vegan-friendly, purified EPA would be our product.
            </p>
            <div id="7" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Product Design</h1>
            </div>
            <div id="8" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Synthetic biology based EPA generation</h2>
            </div>  
            <p>
                &emsp;&emsp;To generate the alternative source of EPA, we decided to apply synthetic biology to produce EPA in <i>E.coli</i>. Accordingly, we cloned the EPA-producing <i>pfa</i> genes from the deep sea bacteria <i>Moritella marina</i> and <i>Shewanella pneumatophori</i>. The cloned <i>pfa</i> genes were expressed in  <i>E.coli</i> to generate EPA. Furthermore, we cloned and expressed <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i> genes from <i>Corynebacterium glutamicum</i> with the <i>pfa</i> genes to enhance the EPA production. Finally, the EPA-rich bacteria will be harvested and EPA will be extracted by the Folch method in the lab or by supercritical fluid extraction in mass production. The full design is listed on the <a href="https://2022.igem.wiki/ccu-taiwan/design" class="link_subtitle">design</a> page.
            </p>
            <div id="9" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Final EPA product - Vegan-friendly capsule</h2>
            </div>
            <p>
                &emsp;&emsp;To make the purified EPA vegan-friendly, the enclosed capsule should not be made of an animal product, such as gelatin. Accordingly, we will choose carrageenans as the basic material for our vegan-friendly EPA capsule (Fauzi, Pudjiastuti et al. 2021).
            </p>
            <div class="full_block">
                <div class="img" style="--width:70%;">
                    <img src="<?php echo imgfile;?>/implementation/implementation01.png"/>
                </div>
            </div>
            <div id="10" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Final EPA product - Dark storage bottle</h2>
            </div>
            <p>
                &emsp;&emsp;Since EPA is sensitive to the light, the storage bottle of EPA should be made of dark colored plastic. Alternatively, the EPA capsules could be packed in PTP Aluminum Foil.
            </p>
            <div class="full_block">
                <div class="img" style="--width:70%;">
                    <img src="<?php echo imgfile;?>/implementation/implementation02.png"/>
                </div>
            </div>
            <div id="11" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Final EPA product - Defining the dosage</h2>
            </div>
            <p>
                &emsp;&emsp;There is no official daily recommended intake from the National Academies for EPA or DHA. However, the American Heart Association recommends 1 gram EPA per day for adults and 0.5 gram EPA per day for children under 12 year old may promote cardiovascular health.  (Benvenga, Fama et al. 2022).  Accordingly, the minimum amount of EPA in each capsule should be 0.5 gram. Since the capsule will be slowly oxidized as the bottle is unsealed, the future product will be packed sixty capsules per bottle, one month usage for one adult.
            </p>
            <div id="12" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Final EPA product - User’s information</h2>
            </div>
            <p>
                &emsp;&emsp;To inform the customers, and as required by law, information for the user will be attached with the product.
            </p>
            <ul>
                <li class="biggerli">Source </li>
                <li class="biggerli">Product</li>
                <li class="biggerli">Contents</li>
                <li class="biggerli">Suggested dosage</li>
                <li class="biggerli">Contraindications</li>
                <li class="biggerli">Warnings</li>
            </ul>
            <p>
                &emsp;&emsp;Together, we think that our PACOmega project will benefit the world.
            </p>

            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            
            
            
            <p class="h25">
                Reference:
                <ol>
                    <li>
                        Benvenga, S., F. Fama, L. G. Perdichizzi, A. Antonelli, G. Brenta, F. Vermiglio and M. Moleti (2022). "Fish and the Thyroid: A Janus Bifrons Relationship Caused by Pollutants and the Omega-3 Polyunsaturated Fatty Acids." Front Endocrinol (Lausanne) 13: 891233.
                    </li>
                    <li>
                        Fauzi, M., P. Pudjiastuti, A. C. Wibowo and E. Hendradi (2021). "Preparation, Properties and Potential of Carrageenan-Based Hard Capsules for Replacing Gelatine: A Review." Polymers (Basel) 13(16).
                    </li>
                    <li>
                        Saini, R. K. and Y. S. Keum (2018). "Omega-3 and omega-6 polyunsaturated fatty acids: Dietary sources, metabolism, and significance - A review." Life Sci 203: 255-267.
                    </li>
                    <li>
                        Sherratt, S. C. R., P. Libby, D. L. Bhatt and R. P. Mason (2022). "A biological rationale for the disparate effects of omega-3 fatty acids on cardiovascular disease outcomes." Prostaglandins Leukot Essent Fatty Acids 182: 102450.
                    </li>
                </ol>
            </p>
                
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
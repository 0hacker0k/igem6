
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
                solution for CVD
            </div>
            <div class="guide_sub_label" onclick="move_to_item('2');guide_toggle()">
                Learn
            </div>
            <div class="guide_sub_label" onclick="move_to_item('3');guide_toggle()">
                Explore
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4');guide_toggle()">
                Design
            </div>
            <div class="guide_label" onclick="move_to_item('5');guide_toggle()">
                Expression promoter
            </div>
            <div class="guide_sub_label" onclick="move_to_item('6');guide_toggle()">
                Learn and Explore
            </div>
            <div class="guide_sub_label" onclick="move_to_item('7');guide_toggle()">
                Design
            </div>
            <div class="guide_sub_label" onclick="move_to_item('8');guide_toggle()">
                Redesign necessary
            </div>
            <div class="guide_label" onclick="move_to_item('9');guide_toggle()">
                EPA?
            </div>
            <div class="guide_sub_label" onclick="move_to_item('10');guide_toggle()">
                Explore
            </div>
            <div class="guide_sub_label" onclick="move_to_item('11');guide_toggle()">
                Build
            </div>


        </div>
        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
            
        </div>    
    </div>
    <img class="full_size_image" src="<?php echo imgfile;?>/engineering/banner-engineering.png" alt=""> 

    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <h1>From docosahexaenoic acid (DHA) to eicosapentaenoic acid (EPA)</h1>
        </div>
    </div>

    

    <div class="article">
        <div class="in_center">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Identify the problem - <br/>solution for CVD</h1>
            </div>
            <p>
                &emsp;&emsp;According to the official statistics from the World Health Organization (WHO), cardiovascular disease (CVD) is the leading cause of death and disability worldwide, causing 17.9 million deaths per year. Statistics in Taiwan also indicate the seriousness of CVD locally. 
            </p>
            <p>
                &emsp;&emsp;One important cause of CVD is the accumulation of oxidized low-density lipoprotein (LDL) in blood vessels. Taking Omega-3 polyunsaturated fatty acid (PUFA) supplements, including DHA and EPA, could effectively slow CVD progression. 
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/engineering/engineering01.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="2" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Learn</h2>
            </div>
            <p>
                &emsp;&emsp;The human body can synthesize DHA from α-linolenic acid (ALA), which is abundant in some plant oils. However, the conversion rate is extremely low, reported to be from 2-10% (Chiu, Su et al. 2008) or even as low as 0.01% (Hussein, Ah-Sing et al. 2005). Therefore, DHA-rich foods, such as fish, or DHA supplements are the two main sources for humans to get enough DHA. Notably, most DHA supplements are also purified from fish, suggesting that supply of supplemental DHA will become a problem as the marine resources are exhausted. 
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/engineering/engineering02.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="3" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Explore</h2>
            </div>
            <p>
                &emsp;&emsp;Since fish is almost the only source of DHA, we attempted to figure out if we could generate an alternative source of DHA by synthetic biology. Accordingly, we first found that oily fish, such as salmon or sardines, do not generate DHA by themself. Instead, these fish uptake DHA-rich algae and accumulate DHA in the body. Exploration of DHA-generating algae and other organisms showed that the deep-sea bacteria <i>Moritella marina</i> MP-1 may be the excellent target for the following reasons (Yazawa 1996): 
            </p>
            <p class="h15">
                a. The genome sequence of MP-1 is known, suggesting that we have a chance to build the biobricks for DHA production.
            </p>
            <p class="h15">
                b. The <i>pfa</i> genes responsible for DHA production are known (Okuyama, Orikasa et al. 2007).
            </p>
            <p class="h15">
                c. It had been shown that the ectopic expression of <i>pfa</i> genes in <i>E. coli</i> induced DHA generation (Orikasa, Nishida et al. 2006).
            </p>
            <div id="4" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Design</h2>
            </div>
            <p>
                &emsp;&emsp;Following the research reported by Orisaka et. al., we extracted the <i>pfa</i> gene sequences from MP-1 genome, and found that the five <i>pfa</i> genes, <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i> are 7959 bp, 2652bp, 6036bp, 1617bp, and 864bp in length, respectively (Orikasa, Nishida et al. 2006). Because of the length limitation of each plasmid, we decided to clone these <i>pfa</i> genes into different vectors. To balance the final length of each vector, we divided the <i>pfa</i> genes into two groups. The <i>pfa A</i> and <i>pfa D</i> belong to group 1 (9576bp in total) and others belong to group 2 (9552bp in total). Because gene expression in prokaryotes is poly-cistronic, we inserted a ribosome binding site before each gene to regulate the protein translation. 
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/engineering/engineering03.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Identify the the problem - <br/>expression promoter</h1>
            </div>
            <p>
                &emsp;&emsp;While deciding a promoter for protein expression, it is common to select the lac-induced promoter to induce protein expression through lactose analog supplement. However, due to the extraordinary size of the <i>pfa A</i> gene, it is highly possible that expression would form inclusion bodies and thus loss of activity. 
            </p>
            <div id="6" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Learn and Explore</h2>
            </div>
            <p>
                &emsp;&emsp;Since MP-1 is a deep-sea bacteria grown at low temperature, and low temperature promotes the proper folding of large proteins (i.e. <i>pfa A</i>), we decided to apply the cold-inducible promoter cspA for <i>pfa A</i> expression (Vasina and Baneyx 1997).
            </p>
            <div id="7" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Design</h2>
            </div>
            <p>
                &emsp;&emsp;Accordingly, we designed the <i>pfa A</i> and <i>pfa D</i> genes under the control of the CspA promoter, while <i>pfa B'</i>, <i>pfa C</i> and <i>pfa E</i> genes are under the control of the lac inducible promoter. 
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/engineering/engineering04.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="8" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Redesign necessary</h2>
            </div>
            <p>
                &emsp;&emsp;After we constructed the plasmid design, we consulted different experts for suggestions. The secondary PI, Dr. Lee, admired the cspA promoter designs and gave some suggestions for dealing with protein aggregation. However, unexpectedly, another adviser, Dr. G. Rau, sent some references showing that DHA and EPA had different effects in CVD prevention (Mason, Sherratt et al. 2022, Sherratt, Libby et al. 2022). Further consultation with a cardiologist (name not shown, by request) from National Taiwan University Hospital supported the opinion that EPA, but not DHA, is functional in CVD prevention . 
            </p>
            <div id="9" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Identify the problem - EPA?</h1>
            </div>
            <p>
                &emsp;&emsp;EPA can prevent CVDs in different ways. In arteries, EPA preserves the membrane structure and regulates cholesterol distribution. In blood cells, EPA can split heme into several reducers to remove the free radicals, and reduce oxidative LDL accumulation. Consequently, EPA prevents the inflammation caused by oxidative LDL. In the vascular environment, EPA can also relax the surrounding smooth muscle by enhancing nitric oxide production to avoid severe CVDs (Peter, John et al. 2022).
            </p>
            <div id="10" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Explore</h2>
            </div>
            <p>
                &emsp;&emsp;To switch from DHA to EPA production without dramatically changing the whole design, we turned back to survey references indicating that the DHA to EPA switch is feasible. Fortunately, we found that <i>pfa B</i> is responsible for the final product formation. Importantly, the swapping of <i>pfa B</i> from <i>Moritella marina</i> with <i>pfa B</i> from <i>Shewanella pneumatophori</i> could shift the product from DHA to EPA (Orikasa, Tanaka et al. 2009).  
            </p>
            <div id="11" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Build</h2>
            </div>
            <p>
                &emsp;&emsp;Finally, we exchanged the <i>Moritella marina</i> <i>pfa B</i> with <i>Shewanella pneumatophori</i> <i>pfa B</i> and established a switchable PUFA generation system. 
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h25">
                Reference:
            </p>
            <ol>
                <li>
                    Chiu, C. C., K. P. Su, T. C. Cheng, H. C. Liu, C. J. Chang, M. E. Dewey, R. Stewart and S. Y. Huang (2008). "The effects of omega-3 fatty acids monotherapy in Alzheimer's disease and mild cognitive impairment: a preliminary randomized double-blind placebo-controlled study." Prog Neuropsychopharmacol Biol Psychiatry 32(6): 1538-1544
                </li>
                <li>
                    Hussein, N., E. Ah-Sing, P. Wilkinson, C. Leach, B. A. Griffin and D. J. Millward (2005). "Long-chain conversion of [13C]linoleic acid and alpha-linolenic acid in response to marked changes in their dietary intake in men." J Lipid Res 46(2): 269-280.
                </li>
                <li>
                    Mason, R. P., S. C. R. Sherratt and R. H. Eckel (2022). "Omega-3-fatty acids: Do they prevent cardiovascular disease?" Best Pract Res Clin Endocrinol Metab: 101681.
                </li>
                <li>
                    Okuyama, H., Y. Orikasa, T. Nishida, K. Watanabe and N. Morita (2007). "Bacterial genes responsible for the biosynthesis of eicosapentaenoic and docosahexaenoic acids and their heterologous expression." Appl Environ Microbiol 73(3): 665-670.
                </li>
                <li>
                    Orikasa, Y., T. Nishida, A. Yamada, R. Yu, K. Watanabe, A. Hase, N. Morita and H. Okuyama (2006). "Recombinant production of docosahexaenoic acid in a polyketide biosynthesis mode in Escherichia coli." Biotechnol Lett 28(22): 1841-1847.
                </li>
                <li>
                    Orikasa, Y., M. Tanaka, S. Sugihara, R. Hori, T. Nishida, A. Ueno, N. Morita, Y. Yano, K. Yamamoto, A. Shibahara, H. Hayashi, Y. Yamada, A. Yamada, R. Yu, K. Watanabe and H. Okuyama (2009). "pfaB products determine the molecular species produced in bacterial polyunsaturated fatty acid biosynthesis." FEMS Microbiol Lett 295(2): 170-176.
                </li>
                <li>
                    Peter, P. Toth, M. J. Chapman, K. G.Parhofer, J. R. Nelsone (2022). "Differentiating EPA from EPA/DHA in cardiovascular risk reduction." American Heart Journal Plus: Cardiology Research and Practice 17:100148
                </li>
                <li>
                    Sherratt, S. C. R., P. Libby, D. L. Bhatt and R. P. Mason (2022). "A biological rationale for the disparate effects of omega-3 fatty acids on cardiovascular disease outcomes." Prostaglandins Leukot Essent Fatty Acids 182: 102450.
                </li>
                <li>
                    Vasina, J. A. and F. Baneyx (1997). "Expression of aggregation-prone recombinant proteins at low temperatures: a comparative study of the Escherichia coli cspA and tac promoter systems." Protein Expr Purif 9(2): 211-218.
                </li>
                <li>
                    Yazawa, K. (1996). "Production of eicosapentaenoic acid from marine bacteria." Lipids 31 Suppl: S297-300.
                </li>
            </ol>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
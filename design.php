
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/design/banner-design.png" alt="">
    <div class="guide" id="guide">
        <div id="guide_content">
            <div class="guide_label" onclick="move_to_item('1');guide_toggle()">
                Overview
            </div>
            <div class="guide_sub_label" onclick="move_to_item('2');guide_toggle()">
                The mechanism of <i>pfa</i> genes in PUFA production
            </div>
            <div class="guide_sub_label" onclick="move_to_item('3');guide_toggle()">
                The arrangement of <i>pfa</i> genes in expression vectors
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4');guide_toggle()">
                The design of vector for expressing <i>Acc</i> genes
            </div>
            <div class="guide_sub_label" onclick="move_to_item('5');guide_toggle()">
                Increasing PUFA production using cerulenin
            </div>
            <div class="guide_sub_label" onclick="move_to_item('6');guide_toggle()">
                Reference
            </div>
        </div>

        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
        </div>    
    </div> 

    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1>Overview</h1>
            </div>
        </div>
    </div>

    <div class="article">
        <div class="in_center">
            <p>
                &emsp;&emsp;In the PACOmega project, our initial idea was to generate an alternative resource of docosahexaenoic acid (DHA) for cardiovascular disease (CVD) prevention. Orikasa et al. showed that the co-expression of <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> from <i>Moritella marina</i> promoted DHA production in <i>E. coli</i> (Orikasa et al., 2006). Accordingly, we designed and built the biobricks for DHA production. However, several studies published this year suggested that eicosapentaenoic acid (EPA), but not DHA, is the main effector in Omega-3 polyunsaturated fatty acid (PUFA) mediated CVD prevention (Mason et al., 2022; Sherratt et al., 2022). To re-design the biobricks for EPA expression without changing the main theme, we explored more references. Fortunately, we learned that swapping the original <i>pfa B</i> gene with that from EPA-producing <i>Shewanella pneumatophori</i> can switch DHA production to EPA production (Orikasa et al., 2009). Therefore, we modified the original DHA synthesis system to a switchable PUFA synthesis system by exchanging the origin of <i>pfa B</i> gene. 
            </p>
            <p>
                &emsp;&emsp;Furthermore, we decided to enhance the PUFA production in our switchable design. Accordingly, we searched the literature and found that ectopic expression of acetyl-CoA carboxylase (ACC) enhances biogenesis of fatty acid (Davis et al., 2000). Therefore, we designed a co-expression system of <i>Acc</i> genes with <i>pfa</i> genes to enhance PUFA production.
            </p>
            <p>
                &emsp;&emsp;Finally, since the function of ACC is to produce malonyl-CoA, the raw material of fatty acid, we designed the addition of the chemical cerulenin to block the competing fatty acid synthesis pathway and in turn enhance the biogenesis of PUFA (Wan et al., 2016; Giner-Robles et al., 2018).
            </p>
            <div id="2" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The mechanism of <i>pfa</i> genes in PUFA production</h2>
            </div>
            <p>
                &emsp;&emsp;In the deep-sea bacteria <i>Moritella marina</i> and <i>Shewanella pneumatophori</i>, the <i>pfa</i> genes are translated into protein and cooperate as a megasynthase to synthesize PUFA by the polyketide synthase (PKS) pathway. The <i>pfa A-D</i> genes encode proteins containing many functional domains for the PKS pathway, such as acyl carrier protein (ACP), 3-Ketoacyl-ACP reductase (KR), 3-Ketoacyl synthase (KS), 3-Hydroxydecanoyl-ACP dehydratase (DH), and acyltransferase (AT). The <i>pfa E</i> gene encodes phosphopantetheinyl transferase (PPTase).
            </p>
            <p>
                &emsp;&emsp;These functional domains in <i>pfa</i> genes are involved in the extension and modification of the intermediates and formation of the final PUFA products. In brief, the PKS pathway starts from the activation of ACP by pfa E (PPTase). After that, the AT domain will transfer the malonyl-CoA, which is the raw material of PUFA, to the ACPs. The backbone of malonyl-ACP will be further elongated by KS and AT domains, while KR, DH, ER domains are responsible for modification of the intermediate products. Finally, the PUFA will be produced (Gao, Wang & Tang, 2010; Mindrebo et al., 2020).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design01.png"/>
                    <div class="triangle_to_top"></div>Figure 1: The ACP proteins are activated by the PPTase, giving ACPs the ability to transfer the intermediate product to interact with other functional domains.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design02.png"/>
                    <div class="triangle_to_top"></div>Figure 2: The AT domain transfers the substrate to the ACP protein.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design03.png"/>
                    <div class="triangle_to_top"></div>Figure 3: the elongation and modification of the backbone of  PUFA.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                The functional domains:
                <br/>KS: Catalyzes a decarboxylative Claisen-like condensation reaction to extend the carbon chain of polyketide. 
                <br/>DH: Reduces hydroxyl groups to enoyl groups.
                <br/>KR: Reduces β-ketone groups to hydroxyl groups.
                <br/>ER: Reduces enoyl groups to alkyl groups.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;In <i>Moritella marina</i> and <i>Shewanella pneumatophori</i>, the <i>pfa</i> gene cluster encodes five open reading frames, namely <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i>. Each gene contains one or more functional domains to perform carboxylation, dehydration, and reduction of the ketoacyl group and hydroxyl groups in the PKS pathway. In <i>Moritella marina</i>, the <i>pfa</i> genes work together to generate DHA, while <i>Shewanella pneumatophori</i> generates EPA. The exact functions of <i>pfa A-D</i> genes are unclear. To the best of our knowledge, the <i>pfa B</i> gene is the key molecule to determine the final product (e.g. EPA and DHA)  (Orikasa et al., 2009).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design04.png"/>
                    <div class="triangle_to_top"></div>Figure 4: The DHA-producing gene clusters
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design05.png"/>
                    <div class="triangle_to_top"></div>Figure 5: The EPA-producing gene clusters
                </div>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The arrangement of <i>pfa</i> genes in expression vectors</h2>
            </div>
            <p>
                &emsp;&emsp;The co-expression of <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> genes from <i>Moritella marina</i> can produce DHA in <i>E. coli</i>. However, the total length of <i>pfa</i> genes is almost 20 kb, which makes it difficult to express all in one vector. Therefore, we decided to clone these genes into two different vectors to avoid the potential expression problem (Rosano and Ceccarelli, 2014).
            </p>
            <p>
                &emsp;&emsp;Among all the <i>pfa</i> genes, <i>pfa A</i> and <i>pfa C</i> are the longest (~8 kb and ~6 kb, respectively). Accordingly, we cloned the largest subunit, <i>pfa A</i> into pColdI vector with <i>pfa D</i> (1.6 kb) for expression, while the <i>pfa C</i> gene is cloned into pSTV28 vector with <i>pfa B</i> (2.6 kb) and <i>pfa E</i> (0.8 kb) genes.  With this design, these two pfa-expressing vectors will have similar size and avoid the problem of transformation efficiency caused by plasmid size (Rosano and Ceccarelli, 2014).
            </p>
            <p>
                &emsp;&emsp;Because of the size limitation, it is too costly or impossible to order biobricks of <i>pfa A</i> (~8 kb) and <i>pfa C</i> (~6 kb) from the company. To keep the cost in a reasonable range, we decided to clone the endogenous <i>pfa A</i>, <i>pfa C</i>, and <i>pfa D</i> genes from <i>Moritella marina</i> by PCR, while <i>pfa B</i> (<i>Moritella marina</i>), <i>pfa B'</i> (<i>Shewanella pneumatophori</i>) and <i>pfa E</i> genes were ordered. 
            </p>
            <p>
                &emsp;&emsp;To clone <i>pfa A</i> and <i>pfa D</i> into pColdI vector, we first divided the <i>pfa A</i> gene into two parts, <i>pfa A1</i> (4 kb) and <i>pfa A2</i> (4 kb), since the length of the <i>pfa A</i> gene makes PCR amplification difficult. The restriction enzymes (REs) for cloning are carefully selected to avoid destroying <i>pfa A</i> or <i>pfa D</i> genes during cloning. Ribosome binding sites (RBS) are introduced in front of the <i>pfa A</i> and <i>pfa D</i> by PCR. Finally, we selected NdeI and EcoR1 for cloning <i>pfa A1</i>, EcoRI and SacII for cloning <i>pfa A2</i>, as well as SacII and XbaI for <i>pfa D</i>.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design06.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;To clone the <i>pfa B</i>, <i>pfa C</i>, and <i>pfa E</i> genes into pSTV28 vector, REs BamHI and SacI were selected for <i>pfa C</i> cloning, and the RBS were introduced by PCR. The purchased <i>pfa B</i>, for DHA production (<i>Moritella marina</i>), <i>pfa B'</i>, for EPA production (<i>Shewanella pneumatophori</i>) and <i>pfa E</i> genes were codon-optimized to avoid RE digestion of BamHI and SacI. Finally, we selected EcoRI and BamHI for cloning the <i>pfa B</i> gene, and SacI and HindIII for cloning the <i>pfa E</i> gene. Since the <i>pfa B</i> (<i>Moritella marina</i>) and <i>pfa B'</i> (<i>Shewanella pneumatophori</i>) are both codon-optimized, it is easy to switch these two <i>pfa B</i> genes using the same REs.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design07.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design08.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;All the sequences of the <i>pfa</i> genes and designed clones are provided in the basic and composition parts.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The design of vector for expressing <i>Acc</i> genes</h2>
            </div>
            <p>
                &emsp;&emsp;To enhance EPA production, we decided to express <i>Acc</i> genes from <i>Corynebacterium glutamicum</i>, <i>AccBC</i> (1.8 kb), <i>AccD1</i> (1.6 kb) and <i>AccE</i> (0.3 kb), in <i>E. coli</i>. The protein translated from <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i> genes could form the functional acetyl-CoA carboxylase (ACC) to produce malonyl-CoA. The reaction includes two steps. In the first step, the ATP-dependent biotin carboxylase (ACCBC) catalyzes the transfer of a carboxyl group to biotin, which is linked to the biotin carboxyl carrier protein (ACCE). In the second step, the transcarboxylase (ACCD1) transferred the carboxyl group from carboxybiotin to acetyl-CoA to form malonyl-CoA.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design09.png"/>
                    <div class="triangle_to_top"></div>The function of <i>Acc</i> genes
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;In our ACC expression design, the biobricks of <i>Acc</i> genes are all ordered and codon-optimized for expression in <i>E. coli</i>. For convenience, we ordered the <i>AccBC</i> gene with RBS as one biobrick, while the <i>AccD1</i> and <i>AccE</i> were ordered with their RBSs as the other biobrick. The REs flanking the <i>AccBC</i> biobrick are NdeI and EcoRI, while the REs flanking the <i>AccD1</i> and <i>AccE</i> biobrick are EcoRI and XbaI. These two biobricks will be cloned into the pET28a vector with the selected REs.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design10.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div id="5" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Increasing PUFA production using cerulenin</h2>
            </div>
            <p>
                &emsp;&emsp;In <i>E. coli</i>, the endogenous fatty acid synthesis (FAS) pathway is responsible for the fatty acid synthesis. In the FAS pathway, FabH initiates the fatty acid synthesis by condensing the acetyl-CoA and malonyl-ACP (Acyl carrier protein) into 3-Ketoacyl-ACP. The 3-Ketoacyl-ACP is further elongated by FabB and FabF.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design11.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/design/design12.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The function of the chemical cerulenin is to inhibit FabB and FabF, two main synthases in the FAS pathway. Furthermore, previous reports showed that the exogenous pfa system was not inhibited by cerulenin in <i>E. coli</i>. Thus, addition of the chemical cerulenin to the <i>E. coli</i> which co-express the <i>pfa</i> genes and <i>Acc</i> genes should increase the PUFA production.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div id="6" class="h25">
                <p class="h25">
                    Reference:
                    <ol>
                        <li>
                            Davis, M. S., J. Solbiati and J. E. Cronan, Jr. (2000). "Overproduction of acetyl-CoA carboxylase activity increases the rate of fatty acid biosynthesis in Escherichia coli." J Biol Chem 275(37): 28593-28598.
                        </li>
                        <li>
                            Giner-Robles, L., B. Lazaro, F. de la Cruz and G. Moncalian (2018). "fabH deletion increases DHA production in Escherichia coli expressing Pfa genes." Microb Cell Fact 17(1): 88.
                        </li>
                        <li>
                            Gao, X., Wang, P., & Tang, Y. (2010). Engineered polyketide biosynthesis and biocatalysis in Escherichia coli. Applied microbiology and biotechnology, 88(6), 1233-1242.
                        </li>
                        <li>
                            Li-Beisson, Y., Shorrosh, B., Beisson, F., Andersson, M. X., Arondel, V., Bates, P. D., ... & Ohlrogge, J. (2013). Acyl-lipid metabolism. The 	Arabidopsis book/American Society of Plant Biologists, 11.
                        </li>
                        <li>
                            Mason, R. P., S. C. R. Sherratt and R. H. Eckel (2022). "Omega-3-fatty acids: Do they prevent cardiovascular disease?" Best Pract Res Clin Endocrinol Metab: 101681.
                        </li>
                        <li>
                            Mindrebo, J. T., Patel, A., Misson, L. E., Kim, W. E., Davis, T. D., Ni, Q. Z., ... & Burkart, M. D. (2020). 1.04-Structural Basis of Acyl-Carrier Protein Interactions in Fatty Acid and Polyketide Biosynthesis. Comprehensive Natural Products III, 61.
                        </li>
                        <li>
                            Orikasa, Y., T. Nishida, A. Yamada, R. Yu, K. Watanabe, A. Hase, N. Morita and H. Okuyama (2006). "Recombinant production of docosahexaenoic acid in a polyketide biosynthesis mode in Escherichia coli." Biotechnol Lett 28(22): 1841-1847.
                        </li>
                        <li>
                            Orikasa, Y., M. Tanaka, S. Sugihara, R. Hori, T. Nishida, A. Ueno, N. Morita, Y. Yano, K. Yamamoto, A. Shibahara, H. Hayashi, Y. Yamada, A. Yamada, R. Yu, K. Watanabe and H. Okuyama (2009). "pfaB products determine the molecular species produced in bacterial polyunsaturated fatty acid biosynthesis." FEMS Microbiol Lett 295(2): 170-176.
                        </li>
                        <li>
                            Rosano, G. L. and E. A. Ceccarelli (2014). "Recombinant protein expression in Escherichia coli: advances and challenges." Front Microbiol 5: 172
                        </li>
                        <li>
                            Sherratt, S. C. R., P. Libby, D. L. Bhatt and R. P. Mason (2022). "A biological rationale for the disparate effects of omega-3 fatty acids on cardiovascular disease outcomes." Prostaglandins Leukot Essent Fatty Acids 182: 102450.
                        </li>
                        <li>
                            Wan, X., Y. F. Peng, X. R. Zhou, Y. M. Gong, F. H. Huang and G. Moncalian (2016). "Effect of cerulenin on fatty acid composition and gene expression pattern of DHA-producing strain Colwellia psychrerythraea strain 34H." Microb Cell Fact 15: 30.
                        </li>
                    </ol>
                </p>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>    
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
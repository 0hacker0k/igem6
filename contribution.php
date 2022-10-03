
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/contribution/banner-contribution.png" alt=""> 

    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div id="1" class="title-label-div">
                <h1>Overview</h1>
                <p>
                    To engineer the PUFA-producing system in <i>E. coli</i>, we focused on the <i>pfa</i> genes from the deep sea bacterium <i>Moritella marina</i> and <i>Shewanella pneumatophori</i>. In deep sea bacterium, the <i>pfa</i> genes are translated into protein and cooperate together as a megasynthase to  synthesize PUFA by the polyketide synthase (PKS) pathway. The megasynthase of PKS pathway contained many functional domains, such as Acyl carrier protein (ACP), 3-Ketoacyl-ACP reductase (KR), 3-Ketoacyl synthase (KS), Acyltransferase (AT), 3-Hydroxydecanoyl-ACP dehydratase (DH) on the PUFA-producing <i>pfa</i> genes. And one independent protein phosphopantetheinyl transferase (PPTase) on the <i>pfa E</i> gene. Each of the functional domains have played a role in modification of final products, carbon chain elongation and carrying the mid product.
                </p>
            </div>
        </div>
    </div>

    

    <div class="article">
        <div class="in_center">
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution01.png"/>
                    <div class="triangle_to_top"></div>The ACP proteins were activated by the PPTase, making ACPs have the ability to carry the mid product to interact with other functional domains.           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution02.png"/>
                    <div class="triangle_to_top"></div>The AT domain transfers the substrate to the ACP protein.
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution03.png"/>
                    <div class="triangle_to_top"></div>The functional domains
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In <i>Moritella marina</i> and <i>Shewanella pneumatophori</i>, the <i>pfa</i> gene cluster encoded five open reading frames, namely <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i>. Each gene contains none to several functional domains to perform carboxylation, dehydration, and reduction of the ketoacyl group and hydroxyl groups in PKS pathway. <i>In Moritella marina</i>, the <i>pfa</i> genes work together to generate docosahexaenoic acid (DHA), while <i>Shewanella pneumatophori</i> generated eicosapentaenoic acid (EPA). The exact functions of each <i>pfa</i> gene is unclear. To the best of our knowledge, the <i>pfa B</i> is the key molecule to determine the final product (e.g. EPA and DHA).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution04.png"/>
                    <div class="triangle_to_top"></div>The DHA-producing gene clusters
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution05.png"/>
                    <div class="triangle_to_top"></div>The EPA-producing gene clusters
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution06.png"/>
                    <div class="triangle_to_top"></div>The combination of ACC subunits
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;On the other hand, we also enhanced the PUFA production through expressing acetyl-CoA carboxylase (ACC) from <i>Corynebacterium glutamicum</i> with <i>pfa</i> genes. The ACC protein is a multisubunit complex containing three subunits encoded by <i>AccBC</i>, <i>AccD1</i>, and <i>AccE</i>. The function of ACC is biosynthesis of malonyl-coA, the raw material of PUFA. With the more raw material of PUFA, the more PUFA can be produced by <i>E. coli</i> through our PUFA-producing system.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h15">
                1. We provided the biobricks containing the coding sequences of multisubunit enzyme pfa from the docosahexaenoic acid (DHA)-producing deep sea bacterial <i>Moritella marina</i>.
            </p>
            <p class="h25">
                &emsp;&emsp;In <i>Moritella marina</i>, the DHA production is mediated by multisubunit enzyme pfa through the Polyketide synthase (PKS) pathway (Okuyama, Orikasa et al. 2007). The multisubunit enzyme pfa includes five <i>pfa</i> genes, including <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i>. It had been reported that the ectopic co-expression of <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> genes in <i>E. coli</i>. successfully induced the DHA production (Orikasa, Nishida et al. 2006).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="img" style="--width:100%;">
                <img src="<?php echo imgfile;?>/contribution/contribution07.png">
            </div>      
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h15">
                2. We provided the biobrick containing <i>pfa B</i> coding sequence from eicosapentaenoic acid (EPA)-producing deep sea bacteria <i>Shewanella pneumatophori</i>.
            </p>
            <p class="h25">
                &emsp;&emsp;In <i>Shewanella pneumatophori</i>, the multisubunit enzyme pfa responsible for EPA biosynthesis is encoded by <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> (Orikasa, Yamada et al. 2004). Orikasa et al. indicated that the replacement of <i>pfa B</i> from with <i>Moritella marina</i>with <i>pfa B</i> from <i>Shewanella pneumatophori</i> could enhance the EPA production of multisubunit pfa from <i>Moritella marina</i> (Orikasa, Tanaka et al. 2009).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="img" style="--width:100%;">
                <img src="<?php echo imgfile;?>/contribution/contribution08.png">
            </div>      
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h15">
                3. We provided the biobricks containing the coding sequences of multisubunit acetyl-CoA carboxylase (ACC) from <i>Corynebacterium glutamicum</i>.
            </p>
            <p class="h25">
                &emsp;&emsp;The multisubunit enzyme ACC is responsible for the biosynthesis of malonyl-CoA, which is the raw material necessary for PUFA production. The ACC enzyme contains three <i>Acc</i> genes, including <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i> from <i>Corynebacterium glutamicum</i>. The ectopic expression of ACC enzyme can increase the rate of fatty acid synthesis (Davis, Solbiati et al. 2000).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="img" style="--width:100%;">
                <img src="<?php echo imgfile;?>/contribution/contribution09.png">
            </div>      
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h15">
                4. We improved the biobricks of <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i>.
            </p>
            <p class="h25">
                &emsp;&emsp;As a biobrick, we optimized the codons of <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i> to eliminate restriction enzyme sites of NdeI, EcoRI and XhoI. The <i>AccBC</i> has been mutated at the nucleotide positions of 74, 879, 1659 and 1764 to avoid being cutted by XhoI, and the site of 147 to avoid being cutted by NdeI, and the the sites of 468 to avoid being cutted by EcoRI. We also optimized the codons to eliminate the repeat sequences which may hamper the DNA synthesis.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="img" style="--width:100%;">
                <img src="<?php echo imgfile;?>/contribution/contribution10.png">
            </div>      
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p class="h15">
                5. We designed the expression method for expressing large protein and swapping genes
            </p>
            <p class="h25">
                &emsp;&emsp;Among the five <i>pfa</i> genes (<i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i>), <i>pfa A</i> and <i>pfa C</i> genes harbor the largest size (~8 kb and ~6 kb, respectively). Therefore, we decide to clone these two genes into different vectors to avoid the potential expression problem (Rosano and Ceccarelli 2014). The largest subunit, <i>pfa A</i> was cloned into the pColdI vector with <i>pfa D</i> (1.6 kb) for expression, since this cold shock protein activating vector suits for expressing large proteins. The <i>pfa C</i> gene is cloned into pSTV28 vector with <i>pfa B</i> (2.3 kb) and <i>pfa E</i> (0.8 kb) genes. Accordingly, these two pfa expressing vectors with similar sizes may avoid the problem of transformation efficiency caused by plasmid size (Rosano and Ceccarelli 2014).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="img" style="--width:100%;">
                <img src="<?php echo imgfile;?>/contribution/contribution11.png">
            </div>  
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>


            
            <p class="h25">
                Reference:
                <ol>
                    <li>
                        Davis, M. S., J. Solbiati and J. E. Cronan, Jr. (2000). "Overproduction of acetyl-CoA carboxylase activity increases the rate of fatty acid biosynthesis in Escherichia coli." J Biol Chem 275(37): 28593-28598.
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
                        Orikasa, Y., A. Yamada, R. Yu, Y. Ito, T. Nishida, I. Yumoto, K. Watanabe and H. Okuyama (2004). "Characterization of the eicosapentaenoic acid biosynthesis gene cluster from Shewanella sp. strain SCRC-2738." Cell Mol Biol (Noisy-le-grand) 50(5): 625-630.
                    </li>
                    <li>
                        Rosano, G. L. and E. A. Ceccarelli (2014). "Recombinant protein expression in Escherichia coli: advances and challenges." Front Microbiol 5: 172.
                    </li>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                </ol>
            </p>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
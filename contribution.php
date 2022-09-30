
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
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Contribution</h1>
            </div>
            <p>
                CCU_TAIWAN contributed to the polyunsaturated fatty acids (PUFAs) production by providing new biobricks and expression methods.
            </p>
        </div>
    </div>

    <br>
    <br>

    <div class="article">
        <div class="in_center">
            <div class="in_center">    
                <p class="h15">
                    1. We provided the biobricks containing the coding sequences of multisubunit enzyme pfa from the docosahexaenoic acid(DHA)-producing deep sea bacterial <i>Moritella marina</i>.
                </p>
                <p class="h25">
                    &emsp;&emsp;In <i>Moritella marina</i>, the DHA production is mediated by multisubunit enzyme pfa through the Polyketide synthase (PKS) pathway (Okuyama, Orikasa et al. 2007). The multisubunit enzyme pfa includes five pfa genes, including <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and pfaE. It had been reported that the ectopic co-expression of <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> genes in <i>E. coli</i>. successfully induced the DHA production (Orikasa, Nishida et al. 2006).
                </p>
                <br>
                <div class="img" style="--width:100%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution01.png">
                </div>      
                <br>
                <br>
                <p class="h15">
                    2. We provided the biobrick containing <i>pfa B</i> coding sequence from eicosapentaenoic acid (EPA)-producing deep sea bacterial <i>Shewanella pneumatophore</i>.
                </p>
                <p class="h25">
                    &emsp;&emsp;In <i>Shewanella pneumatophore</i>, the multisubunit enzyme pfa responsible for EPA biosynthesis is encoded by <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> (Orikasa, Yamada et al. 2004). Orikasa et al. indicated that the replacement of <i>pfa B</i> from with <i>Moritella marina</i>with <i>pfa B</i> from <i>Shewanella pneumatophore</i> could enhance the EPA production of multisubunit pfa from <i>Moritella marina</i> (Orikasa, Tanaka et al. 2009).
                </p>
                <br>
                <div class="img" style="--width:100%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution02.png">
                </div>      
                <br>
                <br>
                <p class="h15">
                    3. We provided the biobricks containing the coding sequences of multisubunit acetyl-CoA carboxylase (ACC) from <i>Corynebacterium glutamicum</i>.
                </p>
                <p class="h25">
                    &emsp;&emsp;The multisubunit enzyme ACC is responsible for the biosynthesis of malonyl-CoA, which is the raw material necessary for PUFA production. The ACC enzyme contains three Acc genes, including <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i> from <i>Corynebacterium glutamicum</i>. The ectopic expression of ACC enzyme can increase the rate of fatty acid synthesis (Davis, Solbiati et al. 2000).
                </p>
                <br>
                <div class="img" style="--width:100%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution03.png">
                </div>      
                <br>
                <br>
                <p class="h15">
                    4. We improved the biobricks of <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i>.
                </p>
                <p class="h25">
                    &emsp;&emsp;As a biobrick, we optimized the codons of <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i> to eliminate restriction enzyme sites of NdeI, EcoRI and XhoI. The <i>AccBC</i> has been mutated at the sites of 74, 879, 1659 and 1764 to avoiding been cutted by XhoI, and the site of 147 to avoiding been cutted by NdeI, and the the sites of 468 to avoiding been cutted by EcoRI. We also optimized the codons to eliminate the repeat sequences which may hamper the DNA synthesis. [CYY1] 
                </p>
                <br>
                <div class="img" style="--width:100%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution04.png">
                </div>      
                <br>
                <br>
                <p class="h15">
                    5. We designed the expression method for expressing large protein and swapping genes
                </p>
                <p class="h25">
                    &emsp;&emsp;Among the five pfa genes (<i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i>), <i>pfa A</i> and <i>pfa C</i> genes harbor the largest size (~8kb and ~6kb, respectively). Therefore, we decide to clone these two genes into different vectors to avoid the potential expression problem (Rosano and Ceccarelli 2014). The largest subunit, <i>pfa A</i> was cloned into the pColdI vector with <i>pfa D</i> (1.6kb) for expression, since this cold shock protein activating vector suits for expressing large proteins. The <i>pfa C</i> gene is cloned into pSTV28 vector with <i>pfa B</i> (2.6kb) and <i>pfa E</i> (0.6kb) genes. Accordingly, these two pfa expressing vector with similar sizes may avoid the problem of transformation efficiency caused by plasmid size (Rosano and Ceccarelli 2014).
                </p>
                <br>
                <div class="img" style="--width:100%;">
                    <img src="<?php echo imgfile;?>/contribution/contribution05.png">
                </div>  
                <br>
                <br>

                
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
                            Orikasa, Y., M. Tanaka, S. Sugihara, R. Hori, T. Nishida, A. Ueno, N. Morita, Y. Yano, K. Yamamoto, A. Shibahara, H. Hayashi, Y. Yamada, A. Yamada, R. Yu, K. Watanabe and H. Okuyama (2009). "pfaB products determine the molecular species produced in bacterial polyunsaturated fatty acid biosynthesis." FEMS Microbiol Lett 295(2): 170-176.
                        <li>
                            Orikasa, Y., A. Yamada, R. Yu, Y. Ito, T. Nishida, I. Yumoto, K. Watanabe and H. Okuyama (2004). "Characterization of the eicosapentaenoic acid biosynthesis gene cluster from Shewanella sp. strain SCRC-2738." Cell Mol Biol (Noisy-le-grand) 50(5): 625-630.
                        </li>
                        <li>
                            Rosano, G. L. and E. A. Ceccarelli (2014). "Recombinant protein expression in Escherichia coli: advances and challenges." Front Microbiol 5: 172.
                        </li>
                        <br>
                        <br>
                    </ol>
                </p>
            </div>
            
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
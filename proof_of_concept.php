
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/proof/banner-proof.png" alt=""> 
    
    <div class="overview justify-content-around">
        <div class="col-7">
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                Cardiovascular disease ( CVD ) is the leading cause of death globally. Our team establishes a new approach, PACOmega, to tackle this serious problem. We expect to prevent CVD through the promotion of a healthy lifestyle which can be simply separated into two parts, healthy diet and regular exercises. To start with diet and focus on increasing the intake of good oil, we use synthetic biology to produce pure EPA to solve the problem that EPA may be contaminated and are not vegan-friendly. In addition to producing pure EPA, considering the market advantage and improving the competitiveness of our products, we also design the experiments to increase the yield of EPA production.
            </p>
        </div>
    </div>

    <div class="article">
        <div class="in_center">
            <div id="2" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Producing EPA</h2>
            </div>
            <p class="h25">
                &emsp;&emsp;To generate EPA successfully, we design to express the EPA-producing <i>pfa</i> genes from deep-sea bacteria <i>Moritella marina</i>, and the <i>pfa B</i> gene is from <i>Shewanella pneumatophori</i>. Therefore, we amplify the <i>pfa</i> genes including <i>pfa A1</i>, <i>pfa A2</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i> and <i>pfa E</i> by PCR. Then we purified these amplicons to digest with the corresponding restriction enzymes also the designed vectors which are pColdI and pSTV28. After collecting all digested amplicons and vectors, we would ligate <i>pfa A</i> and <i>pfa D</i> genes into the pColdI vector and the <i>pfa B</i>, <i>pfa C</i>, <i>pfa E</i> genes were ligated into the pSTV28 vector. The cloned <i>pfa</i> genes were then co-expressed in <i>E. coli</i>. to produce EPA.
            </p>
            <p class="h15">
                &emsp;&emsp;1. To express <i>pfa</i> genes, we have to get the components <i>pfa A1</i>, <i>pfa A2</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i>, <i>pfa E</i>, and also the pColdI and pSTV28 vectors. We have successfully  amplified these genes by PCR, and purified the vectors.
            </p>
            <p class="h15">
                &emsp;&emsp;2. We get pColdI-<i>pfa D</i> and pSTV28-<i>pfa E</i>. Then sequence them to ensure our <i>pfa D</i> and <i>pfa E</i> genes are correct.
            </p>
            <p class="h15">
                &emsp;&emsp;3. We did the protein expression of pColdI-<i>pfa D</i> and pSTV28-<i>pfa E</i> to confirm our design vector can express <i>pfa</i> genes.
            </p>
            <div id="2" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Increasing EPA Production</h2>
            </div>
            <p class="h25">
                &emsp;&emsp;The efficient EPA production in <i>E. coli</i> is associated with market advantage. The Acc complex has been improved that it can increase the malonyl-CoA, the EPA precursor. We use the Acc complex to increase the EPA production. To express the ACC complex, we amplified the <i>Acc</i> genes including <i>AccBC</i>, AccD1 and AccE. Then we purified these genes to digest with the corresponding restriction enzymes also the designed vectors which is pET28a. Therefore, we ligate these <i>Acc</i> genes into pET28a and transform this plasmid into <i>E. coli</i>. to enhance the yield of EPA production. In addition, we add chemical cerulenin to inhibit the competing fatty acid synthesis pathway in <i>E. coli</i> and consequently enhance the function of <i>pfa</i> genes. 
            </p>
            <p class="h25">
                &emsp;&emsp;Subsequently, we conducted the triple antibiotics selection to make bacteria survive on the triple antibiotics plate that we could ensure the transformation of three plasmids are successful. We tested the concentration of Ampicillin, Chloramphenicol and Kanamycin to find the suitable environment for bacteria.
            </p>
            <p class="h15">
                &emsp;&emsp;1. To express <i>Acc</i> genes, we have to get the component <i>AccBC</i>, <i>AccD1E</i>, and also the pET28a vector. We have successfully  amplified <i>AccBC</i> and <i>AccD1E</i> by PCR, and purified the pET28a vector.
            </p>
            <p class="h15">
                &emsp;&emsp;2. We get TA-AccBC and TA-<i>AccD1E</i>. Then sequence them to ensure our <i>Acc</i> genes are correct.
            </p>
            <p class="h15">
                &emsp;&emsp;3. To let <i>E. coli</i> co-express the <i>pfa</i> and <i>Acc</i> genes, we have to confirm that <i>E. coli</i> can survive in the three antibiotics environment. Therefore, we did the triple antibiotics selection. We tested the concentration of Ampicillin and Chloramphenicol according to the reference first, then we adjusted the concentration of two antibiotics based on our result. After the bacteria can survive on the double antibiotics plate, we add the third antibiotic, Kanamycin. We also tried different concentrations of Kanamycin to find the best condition for the bacteria to survive on the triple antibiotics plates.
            </p>     
            <br>
            <br>
            <p class="h25">
                Reference:
                <ol>
                    <li>
                        Wan, X., Peng, YF., Zhou, XR. et al. Effect of cerulenin on fatty acid composition and gene expression pattern of DHA-producing strain <i>Colwellia psychrerythraea</i> strain 34H.<i> Microb Cell Fact</i> 15, 30 (2016)
                    </li>
                    <li>
                        Giner-Robles, L., Lázaro, B., de la Cruz, F. et al. <i>fabH</i> deletion increases DHA production in <i>Escherichia coli</i> expressing <i>Pfa</i> genes. <i>Microb Cell Fact</i> 17, 88 (2018).
                    </li>
                    <li>
                        Satoh, S., Ozaki, M., Matsumoto, S. et al. Enhancement of fatty acid biosynthesis by exogenous acetyl-CoA carboxylase and pantothenate kinase in <i>Escherichia coli</i><i>. Biotechnol Lett</i> 42, 2595–2605 (2020).
                    </li>
                    <li>
                        Yoshitake Orikasa, Mika Tanaka, Shinji Sugihara, Ryuji Hori, Takanori Nishida, Akio Ueno, Naoki Morita, Yutaka Yano, Kouhei Yamamoto, Akira Shibahara, Hidenori Hayashi, Yohko Yamada, Akiko Yamada, Reiko Yu, Kazuo Watanabe, Hidetoshi Okuyama, <i>pfaB</i> products determine the molecular species produced in bacterial polyunsaturated fatty acid biosynthesis, <i>FEMS Microbiology Letters</i>, Volume 295, Issue 2, June 2009, Pages 170–176
                    </li>
                    <li>
                    Okuyama, H.; Orikasa, Y.; Nishida, T.; Watanabe, K.; Morita, N. (2007). Bacterial Genes Responsible for the Biosynthesis of Eicosapentaenoic and Docosahexaenoic Acids and Their Heterologous Expression. <i>Applied and Environmental Microbiology</i>, 73(3), 665–670.
                    </li>
                    <br>
                    <br>
                </ol>
            </p>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
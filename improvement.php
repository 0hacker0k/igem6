
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/improvement/banner-improvement.png" alt=""> 

    <div class="article">
        <div class="in_center">
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="1" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Base</h2>
            </div>
            <p>
                &emsp;&emsp;<i>AccBC</i>  (BBa_K2560251) and <i>AccD1</i> (BBa_K2560252) subunit from <i>C. glutamicum</i>, codon optimized for <i>V. natriegens</i>
            </p>
            <div id="2" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Improvement</h2>
            </div>
            <p>
                &emsp;&emsp;<i>AccBC</i>  (BBa_K2560251) and <i>AccD1</i> (BBa_K2560252) subunit from <i>C. glutamicum</i>, codon optimized for <i>E. coli</i>.
            </p>
            <p>
                <b>Short description: <i>AccBC</i> subunit from <i>C. glutamicum</i>, codon-optimized for <i>E.coli</i>.</b>
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In our PACOmega project, the acetyl-CoA carboxylase (ACC) is applied to enhance the EPA production in <i>E. coli</i>. The acetyl-CoA carboxylase of <i>C. glutamicum</i> is made up of alpha-subunit (<i>AccBC</i>), beta-subunit (<i>AccD1/DtsR1</i>), epsilon-subunit (<i>AccE</i>).
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/improvement/improvement01.png"/>
                    <div class="triangle_to_top"></div>The function and components of ACC.           
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Our improved biobrick is based on the existing part from the previous iGEM team. <i>AccBC</i> (BBa_K2560251) and <i>AccD1/DstR1</i> (BBa_K2560252) from <i>C. glutamicum</i> had been designed to express in <i>V. natriegens</i> to promote the conversion from acetyl-CoA into malonyl-CoA. To express the <i>AccE</i> with <i>AccBC</i> and <i>AccD1</i> in <i>E. coli</i> and eliminate the iGEM official restriction enzyme sites, we improved this biobrick by codon-optimization for <i>E. coli</i> expression and removal of the restriction enzyme cutting sites for EcoRI, PstI, SpeI, NotI and XbaI.
            </p>
            <p>
                &emsp;&emsp;For the optimized sequences, please view on our part registry page.
            </p>
            <p class="h15">
                <a href="http://parts.igem.org/Part:BBa_K4131001" class="link_subtitle"><i>AccBC</i></a>
            </p>
            <p class="h15">
                <a href="http://parts.igem.org/Part:BBa_K4131000" class="link_subtitle"><i>AccD1</i></a>
            </p>
            <p class="h15">
                <a href="http://parts.igem.org/Part:BBa_K4131002" class="link_subtitle"><i>AccE</i></a>
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            
            
            <p class="h25">
                Reference:
                <ol>
                    <li>
                        Lars Milke,1 Nicolai Kallscheuer,1,2 Jannick Kappelmann,1 and Jan Marienhagen (2019). “Tailoring <i>Corynebacterium glutamicum</i> towards increased malonyl-CoA availability for efficient synthesis of the plant pentaketide noreugenin”  Milke et al. Microb Cell Fact (2019) 18:71
                    </li>
                    <li>
                        Roland Gande,1 Lynn G. Dover,2 Karin Krumbach,1 Gurdyal S. Besra,2 Hermann Sahm,1 Tadao Oikawa,3 and Lothar Eggeling1 “The Two Carboxylases of Corynebacterium glutamicum Essential for Fatty Acid and Mycolic Acid Synthesis” JOURNAL OF BACTERIOLOGY, July 2007, p. 5257–5264   
                    </li>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                </ol>
            </p>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
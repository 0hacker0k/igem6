
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
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Base</h2>
            </div>
            <p>
                &emsp;&emsp;AccBC  (BBa_K2560251) and AccD1 (BBa_K2560252) subunit from C. glutamicum, codon optimized for V. natriegens
            </p>
            <div id="2" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Improvement</h2>
            </div>
            <p>
                &emsp;&emsp;AccBC  (BBa_K2560251) and AccD1 (BBa_K2560252) subunit from C. glutamicum, codon optimized for E. Coli.
            </p>
            <p>
                &emsp;&emsp;AccBC subunit from C. glutamicum, codon-optimized for E.Coli.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;In our PACOmega project, the acetyl-CoA carboxylase (ACC) is applied to enhance the EPA production in E. coli. The acetyl-CoA carboxylase of C. glutamicum is made up of alpha-subunit (AccBC), beta-subunit (AccD1/DtsR1), epsilon-subunit (AccE).
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/improvement/improvement01.png"/>
                    <div class="triangle_to_top"></div>The function and components of ACC.           
                </div>
            </div>
            <p>
                &emsp;&emsp;Our improved biobrick is based on the existing part from the previous iGEM team. AccBC (BBa_K2560251) and AccD1/DstR1 (BBa_K2560252) from C. glutamicum had been designed to express in V. natriegens to promote the conversion from acetyl-CoA into malonyl-CoA. To express the AccE with AccBC and AccD1 in E.Coli and eliminate the iGEM official restriction enzyme sites, we improved this biobrick by codon-optimization for E. Coli expression and removal of the restriction enzyme cutting sites for EcoRI, PstI, SpeI, NotI and XbaI.
            </p>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The optimized sequence of AccBC</h2>
            </div>
            <p>
                <b>ATGTCAGTAGAAACTAGGAAGATAACAAAAGTCTTGGTTGCGAACCGTGGAGAGATCGCTATCCGCGTGTTTCGTGCTGCTCGAGATGAGGGCATCGGCAGTGTTGCCGTTTATGCAGAGCCGGATGCCGACGCTCCCTTCGTGTCGTACGCAGACGAAGCGTTTGCACTGGGTGGTCAAACCTCTGCCGAGTCCTACCTGGTTATTGACAAGATCATCGATGCGGCGCGCAAAAGCGGTGCGGACGCCATCCACCCGGGCTATGGTTTCTTGGCGGAGAACGCTGACTTCGCAGAGGCGGTAATCAATGAAGGCCTGATCTGGATTGGTCCGTCCCCGGAAAGCATTCGTAGCCTGGGTGACAAGGTGACGGCGCGTCACATTGCAGACACGGCTAAGGCCCCGATGGCACCGGGGACCAAGGAACCGGTTAAAGATGCTGCCGAGGTGGTCGCGTTTGCCGAAGAGTTCGGCTTACCGATTGCAATTAAGGCTGCCTTCGGTGGTGGCGGCAGAGGCATGAAAGTCGCGTATAAAATGGAAGAGGTGGCCGACTTGTTTGAGTCGGCGACCCGTGAAGCGACGGCGGCGTTCGGCCGTGGTGAGTGCTTTGTTGAGCGCTACCTGGATAAGGCGCGCCATGTTGAGGCGCAAGTTATCGCCGACAAGCACGGCAACGTGGTGGTGGCCGGCACTCGTGATTGCAGCCTGCAACGTCGTTTTCAGAAGCTGGTGGAAGAGGCGCCAGCTCCGTTCTTGACCGATGATCAGCGTGAACGTCTGCACAGCTCTGCCAAGGCGATTTGTAAAGAAGCAGGCTACTATGGTGCGGGCACGGTCGAGTACTTGGTTGGTAGCGATGGTCTGATCAGCTTTTTAGAAGTTAATACCAGACTGCAAGTTGAGCATCCGGTTACCGAAGAAACCACCGGTATTGATCTTGTTCGTGAGATGTTTCGTATAGCGGAAGGCCATGAACTGAGCATTAAGGAGGACCCGGCACCGCGTGGTCACGCATTCGAGTTCCGCATTAACGGCGAGGATGCTGGTTCAAATTTTATGCCGGCTCCAGGTAAAATCACCAGCTACCGGGAACCGCAGGGACCGGGCGTTCGTATGGATAGCGGTGTAGTCGAGGGTTCCGAAATCAGCGGTCAGTTTGATTCCATGCTGGCTAAACTGATCGTGTGGGGTGACACTCGCGAGCAGGCATTGCAACGTAGCCGTCGCGCACTGGCGGAGTACGTTGTAGAAGGTATGCCGACCGTTATTCCGTTCCACCAACATATTGTCGAAAACCCAGCGTTCGTGGGTAATGATGAGGGCTTCGAGATCTATACCAAATGGATTGAAGAAGTTTGGGATAATCCGATTGCGCCTTATGTGGATGCGTCCGAATTGGACGAGGACGAGGACAAGACCCCGGCGCAAAAAGTTGTGGTGGAAATCAACGGTCGTCGCGTTGAGGTTGCTCTGCCGGGTGACCTCGCTCTGGGTGGTACGGCGGGCCCGAAAAAGAAGGCGAAGAAGCGTCGCGCTGGCGGAGCAAAAGCCGGCGTGTCTGGCGACGCTGTGGCGGCGCCGATGCAGGGCACTGTAATCAAGGTTAACGTTGAGGAGGGTGCGGAGGTGAACGAAGGCGACACAGTGGTTGTGTTGGAAGCTATGAAAATGGAAAACCCGGTGAAAGCGCATAAAAGCGGTACCGTGACCGGTCTGACCGTCGCGGCGGGCGAAGGTGTGAACAAAGGTGTCGTTCTGCTGGAGATCAAGTAA</b>
            </p>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">The optimized sequence of AccD1</h2>
            </div>
            <p>
                <b>ATGACAATAAGTTCACCCCTAATTGATGTAGCCAACCTGCCGGACATCAACACCACCGCGGGTAAAATCGCCGACTTGAAGGCTAGACGTGCAGAAGCGCATTTTCCGATGGGCGAAAAAGCAGTGGAGAAGGTGCATGCAGCGGGTCGGTTGACTGCGCGCGAGCGCTTGGATTACCTGTTGGATGAAGGTTCCTTCATTGAAACCGACCAGCTGGCCCGCCACCGTACCACCGCGTTTGGCTTGGGTGCGAAACGTCCGGCCACGGACGGCATCGTTACCGGTTGGGGTACAATTGACGGTCGCGAGGTTTGTATTTTCAGCCAAGACGGCACCGTTTTTGGTGGTGCCCTCGGTGAAGTTTATGGCGAGAAGATGATTAAGATCATGGAATTAGCGATTGATACCGGCCGCCCGCTGATCGGCCTATACGAAGGTGCGGGTGCCCGTATCCAGGATGGCGCTGTGTCGCTGGACTTCATCTCCCAAACCTTCTATCAGAATATCCAAGCGAGCGGTGTTATTCCGCAGATTTCCGTGATTATGGGTGCCTGCGCAGGTGGCAACGCATACGGCCCGGCGCTTACCGACTTCGTTGTTATGGTTGATAAAACCAGTAAAATGTTTGTAACTGGTCCGGACGTGATCAAAACGGTTACCGGCGAGGAAATTACGCAGGAGGAGTTAGGTGGCGCGACCACACATATGGTTACCGCAGGTAACAGCCATTATACCGCGGCTACTGACGAGGAAGCGTTAGATTGGGTTCAGGACTTGGTCAGCTTCCTGCCTAGCAATAACCGTAGCTATGCTCCAATGGAAGATTTCGATGAAGAGGAAGGCGGCGTTGAAGAAAACATTACCGCGGACGACCTGAAACTGGACGAGATCATTCCGGATTCTGCGACCGTCCCGTATGATGTGAGAGATGTTATCGAGTGCCTGACCGACGATGGTGAGTACCTGGAAATCCAAGCTGATCGTGCGGAGAACGTGGTGATCGCGTTCGGTCGTATTGAGGGTCAGAGCGTTGGCTTCGTGGCCAATCAGCCGACCCAATTTGCAGGTTGTCTGGACATCGACTCAAGCGAAAAGGCTGCTCGTTTTGTGCGTACGTGCGACGCGTTCAACATCCCCATTGTGATGCTGGTGGATGTCCCAGGTTTCCTGCCAGGGGCGGGTCAAGAGTACGGCGGCATCCTGCGCCGTGGGGCCAAGCTGCTGTATGCGTACGGCGAGGCCACCGTTCCGAAAATCACGGTCACGATGCGTAAGGCGTACGGCGGCGCGTACTGCGTGATGGGTTCTAAGGGACTGGGCTCGGATATTAACCTGGCTTGGCCGACTGCGCAGATCGCGGTGATGGGTGCGGCAGGGGCGGTGGGTTTTATCTATCGTAAAGAACTTATGGCAGCTGATGCAAAGGGTCTGGATACCGTGGCTCTCGCGAAAAGCTTTGAACGTGAGTACGAGGACCACATGCTGAATCCGTATCACGCGGCGGAGCGTGGTTTGATTGACGCTGTCATCCTGCCGTCTGAAACCCGTGGCCAAATTAGCCGTAATCTGCGCTTGTTGAAGCACAAAAATGTTACCCGTCCGGCCCGCAAGCACGGCAACATGCCGCTGTAA</b>
            </p>
            
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

<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/result/banner-result.png" alt="">
    <div class="guide" id="guide">
        <div id="guide_content">
            <div class="guide_label" onclick="move_to_item('1');guide_toggle()">
                Cloning pColdI-<i>pfa A</i>-<i>pfa D</i>
            </div>
            <div class="guide_label" onclick="move_to_item('2');guide_toggle()">
                Cloning pSTV28-<i>pfa B</i>-<i>pfa C</i>-<i>pfa E</i>
            </div>
            <div class="guide_label" onclick="move_to_item('3');guide_toggle()">
                Cloning pET28a-<i>AccBC</i>-<i>AccD1E</i>
            </div>
            <div class="guide_label" onclick="move_to_item('4');guide_toggle()">
                Triple antibiotics selection
            </div>
        </div>

        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
        </div>    
    </div> 

    <div class="article">
        <div class="in_center">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Cloning pColdI-<i>pfa A</i>-<i>pfa D</i></h1>
            </div>
            <h1>Major experiment:</h1>
            <ol>
                <li class="biggerli">Amplifying the <i>pfa A</i> and <i>pfa D</i> genes from the genome of <i>Moritella marina</i>.</li>
                <li class="biggerli">Cloning <i>pfa A</i> and <i>pfa D</i> genes into pColdI expression vector.</li>
                <li class="biggerli">Expressing the pfa A and pfa D protein.
            </ol>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Achievements:</h1>
            <p class="biggerli">Successfully amplifying the <i>pfa A</i> and <i>pfa D</i> genes, cloning <i>pfa D</i> into pColdI vector and expressing pfa D protein.</p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Associated result:</h1>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Confirming the digested pColdI plasmids</h2>
            </div>
            <p>
                &emsp;&emsp;The pColdI plasmids were extracted from the cultured bacteria and subjected into NdeI and XbaI digestion. The gel electrophoresis result showed the backbone of pColdI (4.3 kb) and stuffer (1.3 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result01.png"/>
                    <div class="triangle_to_top"></div>Figure 1: The agarose image shows the digestion result of pColdI.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying <i>pfa A</i> by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>pfa A</i> with an extraordinary size (~8 kb) from the genome of <i>Moritella marina</i>, we design primers to respectively clone the first <i>pfa A1</i> region (~4.8 kb) and the last <i>pfa A2</i> region (~4. kb). The <i>pfa A1</i> and <i>pfa A2</i> can be fused into the full length <i>pfa A</i> though an endogenous EcoRI site.
            </p>
            <p>
                &emsp;&emsp;The restriction enzyme NdeI site at the 5' terminal of <i>pfa A1</i> was generated with the forward primer and added through PCR using pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
               &emsp;&emsp;NdeI-<i>pfa A1</i>-F: CATATGGCTAAAAAGAACACCACATC
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>pfa A1</i>-R: CCGCGGAGGTAAGTCAGTAA
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa A1</i> amplicon (4.8 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result02.png"/>
                    <div class="triangle_to_top"></div>Figure 2: The agarose image shows the amplicon of <i>pfa A1</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The restriction enzyme SacII site at 3' terminal of <i>pfa A2</i> was generated with the reverse primer pair and added through PCR using pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>pfa A2</i> 386-F: TGACTTAGGTATCGACTCAA
            </p>
            <p class="biggerlis">
                &emsp;&emsp;SacII-<i>pfa A2</i>-R: CCGCGGTTATGACATATCGTTCAAAAT
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa A2</i> amplicon (4 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result03.png"/>
                    <div class="triangle_to_top"></div>Figure 3: The agarose image shows the amplicon of <i>pfa A2</i>.
                </div>
            </div>     
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;In addition, we also try to amplify the whole <i>pfa A</i> without split. According, we performed PCR by the following primer pairs with using pfu DNA polymerase:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;NdeI-<i>pfa A1</i>-F: CATATGGCTAAAAAGAACACCACATC
            </p>
            <p class="biggerlis">
                &emsp;&emsp;SacII-<i>pfa A2</i>-R: CCGCGGTTATGACATATCGTTCAAAAT
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa A</i> amplicon (8 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result04.png"/>
                    <div class="triangle_to_top"></div>Figure 4: The agarose image shows the amplicon of <i>pfa A</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying <i>pfa D</i> by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>pfa D</i> (~1.6 kb) from the genome of <i>Moritella marina</i>, we designed the forward primer with a ribosome binding site (RBS) and a restriction enzyme SacII site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme XbaI site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;SacII-RBS-<i>pfa D</i>-F: 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;CCGCGGAGATATACCATGTCGAGTTTAGGTTTTAA 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;XbaI-<i>pfa D</i>-R: TCTAGATTAATCACTCGTACGATAACTTG
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa D</i> amplicon (1.6 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result05.png"/>
                    <div class="triangle_to_top"></div>Figure 5: The agarose image shows the amplicon of <i>pfa D</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The TA cloning of <i>pfa D</i> and sequencing confirmation</h2>
            </div>
            <p>
                &emsp;&emsp;After gel electrophoresis, the <i>pfa D</i> amplicon is purified from agarose gel and ligated with TA-vector. The ligated TA-<i>pfa D</i> was then transformed into <i>E. coli</i> DH5α strain, and the colonies after antibiotic (Amp) selection were subjected into colony PCR.
            </p>
            <div class="full_block">
                <div class="img" style="--width:85%;">
                    <img src="<?php echo imgfile;?>/result/result06.png"/>
                    <div class="triangle_to_top"></div>Figure 6: The agarose image shows the colony PCR result of TA-<i>pfa D</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones showing expected amplicon size (1.6 kb) in colony PCR were then expanded for TA-<i>pfa D</i> plasmid extraction, and the extracted TA-<i>pfa D</i> plasmids were subjected into restriction enzyme digestion by HindIII.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result07.png"/>
                    <div class="triangle_to_top"></div>Figure 7: The agarose image shows the digestion result of TA-<i>pfa D</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones showing expected amplicon size (1.6 kb) in colony PCR were then expanded for TA-<i>pfaD</i> plasmid extraction, and the extracted TA-<i>pfa D</i> plasmids were subjected into restriction enzyme digestion by HindIII.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result08.png"/>
                    <div class="triangle_to_top"></div>Figure 8: The electrogram shows the Sanger sequencing result of TA-<i>pfa D</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;Finally, we sequence-confirmed the TA-<i>pfa D</i>.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The cloning of <i>pfa D</i> into pColdI vector.</h2>
            </div>
            <p>
                &emsp;&emsp;The <i>pfa D</i> amplicon is exercised from the TA-<i>pfa D</i> vector by SacII and XbaI digestion, and the purified amplicon is ligated into pColdI vector. The colonies grown after standard transformation were examined by colony PCR using a primer pair recognizing <i>pfa D</i>-1369F and pColdI-R. The size of the target amplicon of colony PCR is 0.3 kb in length.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>pfa D</i> 1369-F: TCTTCACGCTGGTCAAACAC
            </p>
            <p class="biggerlis">
                &emsp;&emsp;pColdI-R: CCAAATGGCAGGGATCTTAG
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result09.png"/>
                    <div class="triangle_to_top"></div>Figure 9: The agarose image shows the colony PCR result of pColdI-<i>pfa D</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The pColdI-<i>pfa D</i> vectors were then purified from colonies and confirmed by Sanger sequencing.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result10.png"/>
                    <div class="triangle_to_top"></div>Figure 10: The electrogram shows the Sanger sequencing result of pColdI-<i>pfa D</i>. 
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The protein expression of pfa D</h2>
            </div>
            <p>
                &emsp;&emsp;We transformed pColdI-<i>pfa D</i> into <i>E. coli</i> BL21 strain and induced protein expression through culturing bacteria in TB medium with 1 mM IPTG at 16 °C for 4 hr. The bacteria was then harvested and subjected into SDS-PAGE analysis and coomassie blue staining. The predicted size of pfa D protein is 60 kDa. However, we did not observe the induced protein at the corresponding size. We proposed that the induction is inefficient.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result11.png"/>
                    <div class="triangle_to_top"></div>Figure 11: The coomassie blue staining showed the induction of pfa D proteins.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;Therefore, we extended the induction time to 9, 11, 13 hr. All collected samples were subjected into SDS-PAGE analysis and coomassie blue staining. In the staining image, we clearly observed the induced protein with the size around 45 kDa. We have confirmed that there is no premature stop codon in pColdI-<i>pfa D</i>. We will perform experiments to confirm whether there is an unexpected protease activity or we may optimize the condon nearby the suspected premature site.
            </p>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/result/result12.png"/>
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/result/result13.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Figure 12: The coomassie blue staining showed the induction of pfa D proteins.
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Cloning<br/>pSTV28-<i>pfa B</i>-<i>pfa C</i>-<i>pfa E</i></h1>
            </div>
            <h1>Major experiment:</h1>
            <ol>
                <li class="biggerli">Amplifying the <i>pfa C</i> gene from the genome of <i>Moritella marina</i>.</li>
                <li class="biggerli">Amplifying the <i>pfa B</i> (for DHA production), <i>pfa B'</i> (for EPA production), and <i>pfa E</i> genes from the biobricks ordered from IDT company.</li>
                <li class="biggerli">Cloning <i>pfa B</i>, <i>pfa B'</i>, <i>pfa C</i> and <i>pfa E</i> genes into pSTV28 expression vector.</li>
                <li class="biggerli">Expressing the pfa B, pfa B', pfa C and pfa E protein.</li>
            </ol>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Achievements:</h1>
            <p class="biggerli">
                Successfully amplifying the <i>pfa B</i> (for DHA production), <i>pfa B'</i> (for EPA production), <i>pfa C</i> and <i>pfa E</i> genes, cloning <i>pfa E</i> into pSTV28 vector and expressing pfa E protein.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Associated result:</h1>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Confirming the digested pSTV28 plasmids</h2>
            </div>
            <p>
                &emsp;&emsp;The pSTV28 plasmids were extracted from the cultured bacteria and subjected into EcoRI and BamHI digestion. The gel electrophoresis result showed the sizes of restriction fragments of pSTV28 (4, 0.5, 0.5 kb).
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result14.png"/>
                    <div class="triangle_to_top"></div>Figure 13: The agarose image shows the digestion result of pSTV28.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying the <i>pfa B</i> by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>pfa B</i> (~2.6 kb) from the synthesized biobrick by the company, we designed the forward primer with a restriction enzyme EcoRI site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme BamHI site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;EcoRI-<i>pfa B</i>-F: GAATTCATGACGGAATTAGCTGTTAT
            </p>
            <p class="biggerlis">
                &emsp;&emsp;BamHI-<i>pfa B</i>-R: GGATCCTTATTTGTTCGTGTTTGC
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa B</i> amplicon (2.6 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result15.png"/>
                    <div class="triangle_to_top"></div>Figure 14: The agarose image shows the amplicon of <i>pfa B</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying the <i>pfa B'</i> by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>pfa B'</i> (~2.3 kb) from the synthesized gene block by company, we designed the forward primer with a restriction enzyme EcoRI site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme BamHI site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;EcoRI-<i>pfa B</i> EPA-F: GAATTCATGGAACAAACGCCTAA
            </p>
            <p class="biggerlis">
                &emsp;&emsp;BamHI-<i>pfa B</i> EPA-R: GGATCCTTAGACTTCCCCTTGAAG
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa B'</i> amplicon (2.3 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result16.png"/>
                    <div class="triangle_to_top"></div>Figure 15: The agarose image shows the amplicon of <i>pfa B'</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying <i>pfa C</i> by PCR:</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>pfa C</i> (~6 kb) from the genome of <i>Moritella marina</i>, we designed the forward primer with a ribosome binding site (RBS) and a restriction enzyme BamHI site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme SacI site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;BamHI-RBS-<i>pfa C</i>-F: 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;GGATCCGGAGATATACCATGGAAAATATTGCAGTAGTAGG 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;SacI-<i>pfa C</i>-R: GAGCTCTTACGCTTCAACAATACTTAAAAC
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa C</i> amplicon (6 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result17.png"/>
                    <div class="triangle_to_top"></div>Figure 16: The agarose image shows the amplicon of <i>pfa C</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying <i>pfa E</i> by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>pfa E</i> (~0.8 kb) from the synthesized biobrick by company, we designed the forward primer with a ribosome binding site (RBS) and a restriction enzyme SacI site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme HindIII site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;SacI-RBS-<i>pfa E</i>-F: 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;GAGCTCGGAGATATACCATGTACAGCGGCGTAAAA 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;HindIII-<i>pfa E</i>-R: AAGCTTCTATTTAGCGTCAGGTTTAAAAT
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>pfa E</i> amplicon (0.8 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result18.png"/>
                    <div class="triangle_to_top"></div>Figure 17: The agarose image shows the amplicon of <i>pfa E</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The TA cloning of <i>pfa E</i> and sequencing confirmation</h2>
            </div>
            <p>
                &emsp;&emsp;After gel electrophoresis, the <i>pfa E</i> amplicon is purified from agarose gel and ligated with TA-vector. The ligated TA-<i>pfa E</i> was then transformed into <i>E. coli</i> DH5α strain, and the colonies after antibiotic (Amp) selection were subjected into colony PCR.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result19.png"/>
                    <div class="triangle_to_top"></div>Figure 18: The agarose image shows the colony PCR result of TA-<i>pfa E</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones showing expected amplicon size (0.8 kb) in colony PCR were then expanded for TA-<i>pfa E</i> plasmid extraction, and the extracted TA-<i>pfa E</i> plasmids were subjected into restriction enzyme digestion by HindIII.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result20.png"/>
                    <div class="triangle_to_top"></div>Figure 19: The agarose image shows the digestion result of TA-<i>pfa E</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones with correct restriction digestion map (2.7 kb for TA vector and 0.8 kb for <i>pfa E</i>) were subjected into sequencing confirmation. 
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result21.png"/>
                    <div class="triangle_to_top"></div>Figure 20: The electrogram shows the Sanger sequencing result of TA-<i>pfa E</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;Finally, we sequence-confirmed the TA-<i>pfa E</i>.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The cloning of <i>pfa E</i> into pSTV28 vector</h2>
            </div>
            <p>
                &emsp;&emsp;The <i>pfa E</i> amplicon is exercised from the TA-<i>pfa E</i> vector by SacI and HindIII digestion, and the purified amplicon is ligated into pSTV28 vector. The colonies grown after standard transformation were examined by colony PCR using a primer pair recognizing SacI-RBS-<i>pfa E</i>-F and HindIII-<i>pfa E</i>-R. The size of the target amplicon of colony PCR is 0.8 kb in length.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;SacI-RBS-<i>pfa E</i>-F: 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;GAGCTCGGAGATATACCATGTACAGCGGCGTAAAA 
            </p>
            <p class="biggerlis">
                &emsp;&emsp;HindIII-<i>pfa E</i>-R: AAGCTTCTATTTAGCGTCAGGTTTAAAAT
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result22.png"/>
                    <div class="triangle_to_top"></div>Figure 21: The agarose image shows the colony PCR result of pSTV28-<i>pfa E</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The pSTV28-<i>pfa E</i> vectors were then purified from colonies and confirmed by Sanger sequencing.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result23.png"/>
                    <div class="triangle_to_top"></div>Figure 22: The electrogram shows the Sanger sequencing result of pSTV28-<i>pfa E</i>. 
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The protein expression of pfa E</h2>
            </div>
            <p>
                &emsp;&emsp;We transformed pSTV28-<i>pfa E</i> into <i>E. coli</i> BL21 strain and induced protein expression through culturing bacteria in TB medium with 1 mM IPTG at 37 °C for 4 hr. The bacteria was then harvested and subjected into SDS-PAGE analysis and coomassie blue staining. The predicted size of pfa E protein is 32 kDa. The staining result clearly showed the induction of pfa E proteins.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result24.png"/>
                    <div class="triangle_to_top"></div>Figure 23: The coomassie blue staining showed the induction of pfa E proteins.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;To optimize the protein expression, we performed the time course examination. The protein expression was induced by culturing bacteria in TB with 1 mM IPTG at 37 °C for 2, 4, 8 hr. All collected samples were subjected into SDS-PAGE analysis and coomassie blue staining.
            </p>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/result/result25.png"/>
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/result/result26.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Figure 24: The coomassie blue staining showed the induction of pfa E proteins.
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;Because the induction is inefficient, we further optimize the protein expression by extending the inducing time. The protein expression was induced by culturing bacteria in TB with 5 mM IPTG at 37 °C for 8, 18, 24 hr. All collected samples were subjected into SDS-PAGE analysis and coomassie blue staining. The staining result showed the induction of pfa E proteins around the 32 kDa.
            </p>
            <div class="full_block">
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/result/result27.png"/>
                </div>
                <div class="img" style="--width:45%;">
                    <img src="<?php echo imgfile;?>/result/result28.png"/>
                </div>
            </div>
            <div class="full_block">
                <div class="triangle_to_top"></div>Figure 25: The coomassie blue staining showed the induction of pfa E proteins.
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div id="3" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Cloning pET28a-<i>AccBC</i>-<i>AccD1E</i></h1>
            </div>
            <h1>Major experiment:</h1>
            <ol>
                <li class="biggerli">Amplifying the <i>AccBC</i>  and <i>AccD1E</i> genes from the synthesized biobrick from the company.</li>
                <li class="biggerli">Cloning <i>AccBC</i>  and <i>AccD1E</i> genes into pET28a expression vector.</li>
                <li class="biggerli">Expressing the ACCBC and ACCD1E protein.</li>
            </ol>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Achievements:</h1>
            <p class="biggerli">Successfully amplifying the <i>AccBC</i>  and <i>AccD1E</i> genes, cloning <i>AccD1E</i> into pET28a vector and expressing ACCD1 protein.</p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Associated result:</h1>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Confirming the digested pET28a plasmids</h2>
            </div>
            <p>
                &emsp;&emsp;The pET28a plasmids were extracted from the cultured bacteria and subject into SspI and SapI digestion. The gel electrophoresis result showed the sizes of restriction fragments of pET28a (3.6, 1.2, 0.6 kb).
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result29.png"/>
                    <div class="triangle_to_top"></div>Figure 26: The agarose image shows the digestion result of pET28a.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying <i>AccBC</i>  by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>AccBC</i>  (~1.8 kb) from the synthesized gene block by the company, we designed the forward primer with a ribosome binding site (RBS) and a restriction enzyme NdeI site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme EcoRI site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>AccBC</i>-F: CATATGATGTCAGTCGAGACTAGGAA
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>AccBC</i>-R: GAATTCTTACTTGATCTCCAGG
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The gel electrophoresis result showed the size of <i>AccBC</i>  amplicon (1.8 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result30.png"/>
                    <div class="triangle_to_top"></div>Figure 27: The agarose image shows the amplicon of <i>AccBC</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The TA cloning of <i>AccBC</i>  and sequencing confirmation</h2>
            </div>
            <p>
                &emsp;&emsp;After gel electrophoresis, the <i>AccBC</i>  amplicon is purified from agarose gel and ligated with TA-vector. The ligated TA-<i>AccBC</i>  was then transformed into <i>E. coli</i> DH5α strain, and the colonies after antibiotic (Amp) selection were subjected into colony PCR.
            </p>
            <div class="full_block">
                <div class="img" style="--width:85%;">
                    <img src="<?php echo imgfile;?>/result/result31.png"/>
                    <div class="triangle_to_top"></div>Figure 28: The agarose image shows the colony PCR result of TA-<i>AccBC</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones showing expected amplicon size (1.8 kb) in colony PCR were then expanded for TA-<i>AccBC</i>  plasmid extraction, and the extracted TA-<i>AccBC</i>  plasmids were subjected into restriction enzyme digestion by NdeI and EcoRI.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result32.png"/>
                    <div class="triangle_to_top"></div>Figure 29: The agarose image shows the digestion result of TA-<i>AccBC</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones with correct restriction digestion map (2.7 kb for TA vector and 1.8 kb for <i>AccBC</i> ) were subjected into sequencing confirmation. 
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result33.png"/>
                    <div class="triangle_to_top"></div>Figure 30: The electrogram shows the Sanger sequencing result of TA-<i>AccBC</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;Finally, we sequence-confirmed the TA-<i>AccBC</i>.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Amplifying <i>AccD1E</i> by PCR</h2>
            </div>
            <p>
                &emsp;&emsp;To clone the <i>AccD1E</i> (~2 kb) from the synthesized gene block by the company, we designed the forward primer with a ribosome binding site (RBS) and a restriction enzyme EcoRI site at the 5' terminal, while the 3' terminal of reverse primer is ended by restriction enzyme XhoI site. The PCR amplification is performed by the designed primer pair and pfu DNA polymerase.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>AccD1E</i>-F: GAATTCGGAGATATACCATGACCATTT
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>AccD1E</i>-R: CTCGAGCTAGAAGAAATTCACATTC
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;We then perform PCR to amplify the target fragment. The result showed that the amplicon sizes of <i>AccD1E</i> (2 kb) as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result34.png"/>
                    <div class="triangle_to_top"></div>Figure 31: The agarose image shows the amplicon of <i>AccD1E</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The TA cloning of <i>AccD1E</i> and sequencing confirmation</h2>
            </div>
            <p>
                &emsp;&emsp;After gel electrophoresis, the <i>AccD1E</i> amplicon is purified from agarose gel and ligated with TA-vector. The ligated TA-<i>AccD1E</i> was then transformed into <i>E. coli</i> DH5α strain, and the colonies after antibiotic (Amp) selection were subjected into colony PCR.
            </p>
            <div class="full_block">
                <div class="img" style="--width:85%;">
                    <img src="<?php echo imgfile;?>/result/result35.png"/>
                    <div class="triangle_to_top"></div>Figure 32: The agarose image shows the colony PCR result of TA-<i>AccD1E</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones showing expected amplicon size (2 kb) in colony PCR were then expanded for TA-<i>AccD1E</i> plasmid extraction, and the extracted TA-<i>AccD1E</i> plasmids were subjected into restriction enzyme digestion by EcoRI and Xhol.
            </p>
            <div class="full_block">
                <div class="img" style="--width:30%;">
                    <img src="<?php echo imgfile;?>/result/result36.png"/>
                    <div class="triangle_to_top"></div>Figure 33: The agarose image shows the digestion result of TA-<i>AccD1E</i>. 
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The clones with correct restriction digestion map (2.7 kb for TA vector and 2 kb for <i>AccD1E</i>) were subjected into sequencing confirmation.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result37.png"/>
                    <div class="triangle_to_top"></div>Figure 34: The electrogram shows the Sanger sequencing result of TA-<i>AccD1E</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;Finally, we sequence-confirmed the TA-<i>AccD1E</i>.
            </p>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The cloning of <i>AccD1E</i> into pET28a vector.</h2>
            </div>
            <p>
                &emsp;&emsp;The <i>AccD1E</i> amplicon is exercised from the TA-<i>AccD1E</i> vector by EcoRI and XhoI digestion, and the purified amplicon is ligated into pET28a vector. The colonies grown after standard transformation were examined by colony PCR using a primer pair recognizing <i>AccD1E</i>-1721 F and T7 terminator. The size of the target amplicon of colony PCR is 0.3 kb in length.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;The primer sequence are listed below:
            </p>
            <p class="biggerlis">
                &emsp;&emsp;<i>AccD1E</i> 1721-F: ATCGTATCTGGCAACCCAAC
            </p>
            <p class="biggerlis">
                &emsp;&emsp;T7-terminator: GCTAGTTATTGCTCAGCGG
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result38.png"/>
                    <div class="triangle_to_top"></div>Figure 35: The agarose image shows the colony PCR result of pET28a-<i>AccD1E</i>.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;The pET28a-<i>AccD1E</i> vectors were then purified from colonies and confirmed by Sanger sequencing.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result39.png"/>
                    <div class="triangle_to_top"></div>Figure 36: The electrogram shows the Sanger sequencing result of pET28a-<i>AccD1E</i>.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The protein expression of ACCD1 and ACCE</h2>
            </div>
            <p>
                &emsp;&emsp;We transformed pET28a-<i>AccD1E</i> into <i>E. coli</i> BL21 strain and induced protein expression through culturing bacteria in TB medium with 0.4 mM IPTG at 37 °C for 2, 3, 4 hr. The bacteria was then harvested and subjected into SDS-PAGE analysis and coomassie blue staining. The predicted size of ACCD1 and ACCE protein are 60 and 10 kDa, respectively. The staining result clearly showed the induction of ACCD1 protein around 60 kDa. The ACCE  protein expression will be further examined by using 15% gel in SDS-PAGE analysis and coomassie blue staining.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result40.png"/>
                    <div class="triangle_to_top"></div>Figure 37: The coomassie blue staining showed the induction of ACCD1 protein.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <div id="4" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">Triple antibiotics selection</h1>
            </div>
            <h1>Major experiment:</h1>
            <ol>
                <li class="biggerli">Conducting double antibiotics selection to confirm the ideal concentration of antibiotics for pColdI and pSTV28 vectors.</li>
                <li class="biggerli">Conducting triple antibiotics selection to confirm the ideal concentration of antibiotics for pColdI, pSTV28 and pET28a vectors.</li>
            </ol>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Achievements:</h1>
            <p class="biggerli">Successfully find out the ideal concentration of antibiotics for pColdI, pSTV28 and pET28a vectors to co-exist in <i>E. coli.</i></p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <h1>Associated result:</h1>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Conducting double antibiotics selection</h2>
            </div>
            <p>
                &emsp;&emsp;To confirm that the pColdI (Ampicillin resistant) and pSTV28 (Chloramphenicol resistant) can be co-expressed in the bacteria to establish the pfa megaenzyme expression system, we first performed the double antibiotics selection for pColdI and pSTV28 vectors.
            </p>
            <p>
                &emsp;&emsp;We start with fixing the concentration of ampicillin at 50 μg/ml, which is generally applied to select plasmids with Amp-resistance. The transformed copy number of plasmid was fixed at 10<sup>9</sup>. The range of chloramphenicol concentration from 5 to 20 μg/ml was selected according to the reports using the pSTV28 vector as expression vector.
            </p>
            <p>
                &emsp;&emsp;The selection result showed an apposite number of grown colonies at 10 μg/ml of chloramphenicol. Therefore, we selected the Amp (50 μg/ml) and Cm (10 μg/ml) for the double antibiotics selection.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <table class="gene_table">
                <thead>
                    <tr>
                        <td colspan="6">Copy number of each plasmid: 10<sup>9</sup> ; Ampicillin: 50 μg/ml</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Chloramphenicol</td>
                        <td colspan="3">Colony number</td>
                        <td>Mean</td>
                        <td>SD</td>
                    </tr>
                    <tr>
                        <td>5 μg/ml</td>
                        <td>232*</td>
                        <td>1240</td>
                        <td>1244</td>
                        <td>1242</td>
                        <td>2082</td>
                    </tr>
                    <tr>
                        <td>10 μg/ml</td>
                        <td>255</td>
                        <td>360</td>
                        <td>542</td>
                        <td>385.67</td>
                        <td>145.21</td>
                    </tr>
                    <tr>
                        <td>20 μg/ml</td>
                        <td>206</td>
                        <td>437</td>
                        <td>937*</td>
                        <td>321.5</td>
                        <td>163.34</td>
                    </tr>
                <tbody>
                
            </table>
            <p>*outliers excluded from the average.</p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;To further confirm that the two kinds of plasmids are co-expressed in the grown colonies, we randomly selected the grown colonies and purified the plasmids from these colonies. The purified plasmids were digested with restriction enzyme SapI. The gel electrophoresis result showed the sizes of restriction fragments of pColdI (5.7 kb) and pSTV28 (4.2, 0.9 kb) as expected.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/result/result41.png"/>
                    <div class="triangle_to_top"></div>Figure 38: The agarose image shows the digestion result of pColdI and pSTV28.
                </div>
            </div>
            <div id="" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Conducting triple antibiotics selection</h2>
            </div>
            <p>
                &emsp;&emsp;To confirm that the pfa-expressing vectors (pColdI and pSTV28) can be co-expressed with pET28a (kanamycin resistant) vector, we performed the triple antibiotics selection. 
            </p>
            <p>
                &emsp;&emsp;According to the result of double antibiotics selection, we start the triple antibiotics selection with fixing the concentration of Amp (50 μg/ml) and Cm (10 μg/ml). However, the condition is too harsh when adding kanamycin as the third antibiotic, and only a few colonies survived. We then decreased the concentration of chloramphenicol to 5 μg/ml, and performed triple antibiotics selection with 1.25 μg/ml, 2.5 μg/ml and 5 μg/ml kanamycin. 
            </p>
            <p>
                &emsp;&emsp;The result showed an apposite number of grown colonies at 5 μg/ml of kanamycin. Therefore, we selected the Amp (50 μg/ml), Cm (5 μg/ml) and Kan (5 μg/ml) for the triple antibiotics selection.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <table class="gene_table">
                <thead>
                    <tr>
                        <td colspan="6">Copy number: 10<sup>9</sup> ; Ampicillin: 50 μg/ml, Chloramphenicol:  5 μg/ml</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>kanamycin</td>
                        <td colspan="3">Colony number</td>
                        <td>Mean</td>
                        <td>SD</td>
                    </tr>
                    <tr>
                        <td>1.25 μg/ml</td>
                        <td>> 1000</td>
                        <td>> 1000</td>
                        <td>> 1000</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>2.5 μg/ml</td>
                        <td>134</td>
                        <td>252</td>
                        <td>534</td>
                        <td>193</td>
                        <td>83.43</td>
                    </tr>
                    <tr>
                        <td>5 μg/ml</td>
                        <td>79</td>
                        <td>139</td>
                        <td>179</td>
                        <td>132</td>
                        <td>50.26</td>
                    </tr>
                <tbody>
                
            </table>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <p>
                &emsp;&emsp;To further confirm that the three kinds of plasmids are co-expressed in the grown colonies, we randomly selected the grown colonies and purified the plasmids from these colonies. The purified plasmids were digested with restriction enzymes XbaI and BamHI. The gel electrophoresis result showed the sizes of restriction fragments of pColdI (4.4, 1.2 kb), pSTV28 (3.2, 1.4, 0.5 kb) and pET28a (5.6 kb) as expected.
            </p>
            <div class="marge" style="--width:calc(1em + 1vh)"></div>      
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/result/result42.png"/>
                    <div class="triangle_to_top"></div>Figure 39: The agarose image shows the digestion result of pColdI, pSTV28 and pET28a.
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
            <p>
                &emsp;&emsp;Through the double and triple antibiotics selection, we set up conditions which allow pColdI and pSTV28, or  pColdI, pSTV28 and pET28a vectors to co-exist in the <i>E. coli</i>. Therefore, we can co-transformed our engineering plasmids into <i>E. coli</i> and co-expressed the pfa megaenzyme with ACC enzymes to produce EPA.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>      
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
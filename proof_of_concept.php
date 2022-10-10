
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
    <div class="guide" id="guide">
        <div id="guide_content">
            <div class="guide_label" onclick="move_to_item('1')">
                Overview
            </div>
            <div class="guide_sub_label" onclick="move_to_item('2')">
                Obtaining the amplicon of <i>pfa</i> and <i>Acc</i> genes            
            </div>
            <div class="guide_sub_label" onclick="move_to_item('3')">
                Cloning <i>pfa D</i> into the pColdI vector
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4')">
                Inducing pfa D protein expression            
            </div>
            <div class="guide_sub_label" onclick="move_to_item('5')">
                Cloning <i>pfa E</i> into the pSTV28 vector
            </div>
            <div class="guide_sub_label" onclick="move_to_item('6')">
                Confirming pfa E protein expression
            </div>
            <div class="guide_sub_label" onclick="move_to_item('7')">
                Cloning <i>AccD</i> and <i>AccE</i> into the pET28a vector
            </div>
            <div class="guide_sub_label" onclick="move_to_item('8')">
                Confirming AccD1 and AccE protein expression
            </div>
            <div class="guide_sub_label" onclick="move_to_item('9')">
                Double antibiotic selection
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
                &emsp;&emsp;To generate an alternative source of EPA through synthetic biology, we cloned the EPA-producing <i>pfa</i> genes, <i>pfa A</i>, <i>pfa C</i>, and <i>pfa D</i>, from the deep-sea bacteria <i>Moritella marina</i>. The biobricks of <i>pfa B</i> (<i>Moritella marina</i>), <i>pfa B'</i> (<i>Shewanella pneumatophori</i>), and <i>pfa E</i> (<i>Moritella marina</i>) were ordered from IDT. The <i>pfa A</i> and <i>pfa D</i> genes were cloned into the pColdI vector under the control of a CspA promoter, while the <i>pfa B</i>, <i>pfa C</i>, and <i>pfa E</i> genes are cloned into the pSTV28 vector under the control of the lac operon.
            </p>
            <p>
                &emsp;&emsp;To enhance the yield of EPA, we ordered the biobricks for <i>AccBC</i>, <i>AccD1</i>, and AccE genes (<i>Corynebacterium glutamicum</i>) from IDT, and cloned these genes into the pET28a vector. These three vectors will be co-transformed into <i>E. coli</i>. and the EPA production will be examined by High Performance Liquid Chromatography (HPLC).
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="2" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - Obtaining the amplicon of pfa and Acc genes</h2>
            </div>
            <ul>
                <li>
                    <p>
                        To clone the <i>pfa</i> genes into the selected vectors, we PCR-amplified the <i>pfa A1</i> (the first 4.8 kb region of <i>pfa A</i>), <i>pfa A2</i> (the last 4 kb region of <i>pfa A</i>), <i>pfa C</i>, and <i>pfa D</i> from the genome of <i>Moritella marina</i> using pfu DNA polymerase
                    </p>
                    <div class="full_block">
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof01.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof02.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof03.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof04.png"/>
                        </div>
                    </div>
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p>
                        The <i>pfa B</i> (<i>Moritella marina</i>), <i>pfa B'</i> (<i>Shewanella pneumatophori</i>) and <i>pfa E</i> are amplified from ordered biobricks by PCR using pfu DNA polymerase. 
                    </p>
                    <div class="full_block">
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof05.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof06.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof07.png"/>
                        </div>
                    </div>
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p>
                        The amplicons of <i>pfa</i> genes were cloned into the TA vector for sequecing confirmation. The sequencing results of TA-<i>pfa D</i> and TA-<i>pfa E</i> are shown.
                    </p>
                    <div class="full_block">
                        <div class="img" style="--width:80%;">
                            <img src="<?php echo imgfile;?>/proof/proof08.png"/>
                        </div>
                    </div>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <div class="full_block">
                        <div class="img" style="--width:80%;">
                            <img src="<?php echo imgfile;?>/proof/proof09.png"/>
                        </div>
                    </div>
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p>
                        The <i>AccBC</i> biobrick, and <i>AccD1E</i> biobrick (containing the <i>AccD1</i> and <i>AccE</i> genes) from IDT were amplified by PCR using pfu DNA polymerase. 
                    </p>
                    <div class="full_block">
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof10.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof11.png"/>
                        </div>
                    </div>
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p>
                        The amplicons of Acc biobricks were cloned into the TA vector for sequencing confirmation. The sequencing results of TA-<i>AccBC</i> and TA-<i>AccD1E</i> are shown.
                    </p>
                    <div class="full_block">
                        <div class="img" style="--width:80%;">
                            <img src="<?php echo imgfile;?>/proof/proof12.png"/>
                        </div>
                    </div>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <div class="full_block">
                        <div class="img" style="--width:80%;">
                            <img src="<?php echo imgfile;?>/proof/proof13.png"/>
                        </div>
                    </div>
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p>
                        We also amplified the pColdI, pSTV28 and pET28a vectors. 
                    </p>
                    <div class="full_block">
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof14.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof15.png"/>
                        </div>
                        <div class="img" style="--width:20%;">
                            <img src="<?php echo imgfile;?>/proof/proof16.png"/>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - cloning <i>pfa D</i> into the pColdI vector</h2>
            </div>
            <p>
                &emsp;&emsp;The sequence confirmed <i>pfa D</i> was digested from TA-<i>pfa D</i> and ligated into the pColdI vector with selected restriction enzymes. The pColdI-<i>pfa D</i> was subjected to sequencing and the result is shown below.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/proof/proof17.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - inducing pfa D protein expression</h2>
            </div>
            <p>
                &emsp;&emsp;To induce pfa D protein expression, we cultured the BL21 bacteria with pCold-pfa D vectors in Terrific Broth with ampicillin and 1 mM IPTG at 16 °C. The bacteria were harvested at  9, 11, 13 hr and subjected into PAGE analysis and Coomassie blue staining. The predicted size of pfa D protein is around 60 kDa, but we observed clear protein induction with size around 45 kDa. We have confirmed that there is no premature stop codon in pCold-pfa D. We will perform experiments to confirm whether there is unexpected protease activity or we may optimize the codon near the suspected premature ending site.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/proof/proof18.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="5" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - cloning <i>pfa E</i> into the pSTV28 vector</h2>
            </div>
            <p>
                &emsp;&emsp;The sequence confirmed <i>pfa E</i> was digested from TA-<i>pfa E</i> and ligated into the pSTV28 vector with selected restriction enzymes. The pSTV28-<i>pfa E</i> was subjected to sequencing and the result is shown below. 
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/proof/proof19.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="6" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - confirming pfa E protein expression</h2>
            </div>
            <p>
                &emsp;&emsp;To induce pfa E protein expression, we cultured the BL21 bacteria with pSTV28-pfaE vectors in Terrific Broth with ampicillin and 5 mM IPTG at 37 °C. The bacteria were harvested at 8, 18, and 24 hr and subjected to PAGE analysis and Coomassie blue staining. The predicted size of the pfa E protein is around 32 kDa. The staining result clearly showed the induction of pfa E proteins.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/proof/proof20.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="7" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - cloning <i>AccD</i> and <i>AccE</i> into the pET28a vector</h2>
            </div>
            <p>
                &emsp;&emsp;The sequence confirmed <i>AccD1E</i> was digested from TA-<i>AccD1E</i>  and ligated into the pET28a vector with selected restriction enzymes. The pET28a-<i>AccD1E</i> was subjected to sequencing and the result is shown below. 
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/proof/proof21.png"/>
                </div>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="8" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - confirming AccD1 and AccE protein expression</h2>
            </div>
            <p>
                &emsp;&emsp;To induce AccD1 and AccE protein expression, we cultured the BL21 bacteria with pET28a-<i>AccD1E</i> vectors in Terrific Broth with ampicillin and 0.4 mM IPTG at 37 °C. The bacteria were harvested at  2, 3, and 4 hr and subjected to PAGE analysis and Coomassie blue staining. The predicted sizes of AccD1 and AccE proteins are around 60 kDa and 10 kDa, respectively. The staining results clearly showed the induction of AccD1 and AccE proteins.
            </p>
            <div class="full_block">
                <div class="img" style="--width:50%;">
                    <img src="<?php echo imgfile;?>/proof/proof22.png"/>
                </div>
            </div>            
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="9" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Milestone - double antibiotic selection</h2>
            </div>
            <p>
                &emsp;&emsp;To confirm that the pColdI (Ampicillin resistant) and pSTV28 (Chloramphenicol resistant) plasmids can be co-expressed in bacteria to establish the pfa mega-enzyme expression system, we first performed a double antibiotic selection for pColdI and pSTV28 vectors.
            </p>
            <p>
                &emsp;&emsp;We start by fixing the concentration of Ampicillin at 50 μg/ml, which is generally applied to select plasmids with Amp-resistance. The transformed copy number of the plasmid was fixed at 109. A range of chloramphenicol concentrations from 5 to 20 μg/ml were selected according to reports using the pSTV28 vector as expression vector. 
            </p>
            <p>
                &emsp;&emsp;The selection results showed an apposite number of colonies at 10 μg/ml of chloramphenicol. Therefore, we selected the Amp (50 μg/ml) and Cm (10 μg/ml) for the double antibiotic selection.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <table class="gene_table">
                <thead>
                    <tr>
                        <td colspan="6">Copy number: 10<sup>9</sup> ; Ampicillin: 50 μg/ml, Chloramphenicol:  5 μg/ml</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kanamycin</td>
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
                        <td>138</td>
                        <td>179</td>
                        <td>132</td>
                        <td>50.26</td>
                    </tr>
                <tbody>
                
            </table>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;To further confirm that all three kinds of plasmids are co-expressed in the grown colonies, we randomly selected some of the colonies and purified the plasmids from these colonies. The purified plasmids were digested with restriction enzymes XbaI and BamHI. The gel electrophoresis result showed the sizes of restriction fragments of pColdI (4.4, 1.2 kb), pSTV28 (3.2, 1.4, 0.5 kb) and pET28a (5.6 kb), as expected.
            </p>
            <div class="full_block">
                <div class="img" style="--width:80%;">
                    <img src="<?php echo imgfile;?>/proof/proof24.png"/>
                </div>
            </div>   
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <p>
                &emsp;&emsp;Through the double and triple antibiotic selection, we set up conditions which allow pColdI and pSTV28, or  pColdI, pSTV28 and pET28a vectors to co-exist in <i>E. coli</i> Therefore, we can co-transform our engineered plasmids into <i>E. coli</i> and co-express the pfa mega-enzyme with ACC enzyme to produce EPA.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
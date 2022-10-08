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
                INTRODUCTION
            </div>
            <div class="guide_label" onclick="move_to_item('3');guide_toggle()">
                BIOSAFETY
            </div>
            <div class="guide_sub_label" onclick="move_to_item('3');guide_toggle()">
                Personal safety
            </div>
            <div class="guide_sub_label" onclick="move_to_item('4');guide_toggle()">
                Laboratory Safety
            </div>
            <div class="guide_label" onclick="move_to_item('5');guide_toggle()">
                PROJECT SAFETY
            </div>
            <div class="guide_sub_label" onclick="move_to_item('6');guide_toggle()">
                Environmental safety
            </div>
            <div class="guide_sub_label" onclick="move_to_item('7');guide_toggle()">
                Application safety
            </div>
            <div class="guide_label" onclick="move_to_item('8');guide_toggle()">
                Reference
            </div>


        </div>
        <div id="expansion" onclick="guide_toggle()">
            <div class="overlap_item trapezoid"></div>
            <!-- <div class="overlap_item triangle_to_left"></div> -->
            <div class="overlap_item triangle_to_right"></div>
            
        </div>    
    </div>
    <img class="full_size_image" src="<?php echo imgfile;?>/safety/banner-safety.png" alt=""> 
 
    <div class="article">
        <div class="in_center">
            <div id="1" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">INTRODUCTION</h1>
            </div>
            <p>
                &emsp;&emsp;Safety and security have always been the top priorities when it comes to bioengineered food or health products. While we are devoted to science progress, it is also important to take safety into consideration. This document shows our compliance with the related safety rules for biosafety, laboratory safety, and project safety.
            </p>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">BIOSAFETY</h1>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Personal safety</h2>
            </div>
            <p>
                &emsp;&emsp;Before we started our work in the lab, all the team members had to receive training courses in which we learned the importance of safety rules, including that eating and drinking are not allowed in the lab and never conducting experiments alone. Also, we should wear personal protection equipment, such as lab coats, gloves, and goggles, when conducting experiments.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Laboratory Safety</h2>
            </div>
            <p>
                &emsp;&emsp;The experiments in our project can be conducted in a biosafety level 1 laboratory.Bacterial transfers and work with volatile chemicals should be performed in biosafety cabinets and fume hoods, respectively. Besides, we also learned the proper use of and precautions for various machines in the laboratory, and understood what hazards may be encountered in the laboratory and how to deal with them if they occur. Furthermore, we must immediately report to our advisor or safety center if there is any accident or equipment damage.
            </p>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">PROJECT SAFETY</h1>
            </div>
            <div id="6" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Environmental safety</h2>
            </div>
            <ul>
                <li>
                    <h3 style="background-color: #97dffc";><i><b>E. coli</b></i></h3>
                    <p>
                        &emsp;&emsp;Two strains of <i>E. col</i> are involved in our experiments, BL21(DE3) and DH5α, which are low risk to human beings. After each experiment, we bleach and autoclave the biowastes to ensure that the bacteria do not escape into the environment.
                    </p>
                </li>
                <li>
                    <h3 style="background-color: #97dffc";><b>Product</b></h3>
                    <p>
                        &emsp;&emsp;The carrageenans as the basic material for our vegan-friendly EPA capsule.
                    </p>
                </li>
            </ul>
            <div id="7" class="title-label-div">
                <h2 class="title_sub_label" style="background-image: url('/igem6/img/highlight.png')">Application safety</h2>
            </div>
            <ul>
                <li>
                    <h3 style="background-color: #97dffc";><b>Endotoxin</b></h3>
                    <p>
                        &emsp;&emsp;To produce EPA, we transform the EPA-producing genes into <i>Escherichia coli</i>. As a gram‐negative bacteria, endotoxins in the outer cell membrane are released upon death. To avoid contamination by endotoxins in our final product, we explored  potential methods to remove endotoxins:
                    </p>
                    <ul>
                        <li>
                            <h3 style="color: #613dc1";>Ultrafiltration</h3>
                            <p>
                                &emsp;&emsp;On a small scale, the endotoxin micelles and vesicles can be separated from water, salts, and small target therapeutic molecules through size exclusion in ultrafiltration. Factors that affect the removal of endotoxins include the size distribution of molecules in solution, interactions with target molecules, target protein concentrations, and the presence of detergents. 
                            </p>
                            <p>
                                &emsp;&emsp;The main limitation associated with ultrafiltration is its limited endotoxin removal efficiency for molecules that are magnitudes smaller than endotoxin aggregates. This method is best suited for removing endotoxins from water, salts, and small molecule therapeutics that do not have an affinity for endotoxins.
                            </p>
                        </li>
                        <li>
                            <h3 style="color: #613dc1";>Solvent extraction</h3>
                            <p>
                                &emsp;&emsp;Solvent extraction is used to separate endotoxins from target therapeutics based on their relative solubilities in two immiscible liquids. Endotoxin partitions in the organic phase, while hydrophilic target molecules remain in the aqueous phase.
                            </p>
                        </li>
                        <li>
                            <h3 style="color: #613dc1";>Anion‐exchange chromatography</h3>
                            <p>
                                &emsp;&emsp;Anion‐exchange chromatography can be used to separate negatively charged endotoxins from positively charged molecules, such as basic proteins.
                            </p>
                        </li>
                        <li>
                            <h3 style="color: #613dc1";>Affinity chromatography</h3>
                            <p>
                                &emsp;&emsp;Affinity chromatography is used to separate endotoxins from target molecules using highly specific interactions between endotoxins and a ligand bound to a stationary phase. Because of the specificity of the ligand, there is little to no product loss during separation. The target therapeutic molecule will elute with a greater velocity than endotoxin molecules due to specificity. The ligand chosen should have a strong interaction with endotoxins and a weak interaction with the target therapeutic molecule at separation conditions. Affinity chromatography can be used with a wide range of target molecules, including pDNA and proteins.
                            </p>
                        </li>
                        <li>
                            <h3 style="color: #613dc1";>Membrane adsorption</h3>
                            <p>
                                &emsp;&emsp;Membrane adsorption exploits the same mechanisms used in affinity and ion‐exchange chromatography but offers a reduced processing time and initial investment. Similar to affinity chromatography, a product yield near 100% can be achieved.
                            </p>
                            <p>
                                &emsp;&emsp;In membrane adsorption, the same ligands used in affinity chromatography or resins used in ion‐exchange chromatography are bound to a support medium. The use of a membrane greatly improves flow rates and nearly eliminates diffusion limitations. Membranes can be made of cellulose, cellulose acetate, nylon, polyethylene vinyl acetate, polyvinyl alcohol, and polyvinylidene fluoride. The membrane capsules are single‐use, meaning there is no need for eluting, cleaning, or regenerating. The benefits of single‐use membranes include a decreased chance of product contamination, reduced process time and decreased buffer volume due to the decrease in required cleaning steps.
                            </p>                          
                        </li>
                        <li>
                            <h3 style="color: #613dc1";>Conclusion</h3>
                            <p>
                                &emsp;&emsp;Due to the limitations of each method, we will conduct additional research both in theory and in practice to select the most cost‐effective way(s) for us to deal with endotoxins. After we successfully prove the feasibility of our EPA-producing system in <i>Escherichia coli</i>, we will further apply this system in Nissle 1917, which is a FDA proven bacterial species for producing nutritional supplements.
                            </p>
                        </li>
                    </ul>    
                </li>
                <li>
                    <h3 style="background-color: #97dffc";>Extraction</h3>
                    <p>
                        &emsp;&emsp;To analyze the EPA:lipid ratio, we will extract the lipid product from the EPA-producing <i>E. coli</i> by the Folch method, then run High Performance Liquid Chromatography (HPLC). In the successive process, some hazardous chemicals will be used. These chemicals and their applications are listed as follows.
                    </p>  
                    <p style="color: #613dc1";>
                        1. Methanol and chloroform will be used as solvents to extract lipids.
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: methanol is a poisonous substance that can be absorbed through the eyes, skin, lungs, and digestive system.  Overexposure can cause death.
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: chloroform can be toxic if inhaled or swallowed. Exposure to chloroform may also cause cancer.
                    </p>

                    <p style="color: #613dc1";>
                        2. Ethanol is applied to conduct transesterification to convert the extracted lipids into FAEEs (fatty acid ethyl esters).
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: high concentrations may damage a fetus. Contact can irritate the skin and eyes. Prolonged or repeated exposure can cause drying and cracking of the skin with peeling, redness and itching.
                    </p>
                
                    <p style="color: #613dc1";>
                        3. Sulfuric acid is used as a catalyst in transesterification.
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: Sulfuric acid can cause severe burns at high concentrations. It can decompose proteins and lipids by amide and ester hydrolysis when contacting living tissues. Also, its strong dehydrating property on carbohydrates will cause secondary thermal burns due to extra heat. If ingested, it damages internal organs severely.
                    </p>  
                    <p>
                        &emsp;&emsp;According to the protocol, the methanol layer will be discarded. The chloroform layer containing lipids will be pooled and concentrated using a rotary evaporator, which evaporates the remaining chloroform. In the last step, sulfuric acid could be removed through elution.
                    </p>

                    <h3 style="background-color: #97dffc";></h3>         
                </li>
                <li>
                    <h3 style="color: #613dc1";>Recommended daily allowance</h3>
                    <p>
                        &emsp;&emsp;According to the American Heart Association, the EPA recommended daily allowance for CVD prevention is 1 g. Therefore, the amount of EPA will be set at 0.5 g in each capsule. Also, we will indicate that the consumers should avoid taking more than two capsules for adults and one for children per day. Besides, we will show the EPA content of the capsule and the recommended daily allowance on the package.
                    </p>
                </li>
            </ul>
            
            <div id="8" class="title-label-div">
                <p class="h25">
                    Reference:
                    <ol>
                        <li>
                            Schneier, M., Razdan, S., Miller, A. M., Briceno, M. E., & Barua, S. (2020). Current technologies to endotoxin detection and removal for biopharmaceutical purification. Biotechnology and Bioengineering, 117(8), 2588-2609.
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
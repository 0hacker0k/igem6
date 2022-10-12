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
                &emsp;&emsp;Safety instructions and securities have always been the top priorities when it comes to bioengineered food. While we are devoted to science progress, it is also important to take safety into consideration. This document shows our compliance with the related safety rules for biosafety, and project safety.
            </p>
            <div id="2" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">BIOSAFETY</h1>
            </div>
            <div id="3" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Personal safety</h2>
            </div>
            <p>
                &emsp;&emsp;Before we started our work in the lab, all the team members had to receive training courses in which we learned the importance of safety rules, including that eating and drinking are not allowed in the lab, and never operating experiments alone. Also, we should wear personal protection equipment, such as lab coats, gloves, and goggles, as operating experiments.
            </p>
            <div id="4" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Laboratory Safety</h2>
            </div>
            <p>
                &emsp;&emsp;The experiments in our project can be conducted in a biosafety level 1 laboratory. In addition, the operation of bacteria and volatile chemicals should be performed in the biosafety cabinets and fume hoods, respectively. Besides, we also learn the use and precautions of various machinery in the laboratory, and understand what hazards might be encountered in the laboratory and how to deal with them when they occur. Furthermore, we must immediately report to our advisor or safety center if there is any accident or equipment damage.
            </p>
            <div id="5" class="title-label-div">
                <h1 class="title_label" style="background-image:url('<?php echo imgfile;?>/tape.png')">PROJECT SAFETY</h1>
            </div>
            <div id="6" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Environmental safety</h2>
            </div>
            <ul>
                <li>
                    <p class="h13"><i><b>E. coli</b></i></p>
                    <p>
                        &emsp;&emsp;Two strains of <i>E. coli</i> BL21 (DE3) and DH5α are applied in the experiments. These two strains belong to the biosafety level 1, which are low risk to human beings. According to the biosafety rules in experiment operation, all the biowastes will be  sterilized by autoclaving, and the environment will be sterilized by bleaching or decontaminated by 75% EtOH.
                    </p>
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p class="h13"><b>Product</b></p>
                    <p>
                        &emsp;&emsp;We choose carrageenans as the basic material for EPA capsules. Carrageenans are linear sulfated polysaccharides that are extracted from various genera of red algae. It is biodegradable, and non-toxic, and also won’t interfere with the environment.
                    </p>
                </li>
            </ul>
            <div id="7" class="title-label-div">
                <h2 class="special_sublable" style="background-image: url('<?php echo imgfile;?>/highlight.png')">Application safety</h2>
            </div>
            <ul>
                <li>
                    <p class="h13"><b>Endotoxin</b></p>
                    <p>
                        &emsp;&emsp;To produce EPA, we transform the EPA-producing genes into <i>E. coli</i>. As gram‐negative bacteria, endotoxins in the outer cell membrane are released upon death. To avoid the contamination of endotoxin in our final product, we explore the  potential methods to remove endotoxins:
                    </p>
                    
                    <ul>
                        <div class="marge" style="--width:calc(3em + 5vh)"></div>
                        <li>
                            <p class="h18">Ultrafiltration</p>
                            <p>
                                &emsp;&emsp;In small scale, the endotoxin micelles and vesicles can be separated from water, salts, and small target therapeutic molecules through size exclusion in ultrafiltration. The main limitation associated with ultrafiltration is its limited endotoxin removal efficiency for molecules that are magnitudes smaller than endotoxin aggregates.
                            </p>
                        </li>
                        <div class="marge" style="--width:calc(3em + 5vh)"></div>
                        <li>
                            <p class="h18">Affinity chromatography</p>
                            <p>
                                &emsp;&emsp;Affinity chromatography is used to separate endotoxins from target molecules using highly specific interactions between endotoxins and a ligand bound to a stationary phase. Because of the specificity of the ligand, there is little to no product loss during separation. 
                            </p>
                        </li>
                        <div class="marge" style="--width:calc(3em + 5vh)"></div>
                        <li>
                            <p class="h18">Membrane adsorption</p>
                            <p>
                                &emsp;&emsp;Membrane adsorption exploits the same mechanisms used in affinity and ion‐exchange chromatography but offers a reduced processing time and initial investment. Similar to affinity chromatography, a product yield near 100% can be achieved.
                            </p>                         
                        </li>
                        <div class="marge" style="--width:calc(3em + 5vh)"></div>
                        <p class="h18"><b>Conclusion</b></p>
                        <p>
                            &emsp;&emsp;Due to the limits of each method, the selected method for endotoxin removement and safety concern will depend on the final products. Alternatively, we may shift our system to Nissle 1917, which is a FDA proven bacterial species for producing nutritional supplements.
                        </p>
                    </ul>    
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p class="h13"><b>Extraction</b></p>
                    <p>
                        &emsp;&emsp;The Folch method extraction and High Performance Liquid Chromatography (HPLC) will be applied to analyze the EPA : lipid ratio. In the successive process, some hazardous chemicals will be used. These chemicals and their applications are listed as follows.
                    </p>  
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <p style="color: #800000";>
                        1. Methanol and chloroform will be used as solvents to extract lipids.
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: Methanol is a poisonous substance that can be absorbed through the eyes, skin, lungs, and digestive system.  Overexposure can cause death.                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: Chloroform can be toxic if inhaled or swallowed. Exposure to chloroform may also cause cancer.
                    </p>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <p style="color: #800000";>
                        2. Ethanol is applied to conduct transesterification to convert the extracted lipids into fatty acid ethyl esters (FAEEs).
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: High concentrations may damage a fetus. Contact can irritate the skin and eyes. Prolonged or repeated exposure can cause drying and cracking of the skin with peeling, redness and itching.
                    </p>
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <p style="color: #800000";>
                        3. Sulfuric acid is used as a catalyst in transesterification.
                    </p>
                    <p style="color: #EA2B1F";>
                        Caution: Sulfuric acid can cause severe burns at high concentrations. It can decompose proteins and lipids by amide and ester hydrolysis when contacting living tissues. Also, its strong dehydrating property on carbohydrates will cause secondary thermal burns due to extra heat. If ingested, it damages internal organs severely.
                    </p>  
                    <div class="marge" style="--width:calc(3em + 5vh)"></div>
                    <p>
                        &emsp;&emsp;According to the protocol, the methanol layer will be discarded. The chloroform layer containing lipids will be pooled and concentrated using a rotary evaporator, which evaporates the remaining chloroform. In the last step, sulfuric acid could be removed through elution.
                    </p>

                    <p class="h13"></p>         
                </li>
                <div class="marge" style="--width:calc(3em + 5vh)"></div>
                <li>
                    <p class="h13">Recommended daily allowance</p>
                    <p>
                        &emsp;&emsp;According to the American Heart Association, the EPA recommended daily allowance for CVD prevention is 1 g. Therefore, the amount of EPA will be set at 0.5 g in each capsule. Also, we will indicate that the consumers should avoid taking more than two capsules for adults and one for children per day. Besides, we will show the EPA content of the capsule and the recommended daily allowance on the package.
                    </p>
                </li>
            </ul>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <div id="8" class="h25">
                <p class="h25">
                    Reference:
                    <ul>
                        <li>
                            Pacheco-Quito, E. M., Ruiz-Caro, R., & Veiga, M. D. (2020). Carrageenan: drug delivery systems and other biomedical applications. <i>Marine Drugs</i>, 18(11), 583.
                        </li>
                        <li>
                            Schneier, M., Razdan, S., Miller, A. M., Briceno, M. E., & Barua, S. (2020). Current technologies to endotoxin detection and removal for biopharmaceutical purification. Biotechnology and Bioengineering, 117(8), 2588-2609.
                        </li>
                    </ul>
                </p>
            </div>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
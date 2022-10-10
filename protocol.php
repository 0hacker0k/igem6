
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/protocol.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/protocol/banner-protocol.png" alt=""> 
    <div class="main_div">
    <div class="left_div">
        <div onclick="protocol_change('1')" class="page_tag" style="background-color: #ffffff;">
            taq polymerase PCR Protocol
        </div>
        <div onclick="protocol_change('2')" class="page_tag" style="background-color: #effffa;">
            pfu polymerase PCR Protocol
        </div>
        <div onclick="protocol_change('3')" class="page_tag" style="background-color: #e8f1f2;">
            PCR Cleanup Protocol
        </div>
        <div onclick="protocol_change('4')" class="page_tag" style="background-color: #e5ecf4;">
            TA-ligation
        </div>
        <div onclick="protocol_change('5')" class="page_tag" style="background-color: #bfd7ea;">
            Ligate into target vector
        </div>
        <div onclick="protocol_change('6')" class="page_tag" style="background-color: #9fcbf2;">
            Transformation
        </div>
        <div onclick="protocol_change('7')" class="page_tag" style="background-color: #7ebef9;">
            Colony PCR Protocol
        </div>
        <div onclick="protocol_change('8')" class="page_tag" style="background-color: #7ebbf3;">
            Mini Plasmid Kit Quick Protocol
        </div>
        <div onclick="protocol_change('9')" class="page_tag" style="background-color: #7ebee8;">
            Digestion Protocol
        </div>
        <div onclick="protocol_change('10')" class="page_tag" style="background-color: #7ebae1;">
            Gel Extraction Protocol
        </div>
        <div onclick="protocol_change('11')" class="page_tag" style="background-color: #7ebdd2;">
            Protein extraction
        </div>
        <div onclick="protocol_change('12')" class="page_tag" style="background-color: #7ebbc5;">
            Standard Procedure for Microtiter Plates
        </div>
        <div onclick="protocol_change('13')" class="page_tag" style="background-color: #7ebdb2;">
            Induction Protocol
        </div>
        <div onclick="protocol_change('14')" class="page_tag" style="background-color: #7ebda1;">
            SDS-PAGE protocol
        </div>
        <div onclick="protocol_change('15')" class="page_tag" style="background-color: #93bf85;">
            Bacteria Stock
        </div>
        <div onclick="protocol_change('16')" class="page_tag" style="background-color: #6eaa5e;">
            Recipe
        </div>
    </div>
    <div class="right_div">
        <div id="1" class="content" style="display: block">
            <h1>taq polymerase PCR Protocol</h1>
            <ol class="normal">
                <li>
                    Thaw the PCR Master Mix<br />
                    Vortex the Master Mix and then spin it briefly in a microcentrifuge to collect the material in the
                    bottom of the tube.
                </li>
                <li>
                    Prepare the following reaction mixes
                </li>
            </ol>
            <p>For a 20 μl reaction volume:</p>
            <table class="line_table">
                <thead>
                    <tr>
                        <th style="width:60%">Component</th>
                        <th style="width:40%">Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GoTaq® Green Master Mix</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>10 µM Primer (F)</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>10 µM Primer (R)</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>100 ng/µl DNA template</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>ddH2O</td>
                        <td>8.5</td>
                    </tr>
                </tbody>
            </table>
            <ol class="normal" start="3">
                <li>
                    Denaturation<br />
                    Generally, a 2-minute initial denaturation step at 95°C is sufficient. Subsequent denaturation steps
                    will be between 30 seconds and 1 minute.
                </li>
                <li>
                    Annealing<br />
                    Optimize the annealing conditions by performing the reaction starting approximately 5°C below the
                    calculated melting temperature of the primers and increasing the temperature in increments of 1°C to
                    the annealing temperature.The annealing step is typically 30 seconds to 1 minute.
                </li>
                <li>
                    Elongation<br />
                    The extension reaction is typically performed at the optimal temperature for Taq DNA polymerase,
                    which is 72–74°C.
                    <br />Allow approximately 1 minute for every 1kb of DNA to be amplified.
                    <br />A final extension of 5 minutes at 72–74°C is recommended.
                </li>
                <li>
                    Refrigeration<br />
                    If the thermal cycler has a refrigeration or ”soak” cycle, the cycling reaction can be programmed to
                    end by holding the tubes at 4°C for several hours.
                    <br />This cycle can minimize any polymerase activity that might occur at higher temperatures,
                    although this is not usually a problem.
                </li>
                <li>
                    Cycle Number<br />
                    Generally, 25-30 cycles result in optimal amplification of desired products. Occasionally, up to 40
                    cycles may be performed, especially for detection of low-copy targets.
                </li>
            </ol>
            <table class="line_table">
                <!-- <thead>
                    <tr>
                        <th style="width:25%"></th>
                        <th style="width:25%"></th>
                        <th style="width:25%"></th>
                        <th style="width:25%"></th>
                    </tr>
                </thead> -->
                <tbody>
                    <tr>
                        <td rowspan="2">Denaturation</td>
                        <td>95°C</td>
                        <td>3 min</td>
                        <td rowspan="4">40 X cycle</td>
                    </tr>
                    <tr>
                        <td>95°C</td>
                        <td>30 s</td>
                    </tr>
                    <tr>
                        <td>Annealing</td>
                        <td>58°C</td>
                        <td>30 s</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Elongation</td>
                        <td>72°C</td>
                        <td>1 min per kb</td>
                    </tr>
                    <tr>
                        <td>72°C</td>
                        <td>7 min</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Refrigeration</td>
                        <td>4°C</td>
                        <td>∞</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="2" class="content">
            <h1>pfu polymerase PCR Protocol</h1>
            <ol class="normal">
                <li>
                    Gently mix the reaction and collect the liquid at the bottom of the tube with a quick spin.
                </li>
                <li>
                    Transfer reaction quickly to a preheated thermocycler (98℃)
                </li>
            </ol>
            <p>For a 25 μl reaction volume:</p>
            <table class="line_table">
                <thead>
                    <tr>
                        <th style="width:60%">Component</th>
                        <th style="width:40%">Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5X Phusion HF or GC buffer</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>10 mM dNTPs</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>10 µM Forward Primer </td>
                        <td>1.25</td>
                    </tr>
                    <tr>
                        <td>10 µM Reverse Primer </td>
                        <td>1.25</td>
                    </tr>
                    <tr>
                        <td>Template DNA</td>
                        <td>variable</td>
                    </tr>
                    <tr>
                        <td>Phusion DNA Polymerase</td>
                        <td>0.25</td>
                    </tr>
                    <tr>
                        <td>DMSO (optional)</td>
                        <td>(0.75)</td>
                    </tr>
                    <tr>
                        <td>Nuclease-Free Water</td>
                        <td>to 25</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="3" class="content">
            <h1>PCR Cleanup Protocol</h1>
            <ol class="normal">
                <li>
                    Sample Preparation
                    <ul>
                        <li>
                            Transfer up to 100 μl of reaction product to a 1.5 ml microcentrifuge tube.
                        </li>
                        <li>
                            Add 5 volumes of Gel/PCR Buffer to 1 volume of the sample and mix by vortex.
                        </li>
                    </ul>
                </li>
                <li>
                    DNA Binding
                    <ul>
                        <li>
                            Place a DFH Column in a 2 ml Collection Tube.
                        </li>
                        <li>
                            Transfer the sample mixture to the DFH Column.Centrifuge at 14-16,000 xg for 30 seconds.
                            Discard the flow-through and place the DFH Column back in the 2ml Collection Tube.
                        </li>
                    </ul>
                </li>
                <li>
                    Wash
                    <ul>
                        <li>
                            Add 600 μl of Wash Buffer (make sure ethanol was added) into the center of the DFH Column.
                            Let stand for 1 minute at room temperature. Centrifuge at 14-16,000 x g for 30 seconds.
                            Discard the flow-through and place the DFH Column back in the 2 ml Collection Tube.
                        </li>
                        <li>
                            Centrifuge at 14-16,000 x g for 3 minutes to dry the column.
                        </li>
                    </ul>
                </li>
                <li>
                    DNA Elution
                    <ul>
                        <li>
                            Transfer the dried DFH Column to a new 1.5 ml microcentrifuge tube.
                        </li>
                        <li>
                            Add 20 μl of (60-70°C) pre-heated ddH2O into the center of the column matrix. Let stand for
                            at least 2 minutes.
                        </li>
                        <li>
                            Centrifuge for 2 minutes at 14-16,000 x g to elute the purified DNA.
                        </li>
                    </ul>
                </li>
            </ol>

        </div>
        <div id="4" class="content">
            <h1>TA-ligation</h1>
            <ol class="normal">
                <li>Prepare the following components</li>
            </ol>
            <table class="line_table">
                <thead>
                    <tr>
                        <th>Component</th>
                        <th>Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>insert : vector (volume ratio) = 7 : 1 (or 4 : 4)</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>T4 Ligase (NEB)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>10X Ligase buffer (NEB)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            <ol class="normal" start="2">
                <li>Set at room-temperature for 3 hrs or 16°C overnight for ligation</li>
            </ol>
        </div>
        <div id="5" class="content">
            <h1>Ligate into target vector</h1>
            <ol class="normal">
                <li>Prepare the following components</li>
            </ol>
            <table class="line_table">
                <thead>
                    <tr>
                        <th>Component</th>
                        <th>Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>insert : vector (mole ratio) = 3 : 1 (or 1 : 1)</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>T4 Ligase (NEB)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>10X Ligase buffer (NEB)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
            <ol class="normal" start="2">
                <li>Set at room-temperature for 3 hrs or 16°C overnight for ligation</li>
            </ol>
        </div>
        <div id="6" class="content">
            <h1>Transformation</h1>
            <ol class="bracket">
                <li>
                    Thaw competent cells with room temperature or water bath for 10~20 seconds until ⅓ thawed or thaw
                    competent cells with the ice bucket.
                </li>
                <li>
                    Mix 10 μl ligation product with 30 μl competent cells by vortexing 1 second.
                </li>
                <li>
                    Incubate on ice for 5 minutes.
                </li>
                <li>
                    Transfer to LB plate with desired antibiotics at 37°C, and spread transformed cells by rolling glass
                    beads.
                </li>
                <li>
                    Immediately incubate the plate at 37°C for 16~18 hours.
                </li>
            </ol>
        </div>
        <div id="7" class="content">
            <h1>taq polymerase PCR Protocol</h1>
            <ol class="normal">
                <li>
                    Preparation
                    <ul>
                        <li>Prepare 200 μl tubes and 1.5 mL tubes.</li>
                        <li>Add 5 μl ddH2O into each 200 μl tuberculosis.</li>
                        <li>Add 50 μl TB+AMP broth into each 1.5 mL tube.</li>
                    </ul>
                </li>
                <li>
                    Pick colony
                    <ul>
                        <li>Pick a single colony by toothpick into each tube, stir with 5 μl ddH2O, and then stir with
                            50 μl TB+AMP.</li>
                    </ul>
                </li>
                <li>
                    Prepare PCR mix
                    <ul>
                        <li>The PCR mix needs to prepare (n+1) tubes every 15 tubes. (15+1, 30+2, 45+3, ...)</li>
                    </ul>
                </li>
            </ol>
            <table class="line_table">
                <thead>
                    <tr>
                        <th style="width:60%">Component</th>
                        <th style="width:40%">Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GoTaq® Green Master Mix</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>10 µM Primer (F)</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>10 µM Primer (R)</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>ddH2O</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>
            <ol class="normal" start="4">
                <li>
                    Make mixture
                    <ul>
                        <li>Add 15 μl PCR mix to the 200 μl tube. ( total 20 μl )</li>
                    </ul>
                </li>
                <li>
                    Run PCR
                </li>
            </ol>
            <table class="line_table">
                <tbody>
                    <tr>
                        <td rowspan="2">Denaturation</td>
                        <td>95°C</td>
                        <td>3 min</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95°C</td>
                        <td>30 s</td>
                        <td rowspan="3">40 X cycle</td>
                    </tr>
                    <tr>
                        <td>Annealing</td>
                        <td>58°C</td>
                        <td>30 s</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Elongation</td>
                        <td>72°C</td>
                        <td>1 min per kb</td>
                    </tr>
                    <tr>
                        <td>72°C</td>
                        <td>7 min</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Refrigeration</td>
                        <td>4°C</td>
                        <td>∞</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="8" class="content">
            <h1>Mini Plasmid Kit Quick Protocol</h1>
            <ol class="normal">
                <li>
                    Harvesting
                    <ul>
                        <li>
                            Transfer 1.5 ml of cultured bacterial cells (1-2 x 109 E. coli grown in TB medium) to a 1.5
                            ml microcentrifuge tube.
                        </li>
                        <li>
                            Centrifuge at 5000 x g for 3 minute at room temperature to form a cell pellet then discard
                            the supernatant completely.
                        </li>
                        <li>
                            Repeat the harvesting step as required for samples between 1.5-6.0 ml using the same1.5 ml
                            microcentrifuge tube.
                        </li>
                    </ul>
                </li>
                <li>
                    Resuspension
                    <ul>
                        <li>
                            Add 200 μl of PD1 Buffer (make sure RNase A was added) to the 1.5 ml microcentrifuge tube
                            containing the cell pellet.
                        </li>
                        <li>
                            Resuspend the cell pellet completely by vortex or pipette until all traces of the cell
                            pellet have been dissolved.
                        </li>
                    </ul>
                </li>
                <li>
                    Cell Lysis
                    <ul>
                        <li>
                            Add 200 μl of PD2 Buffer to the resuspended sample then mix gently by inverting the tube 10
                            times.
                        </li>
                        <li>
                            Do not vortex to avoid shearing the genomic DNA. Let stand at room temperature for at least
                            2 minutes to ensure the lysate is homogeneous. Do not exceed 5 minutes.
                        </li>
                    </ul>
                </li>
                <li>
                    Neutralization
                    <ul>
                        <li>
                            Add 200 μl of PD3 Buffer then mix immediately by inverting the tube 10 times.
                        </li>
                        <li>
                            Do not vortex to avoid shearing the genomic DNA.
                        </li>
                        <li>
                            Centrifuge at 14-16,000 x g for 3 minutes at room temperature.
                        </li>
                        <li>
                            If using >5 ml of bacterial cells,centrifuge at 16-20,000 x g for 5-8 minutes. During
                            centrifugation, place a PDH Column in a 2 ml Collection Tube.
                        </li>
                    </ul>
                </li>
                <li>
                    DNA Binding
                    <ul>
                        <li>
                            Transfer all of supernatants to the PDH Column. Use a narrow pipette tip to ensure the
                            supernatant is completely transferred without disrupting the white precipitate.
                        </li>
                        <li>
                            Centrifuge at 14-16,000 x g for 30 seconds at room temperature then discard the
                            flow-through. Place the PDH Column back in the 2 ml Collection Tube.
                        </li>
                    </ul>
                </li>
                <li>
                    Wash
                    <ul>
                        For Improved Downstream Sequencing Reactions
                        <li>
                            Add 400 μl of W1 Buffer into the PDH Column.
                        </li>
                        <li>
                            Centrifuge at 14-16,000 x g for 30 seconds. Discard the flow-through then place the PDH
                            Column back in the 2 ml Collection Tube. Proceed with Wash Buffer addition.
                        </li>
                        For Standard Plasmid DNA Purification
                        <li>
                            Add 600 μl of Wash Buffer (make sure absolute ethanol was added) into the PDH Column.
                        </li>
                        <li>
                            Centrifuge at 14-16,000 x g for 30 seconds at room temperature. Discard the flow through
                            then place the PDH Column back in the 2 ml Collection Tube.
                        </li>
                    </ul>
                </li>
            </ol>
        </div>
        <div id="9" class="content">
            <h1>Digestion Protocol</h1>
            <ol class="normal">
                <li>
                    digest insert
                </li>
            </ol>
            <table class="line_table">
                <thead>
                    <tr>
                        <th style="width:60%">Component</th>
                        <th style="width:40%">Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>insert</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>buffer</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>restriction enzymes</td>
                        <td>1 + 1</td>
                    </tr>
                </tbody>
            </table>
            <ol class="normal" start="2">
                <li>
                    digest target vector
                </li>
            </ol>
            <table class="line_table">
                <thead>
                    <tr>
                        <th style="width:60%">Component</th>
                        <th style="width:40%">Volume (μl)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>vector</td>
                        <td>3 μg</td>
                    </tr>
                    <tr>
                        <td>buffer</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>restriction enzymes</td>
                        <td>0.3 + 0.3</td>
                    </tr>
                    <tr>
                        <td>ddH2O</td>
                        <td>to 30</td>
                    </tr>
                    <tr>
                        <td>total volume</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="10" class="content">
            <h1>Gel Extraction Protocol</h1>
            <ol class="normal">
                <li>
                    Gel Dissociation
                    <ul>
                        <li>
                            Excise the agarose gel slice containing relevant DNA fragments and remove any extra agarose
                            to minimize the size of the gel slice.
                        </li>
                        <li>
                            Transfer up to 300 mg of the gel slice to a 1.5 ml microcentrifuge tube.
                        </li>
                        <li>
                            Add 500 μl of Gel/PCR Buffer and mix by vortex. Incubate at 55-60°C for 10-15 minutes to
                            ensure the gel slice has been completely dissolved.
                        </li>
                        <li>
                            During incubation, invert the tube every 2-3 minutes. If the color of the mixture has turned
                            to purple, add 10 μl of 3M Sodium Acetate (pH5.0) and mix thoroughly.
                        </li>
                        <li>
                            Cool the dissolved sample to room temperature.
                        </li>
                    </ul>
                </li>
                <li>
                    DNA Binding
                    <ul>
                        <li>
                            Place a DFH Column in a 2 ml Collection Tube.
                        </li>
                        <li>
                            Transfer 800 μl of the sample mixture to the DFH Column.Centrifuge at 14-16,000 xg for 30
                            seconds. Discard the flow-through and place the DFH Column back in the 2ml Collection Tube.
                        </li>
                        <li>
                            If the sample mixture is more than 800 μl, repeat the DNA Binding step.
                        </li>
                    </ul>
                </li>
                <li>
                    Wash
                    <ul>
                        <li>
                            Add 400 μl of W1 Buffer into the DFH Column. Centrifuge at 14-16,000 x g for 30 seconds then
                            discard the flow-through. Place the DFH Column back in the 2 ml Collection Tube.
                        </li>
                        <li>
                            Add 600 μl of Wash Buffer (make sure ethanol was added) into the DFH Column. Let stand for 1
                            minute at room temperature. Centrifuge at 14-16,000 x g for 30 seconds then discard the
                            flow-through. Place the DFH Column back in the 2 ml Collection Tube.
                        </li>
                        <li>
                            Centrifuge at 14-16,000 x g for 3 minutes to dry the column matrix.
                        </li>
                    </ul>
                </li>
                <li>
                    DNA Elution
                    <ul>
                        <li>
                            Transfer the dried DFH Column to a new 1.5 ml microcentrifuge tube.
                        </li>
                        <li>
                            Add 20 μl of (60-70°C) pre-heated Elution Buffer or TE into the center of the column matrix.
                            Let stand for at least 2 minutes to ensure the Elution Buffer is completely absorbed.
                        </li>
                        <li>
                            Centrifuge for 2 minutes at 14-16,000 x g to elute the purified DNA.
                        </li>
                    </ul>
                </li>
            </ol>
        </div>
        <div id="11" class="content">
            <h1>Protein extraction</h1>
            <ol class="normal">
                <li>
                    Pellet bacterial cells by centrifugation at 5000 x g for 10 minutes. Weigh biomass and proceed to
                    Step 2 or freeze biomass at -20°C to -80°C.
                </li>
                <li>
                    Warm required amount of B-PER Complete Reagent (5mL reagent/g of biomass) to room temperature.
                </li>
            </ol>
            <div class="normal">Optional: Add salts, reducing agents, chelators or protease inhibitors to B-PER Complete Reagent.</div>
            <div class="marge" style="--width:calc(1em)"></div>
            <div class="normal">Note: Add 1mM EDTA final concentration to B-PER Complete Reagent (i.e., 2 μL of 0.5M EDTA per mL of B-PER
            Complete Reagent) for lysis of recently prepared Gram-negative cells (e.g., E. coli BL21 strain).</div>
            <div class="marge" style="--width:calc(1em)"></div>
            <ol class="normal" start="3">
                <li>
                    Add 5mL of B-PER Complete Reagent per gram of cell pellet. Pipette the suspension up and down until
                    it is homogeneous.
                </li>
                <li>
                    Incubate 15 minutes at room temperature with gentle rocking.
                </li>
                <li>
                    Centrifuge lysate at 16,000 x g for 20 minutes to separate soluble proteins from the insoluble
                    proteins.
                </li>
            </ol>
            <div class="normal">Note: If a large percentage of over-expressed protein remains in the pellet, the protein of interest may be
            expressed in inclusion bodies. Use the Inclusion Body Solubilization Reagent (Product No. 78115) or alter
            the expression conditions to minimize inclusion body formation.</div>
            
        </div>
        <div id="12" class="content">
            <h1>Standard Procedure for Microtiter Plates</h1>
            <ol class="normal">
                <li>Prepare dye reagent by diluting 1 part Dye Reagent Concentrate with 4 parts DDI water. Filter
                    through a Whatman #1 filter (or equivalent) to remove particulates. This diluted reagent may be used
                    for about 2 weeks when kept at room temperature.</li>
                <li>Prepare three to five dilutions of a protein standard, which is representative of the protein
                    solution to be tested. The linear range of this microtiter plate assay is 0.05 mg/ml to
                    approximately 0.5 mg/ml. Protein solutions are normally assayed in duplicate or triplicate.</li>
                <li>Pipet 10 μl of each standard and sample solution into separate microtiter plate wells.</li>
                <li>Add 200 μl of diluted dye reagent to each well. Mix the sample and reagent thoroughly using a
                    microplate mixer. Alternatively, use a multi-channel pipet to dispense the reagent. Depress the
                    plunger repeatedly to mix the sample and reagent in the well. Replace with clean tips and add
                    reagent to the next set of wells.</li>
                <li>Incubate at room temperature for at least 5 minutes. Absorbance will increase over time; samples
                    should incubate at room temperature for no more than 1 hour.</li>
                <li>Measure absorbance at 595 nm.</li>
            </ol>
        </div>
        <div id="13" class="content">
            <h1>Induction Protocol</h1>
            <ol class="normal">
                <li>
                    Preparation
                    <ul>
                        <li>
                            Cultured 3 ml bacteria in TB-antibiotics at 37℃ overnight.
                        </li>
                    </ul>
                </li>
                <li>
                    Refresh
                    <ul>
                        <li>
                            Quantify and dilute the grown bacteria to OD600 value around 0.02.
                        </li>
                        <li>
                            Refresh the diluted bacteria at 37℃ for 3hrs
                        </li>
                        <li>
                            Quantify the OD600 value of refreshed bacteria. If OD600 value reaches 0.2~0.4, store 1 ml
                            of refreshed bacteria as the non-induction sample.
                        </li>
                    </ul>
                </li>
                <li>
                    Induction
                    <ul>
                        <li>
                            Induced the protein expression in the rest of refreshed bacteria by 1mM IPTG at 37℃ for 4
                            hrs.
                        </li>
                        <li>
                            Quantify the OD600 value of induced bacteria. If OD600 reaches 0.2~0.4, save all bacteria as
                            the induction sample.
                        </li>
                    </ul>
                </li>
                <li>
                    Storage
                    <ul>
                        <li>
                            Non-induction and induction samples are centrifuged at 5000 rpm for 3 mins.
                        </li>
                        <li>
                            Remove the supernatant.
                        </li>
                        <li>
                            Directly store the pellet in -20℃, or lyse the pellet with 100μl 1x sample buffer and store
                            at -20℃.
                        </li>
                    </ul>
                </li>
            </ol>
        </div>
        <div id="14" class="content">
            <h1>SDS-PAGE Protocol</h1>
            <div class="half_div">
                <h2>Gel preparation</h2>
                <table class="line_table align-center">
                    <tbody>
                        <tr>
                            <td colspan="2">9% Lower Gel</td>
                        </tr>
                        <tr>
                            <td>ddH2O</td>
                            <td>4.39 ml</td>
                        </tr>
                        <tr>
                            <td>4x Resolving gel buffer</td>
                            <td>2.5 ml</td>
                        </tr>
                        <tr>
                            <td>30% Acrylamide</td>
                            <td>3 ml</td>
                        </tr>
                        <tr>
                            <td>APS</td>
                            <td>100 μl</td>
                        </tr>
                        <tr>
                            <td>TEMED</td>
                            <td>10 μl</td>
                        </tr>
                        <tr>
                            <td colspan="2">4% Upper Gel</td>
                        </tr>
                        <tr>
                            <td>ddH2O</td>
                            <td>1.85 ml</td>
                        </tr>
                        <tr>
                            <td>4x Stacking gel buffer</td>
                            <td>0.75 ml</td>
                        </tr>
                        <tr>
                            <td>30% Acrylamide</td>
                            <td>0.4 ml</td>
                        </tr>
                        <tr>
                            <td>APS</td>
                            <td>30 μl</td>
                        </tr>
                        <tr>
                            <td>TEMED</td>
                            <td>5 μl</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="half_div">
                <h2>Solution preparation</h2>
                <table class="line_table align-center table-center">
                    <tbody>
                        <tr>
                            <td colspan="2">9% Lower Gel</td>
                        </tr>
                        <tr>
                            <td>ddH2O</td>
                            <td>3.35 ml</td>
                        </tr>
                        <tr>
                            <td>4x Resolving gel buffer</td>
                            <td>2.5 ml</td>
                        </tr>
                        <tr>
                            <td>30% Acrylamide</td>
                            <td>4.0 ml</td>
                        </tr>
                        <tr>
                            <td>APS</td>
                            <td>100 μl</td>
                        </tr>
                        <tr>
                            <td>TEMED</td>
                            <td>10 μl</td>
                        </tr>
                        <tr>
                            <td colspan="2">4% Upper Gel</td>
                        </tr>
                        <tr>
                            <td>ddH2O</td>
                            <td>1.75 ml</td>
                        </tr>
                        <tr>
                            <td>4x Stacking gel buffer</td>
                            <td>0.75 ml</td>
                        </tr>
                        <tr>
                            <td>30% Acrylamide</td>
                            <td>0.5 ml</td>
                        </tr>
                        <tr>
                            <td>APS</td>
                            <td>30 μl</td>
                        </tr>
                        <tr>
                            <td>TEMED</td>
                            <td>5 μl</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table class="line_table align-center table-center" style="min-width:60%">
                <tbody>
                    <tr>
                        <td colspan="2">Fixing solution</td>
                    </tr>
                    <tr>
                        <td>Ethanol</td>
                        <td>150 ml</td>
                    </tr>
                    <tr>
                        <td>Glacial acetic acid</td>
                        <td>50 ml</td>
                    </tr>
                    <tr>
                        <td>ddH2O</td>
                        <td>300 ml</td>
                    </tr>
                </tbody>
            </table>
            <table class="line_table align-center table-center" style="min-width:60%">
                <tbody>
                    <tr>
                        <td colspan="2">Staining solution</td>
                    </tr>
                    <tr>
                        <td>Methanol</td>
                        <td>150 ml</td>
                    </tr>
                    <tr>
                        <td>Glacial acetic acid</td>
                        <td>50 ml</td>
                    </tr>
                    <tr>
                        <td>Coomassie brilliant blue</td>
                        <td>1 g</td>
                    </tr>
                    <tr>
                        <td>ddH2O</td>
                        <td>300 ml</td>
                    </tr>
                </tbody>
            </table>
            <table class="line_table align-center table-center" style="min-width:60%">
                <tbody>
                    <tr>
                        <td colspan="2">Distaining solution</td>
                    </tr>
                    <tr>
                        <td>Methanol</td>
                        <td>150 ml</td>
                    </tr>
                    <tr>
                        <td>Glacial acetic acid</td>
                        <td>50 ml</td>
                    </tr>
                    <tr>
                        <td>ddH2O</td>
                        <td>300 ml</td>
                    </tr>
                </tbody>
            </table>
            <h2>Procedure</h2>
            <ol class="same-counter normal">
                <li>
                    Gel preparation
                    <ol class="same">
                        <li>
                            Wipe glass plates and spacers and assemble in gel casting apparatus.
                        </li>
                        <li>
                            Mix components for the resolving gel and pour into the gel plate.
                        </li>
                        <li>
                            Add 200 μl ddH2O on the top of the resolving gel to flat resolving gel.
                        </li>
                        <li>
                            Until resolving gel solidified, clean up the ddH2O on the resolving gel.
                        </li>
                        <li>
                            Mix components for the stacking gel, and pour into the gel plate.
                        </li>
                        <li>
                            Insert comb into the top of the spacers, and then wait for the gel to solidify.
                        </li>
                    </ol>
                </li>
                <li>
                    Gel electrophoresis
                    <ol class="same">
                        <li>
                            Add 1x running buffer to the running tank and put the cast gel into it.
                        </li>
                        <li>
                            Load 10 μl marker into the first well, and load 20 μl protein samples per well.
                        </li>
                        <li>
                            The gel will run at 80 V until the dye front is migrated into the running gel (about 20
                            minutes), and increase to 100 V until the dye front reaches the bottom of the gel (about 90
                            minutes).
                        </li>
                    </ol>
                </li>
                <li>
                    Gel fixing, staining and distaining
                    <ol class="same">
                        <li>
                            Put gel into Gel-fixing Solution for 1 hour.
                        </li>
                        <li>
                            Stain the gel with staining Solution for 20 minutes.
                        </li>
                        <li>
                            Distain the gel for about 1.5~2 hours until the bands are clear enough.
                        </li>
                    </ol>
                </li>
            </ol>
        </div>
        <div id="15" class="content">
            <h1>Bacteria Stock</h1>
            <ol class="normal">
                <li>Add 500 μl of the overnight culture to 500 μl of 50% glycerol in a 1.5 mL tube (1:1) .**Make the 50%
                    glycerol solution by diluting 100% glycerol in ddH2O.</li>
                <li>Freeze the glycerol stock tube at -80°C.</li>
            </ol>
        </div>
        <div id="16" class="content">
            <h1>Recipe For LB Plate</h1>
            <table class="line_table">
                <thead>
                    <tr>
                        <th>Component</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ddH2O</td>
                        <td>1 L</td>
                    </tr>
                    <tr>
                        <td>Bacterial Agar</td>
                        <td>15 g</td>
                    </tr>
                    <tr>
                        <td>LB Broth</td>
                        <td>20 g</td>
                    </tr>
                    <tr>
                        <td>Ampicillin/Kanamycin/Chloramphenico</td>
                        <td>500 μl</td>
                    </tr>
                </tbody>
            </table>
            <p>**Before adding antibiotics, sterilized the solution for an hour.</p>
            <h1>Recipe For TB</h1>
            <table class="line_table">
                <thead>
                    <tr>
                        <th>Component</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ddH2O</td>
                        <td>1 L</td>
                    </tr>
                    <tr>
                        <td>Terrific Broth</td>
                        <td>47.6 g</td>
                    </tr>
                    <tr>
                        <td>100% glycerol</td>
                        <td>4 mL</td>
                    </tr>
                    <tr>
                        <td>Ampicillin/Kanamycin/Chloramphenico</td>
                        <td>500 μl</td>
                    </tr>
                </tbody>
            </table>
            <p>**Before adding antibiotics, sterilized the solution for an hour.</p>
        </div>
    </div>
</div>
    <!-- <table class="normal_table">
        <thead>
            <tr>
                <th style="width:60%"></th>
                <th style="width:40%"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table> -->
    <!-- <div class="marge" style="--width:calc(0em + 5vh)"></div> -->
    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/protocol.js"></script>  
</body>
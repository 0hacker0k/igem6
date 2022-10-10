
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
            <div onclick="protocol_change('1')" class="page_tag" style="background-color: #ff4545;">
                Transformation
            </div>
            <div onclick="protocol_change('2')" class="page_tag" style="background-color: #45ff45;">
                taq polymerase PCR Protocol
            </div>
            <div onclick="protocol_change('3')" class="page_tag" style="background-color: #4545ff;">
                protocol3
            </div>
        </div>
        <div class="right_div">
            <div id="1" class="content" style="display: block">
                <h1>Transformation</h1>
                <ol class="bracket">
                    <li>
                        Thaw competent cells with room temperature or water bath for 10~20 seconds until ⅓ thawed or thaw competent cells with the ice bucket.
                    </li>
                    <li>
                        Mix 10 μl ligation product with 30 μl competent cells by vortexing 1 second.
                    </li>
                    <li>
                        Incubate on ice for 5 minutes.
                    </li>
                    <li>
                        Transfer to LB plate with desired antibiotics at 37°C, and spread transformed cells by rolling glass beads.
                    </li>
                    <li>
                        Immediately incubate the plate at 37°C for 16~18 hours.
                    </li>
                </ol>
            </div>
            <div id="2" class="content">
                <h1>taq polymerase PCR Protocol</h1>
                <ol class="normal">
                    <li>
                        Thaw the PCR Master Mix<br/>
                        Vortex the Master Mix and then spin it briefly in a microcentrifuge to collect the material in the bottom of the tube.
                    </li>
                    <li>
                        Prepare the following reaction mixes
                    </li>
                </ol>
                <p>For a 20 μl reaction volume:</p>
                <table class="normal_table">
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
                        Denaturation<br/>
                        Generally, a 2-minute initial denaturation step at 95°C is sufficient. Subsequent denaturation steps will be between 30 seconds and 1 minute.
                    </li>
                    <li>
                        Annealing<br/>
                        Optimize the annealing conditions by performing the reaction starting approximately 5°C below the calculated melting temperature of the primers and increasing the temperature in increments of 1°C to the annealing temperature.The annealing step is typically 30 seconds to 1 minute.
                    </li>
                    <li>
                        Elongation<br/>
                        The extension reaction is typically performed at the optimal temperature for Taq DNA polymerase, which is 72–74°C.
                        <br/>Allow approximately 1 minute for every 1kb of DNA to be amplified.
                        <br/>A final extension of 5 minutes at 72–74°C is recommended.
                    </li>
                    <li>
                        Refrigeration<br/>
                        If the thermal cycler has a refrigeration or ”soak” cycle, the cycling reaction can be programmed to end by holding the tubes at 4°C for several hours.
                        <br/>This cycle can minimize any polymerase activity that might occur at higher temperatures, although this is not usually a problem.
                    </li>
                    <li>
                        Cycle Number<br/>
                        Generally, 25-30 cycles result in optimal amplification of desired products. Occasionally, up to 40 cycles may be performed, especially for detection of low-copy targets.
                    </li>
                </ol>
                <table class="normal_table line_table">
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
                            <td>Denaturation</td>
                            <td>95°C</td>
                            <td>3 min</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="3" class="content">
                I am protocol 3.
                <ul>
                    <li>first item</li>
                    <li>second item</li>
                    <li>third item</li>
                </ul>
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
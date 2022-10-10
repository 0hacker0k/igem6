
<head>
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/common.css">
    
</head>

<body onload="load_finish();">
    <?php include "./sub/header.php"?>
    <?php include "sub/loading.php"?>
    <img class="full_size_image" src="<?php echo imgfile;?>/parts/banner-parts.png" alt=""> 

    
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
                &emsp;&emsp;In <i>Moritella marina</i> and <i>Shewanella pneumatophori</i>, the <i>pfa</i> gene cluster encodes five open reading frames, namely <i>pfa A</i>, <i>pfa B</i>, <i>pfa C</i>, <i>pfa D</i>, and <i>pfa E</i>. Each gene contains up to several functional domains to perform carboxylation, dehydration, and reduction of the ketoacyl group and double bonds in the carbon chain in the PKS pathway. In <i>Moritella marina</i>, the <i>pfa</i> genes work together to generate docosahexaenoic acid (DHA), while <i>Shewanella pneumatophori</i> generates eicosapentaenoic acid (EPA). The exact functions of <i>pfa A-D</i> genes are unclear. To the best of our knowledge, the <i>pfa B</i> gene is the key molecule to determine the final product (e.g. EPA and DHA).
            </p>
            <p>
                &emsp;&emsp;The acetyl-CoA carboxylase of <i><i>C. glutamicum</i></i> is composed of a biotin carboxylase (ACCBC), a biotin carboxyl carrier protein (ACCE), and a transcarboxylase (ACCD1). They carboxylated acetyl-CoA into malonyl-CoA, which is necessary for the elongation of nascent fatty acid. The carboxylation occurs in two steps. In the first step, the ATP-dependent biotin carboxylase (ACCBC) catalyzes the transfer of a carboxyl group to biotin, which is linked to the biotin carboxyl carrier protein (ACCE). In the second step, the transcarboxylase (ACCD1) transferred the carboxyl group from carboxybiotin to acetyl-CoA to form malonyl-CoA.
            </p>
            <p>
                &emsp;&emsp;In our project, the <i>pfa A</i> is co-expressed with <i>pfa D</i> under the control of CspA cold-inducible promoter, while the <i>pfa B</i>, <i>pfa C</i>, and <i>pfa E</i> are co-expressed under the control of lac-inducible promoter. The <i>AccBC</i> is co-expressed with <i>AccD1</i> and <i>AccE</i> under the control of lac-inducible promoter.
            </p>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The basic parts</h2>
            <table class="gene_table">
                <thead>
                    <tr>
                        <th>Part Number</th>
                        <th>Description</th>
                        <th>Length (bp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131000" class="link_subtitle_no_bgc">BBa_K4131000</a></td>
                        <td><i>AccD1<i> gene (<i>C. glutamicum</i>), codon optimized for <i>E. coli</i> expression</td>
                        <td>1632</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131001" class="link_subtitle_no_bgc">BBa_K4131001</a></td>
                        <td><i>AccBC</i> gene (<i>C. glutamicum</i>), codon optimized for <i>E. coli</i> expression</td>
                        <td>1776</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131002" class="link_subtitle_no_bgc">BBa_K4131002</a></td>
                        <td><i>AccE</i> gene (<i>C. glutamicum</i>), codon optimized for <i>E. coli</i> expression</td>
                        <td>249</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131003" class="link_subtitle_no_bgc">BBa_K4131003</a></td>
                        <td>Original <i>pfa A</i> gene (Moritella marina)</td>
                        <td>7959</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131004" class="link_subtitle_no_bgc">BBa_K4131004</a></td>
                        <td><i>pfa B</i> gene (<i>Moritella marina</i>), codon optimized for <i>E. coli</i> expression.</td>
                        <td>2652</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131005" class="link_subtitle_no_bgc">BBa_K4131005</a></td>
                        <td>Original <i>pfa C</i> gene (<i>Moritella marina</i>)</td>
                        <td>6036</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131006" class="link_subtitle_no_bgc">BBa_K4131006</a></td>
                        <td>Original <i>pfa D</i> gene (<i>Moritella marina</i>)</td>
                        <td>1617</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131007" class="link_subtitle_no_bgc">BBa_K4131007</a></td>
                        <td><i>pfa E</i> gene (<i>Moritella marina</i>), codon optimized for <i>E. coli</i> expression.</td>
                        <td>864</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131008" class="link_subtitle_no_bgc">BBa_K4131008</a></td>
                        <td><i>pfa B</i> gene (<i>Shewanella pneumatophori</i>), codon optimized for <i>E. coli</i> expression.</td>
                        <td>2343</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_R0010" class="link_subtitle_no_bgc">BBa_R0010</a></td>
                        <td>Lac promoter and operator</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K3778013" class="link_subtitle_no_bgc">BBa_K3778013</a></td>
                        <td>RBS (Ribosome-binding site)</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K3778018" class="link_subtitle_no_bgc">BBa_K3778018</a></td>
                        <td>T7 terminator</td>
                        <td>39</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K328001" class="link_subtitle_no_bgc">BBa_K328001</a></td>
                        <td>cspA Promoter + Cold Box + UTR + SD + DB</td>
                        <td>321</td>
                    </tr>
                <tbody>
            </table>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
            <h2 class="title_sub_label" style="background-image: url('<?php echo imgfile;?>/highlight.png')">The composite parts</h2>
            <table class="gene_table">
                <thead>
                    <tr>
                        <th>Part Number</th>
                        <th>Description</th>
                        <th>Length (bp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131010" class="link_subtitle_no_bgc">BBa_K4131010</a></td>
                        <td>The lac-induced expressing cassette of <i>pfa B</i>, <i>pfa C</i> and <i>pfa E</i> (DHA)</td>
                        <td>9919</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131011" class="link_subtitle_no_bgc">BBa_K4131011</a></td>
                        <td>The lac-induced expressing cassette of <i>pfa B</i>, <i>pfa C</i> and <i>pfa E</i> (EPA)</td>
                        <td>9610</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131012" class="link_subtitle_no_bgc">BBa_K4131012</a></td>
                        <td>The lac-induced expressing cassette of <i>AccBC</i>, <i>AccD1</i> and <i>AccE</i></td>
                        <td>4024</td>
                    </tr>
                    <tr>
                        <td><a href="http://parts.igem.org/Part:BBa_K4131013" class="link_subtitle_no_bgc">BBa_K4131013</a></td>
                        <td>The Cold-induced expressing cassette of <i>pfa A</i> and <i>pfa D</i></td>
                        <td>10027</td>
                    </tr>
                <tbody>
            </table>
            <div class="marge" style="--width:calc(3em + 5vh)"></div>
        

            
        </div>
    </div>
    


    <?php include "./sub/footer.php"?>
    <script src="<?php echo jsfile;?>/common.js"></script>  
</body>
<head>
  
    <title>wiki</title>
    
    <?php include dirname(__FILE__,2)."/sub/config.php";?>
    <?php include dirname(__FILE__,3).subfile."/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook.css">
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook_each.css">
  
</head>

<body onload="load_finish()">

  
    <?php include dirname(__FILE__,3).subfile."/header.php"?>

    <?php include dirname(__FILE__,3).subfile."/loading.php"?>

    <div class="notebook">
        <div class="left_div">
            <div>
                <button type="button" class="leftlabel leftlabel1" onclick="switchbtn(1)">MAY.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel2" onclick="switchbtn(2)">JUN.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel3" onclick="switchbtn(3)">JUL.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel4" onclick="switchbtn(4)">AUG.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel5" onclick="switchbtn(5)">SEP.</button>
            </div>
            <div>
                <button type="button" class="leftlabel leftlabel6" onclick="switchbtn(6)">OCT.</button>
            </div>
        </div>
        <div class="top_div">
            <div class="top_control">
                <button type="button" class="toplabel toplabel1" onclick="switchbtn(10)">WET LAB</button>
            </div>
            <div class="top_control">
                <button type="button" class="toplabel" onclick="switchbtn(20)">DRY LAB</button>
            </div>
            <div class="top_control">
                <button type="button" class="toplabel" onclick="switchbtn(30)">HP</button>
            </div>
            <div class="top_control">
                <button type="button" class="toplabel" onclick="switchbtn(40)">TIMELINE</button> 
            </div>
        </div>
      

        <div class="right_div">
            <div class="pad">
                <div class="week">
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/wl_5_1.jpg" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 1 (5/1~7)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Obtain redesigned pfa genes from MP-1 by cloning</li>
                            <br>
                            <li>Write the safety form</li>
                            <br>
                            <li>Confirm whether E. coli could survive in two types of antibiotics</li>                         
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 2 (5/8~14)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Obtain redesigned pfa genes from MP-1 by cloning</li>
                            <br>
                            <li>Write the safety form</li>
                            <br>
                            <li>Confirm whether E. coli could survive in two types of antibiotics</li>
                        </ul>
                        </div>
                    </div>
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/wl_5_2.jpg" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/wl_5_3.jpg" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 3 (5/15~21)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Cloning pfa genes from MP-1 by PCR</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 4 (5/22-28)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Trying to ligate pfa genes to TA vectors for sequencing confirmation</li>
                        </ul>
                        </div>
                    </div>

   
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/wl_5_4.jpg" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/wl_5_5.jpg" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 5 (5/29~6/4)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Purifying pSTV28 vectors for ACC genes expression in  E. Coli</li>
                            <br>
                            <li>Cloning pfa genes from MP-1 by PCR</li>
                            <br>
                            <li>Redesigning the biobricks for pfa genes and ACC genes expression in E. Coli</li>
                        
                        </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script>
        setpage(1,20);
    </script>
    <?php include "./sub/footer.php"?>
</body>
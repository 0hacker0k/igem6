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
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_1.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 1 (5/1~7)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Choosing color tickets for wiki, according to the topic of cardiovascular diseas</li>
                            <br>
                            <li>Coding stage 1 of the web game</li>
                            <br>
                            <li>Designing the first version of Gel Maker</li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 2 (5/8~14)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Designing the appearance of the header, footer, and home of wiki</li>
                            <br>
                            <li>Completing stage 1 of the web game</li>
                            <br>
                            <li>Using screw thread to increase the tightness between Gel Maker and a serum bottle</li>
                        </ul>
                        </div>
                    </div>
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_2.png" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_3.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 3 (5/15~21)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Designing the appearance of members page</li>
                            <br>
                            <li>Coding stage 2 of the web game.</li>
                            <br>
                            <li>Completing the conceptual design of the Automatic Gel Machine</li>
                            <br>
                            <li>Testing the hole of controlling the amount of gel. (Gel Maker)</li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 4 (5/22-28)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Deciding on the content of members page</li>
                            <br>
                            <li>Coding the loading page of wiki.</li>
                            <br>
                            <li>Completing stage 2 of the web game.</li>
                            <br>
                            <li>Determining the function design of the Automatic Gel Machine</li>
                            <br>
                            <li>Using an O-ring to fit Gel Maker and a serum bottle.</li>
                        </ul>
                        </div>
                    </div>

   
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_4.png" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_5.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 5 (5/29~6/4)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Designing the appearance of notebook page</li>
                            <br>
                            <li>Coding stage 3 of the web game</li>
                            <br>
                            <li>Purchasing components of the Automatic Gel Machine</li>
                            <br>
                            <li>Rotating the direction of the Gel Maker and printing it out with a 3D printer</li>
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
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
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/hp_5_1.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 1 (5/1~7)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Designing stage 1 of the web game</li>
                            <br>
                            <li>Brainstorming activities to integrate our project with the society</li>
                            <br>
                            <li>Deciding the form of promotion video</li>
                            <br>
                            <li>Proposing the campus walking project</li>
                            <br>
                            <li>Designing the IHP structure</li>
                            <br>
                            <li>Designing for the target group of the marketing survey</li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 2 (5/8~14)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Designing stage 2 of the web game</li>
                            <li>Plotting the outline of the promotion video</li>
                            <li>Completing the story outline of the web game</li>
                            <li>Refining the IHP route</li>
                        </ul>
                        </div>
                    </div>
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/hp_5_2.png" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/hp_5_3.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 3 (5/15~21)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Designing stage 3 of the web game</li>
                            <li>Planning Open Lab and elementary, junior high school education</li>
                            <li>Starting to run the CCU_iGEM Instagram</li>
                            <li>Preparing the initial proposal on campus walking</li>
                            <li>Looking for appropriate experts for consulting CVD project</li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 4 (5/22-28)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Listing experts for consultation</li>
                            <li>Finishing the revised version of the marketing survey and translating it into the English version</li>
                        </ul>
                        </div>
                    </div>

   
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/hp_5_4.png" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/hp_5_5.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">Week 5 (5/29~6/4)</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Contacting Center for Innovative Research on Aging Society for cooperation on campus walking activity</li>
                            <li>Assigning the tasks of promotion video</li>
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
<head>
  
    <title>wiki</title>
    <?php include "./sub/config.php";?>
    <?php include "./sub/head.php";?>
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook.css">
    <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook_dl_5.css">
  
</head>

<body onload="load_finish()">

  
    <?php include "./sub/header.php"?>

    <?php include "sub/loading.php"?>

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
                        
                        <h5 class="title_content">week1</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Webgame:12348654 125</li>
                            <br>
                            <li>Machine:145646 78168</li>
                            <br>
                            <li>Wiki....:(</li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">week2</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Webgame:123486 54125</li>
                            <br>
                            <li>Machine:145646781 68</li>
                            <br>
                            <li>Wiki....QQ</li>
                        </ul>
                        </div>
                    </div>
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_2.jpg" alt="">
                </div>

                <div class="week">
                    
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_3.png" alt="">
                    <div class="week_content">
                        
                        <h5 class="title_content">week3</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Webgame:1234865 4125</li>
                            <br>
                            <li>Machine:14564 678168</li>
                            <br>
                            <li>Wiki....:(</li>
                        </ul>
                        </div>
                    </div>
                </div>

                <div class="week">
                    
                    <div class="week_content">
                        
                        <h5 class="title_content">week4</h5>
                        
                        <div class="word_content">
                        <ul>
                            <li>Webgame:1234865 4125</li>
                            <br>
                            <li>Machine:1456 4678168</li>
                            <br>
                            <li>Wiki....QQ</li>
                        </ul>
                        </div>
                    </div>
                    <img class="week_content" src="<?php echo imgfile;?>/notebook/5_4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <script>
        setpage(1,20);
    </script>
    <?php include "./sub/footer.php"?>
</body>
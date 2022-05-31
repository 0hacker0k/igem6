<head>
  
  <title>wiki</title>
  <?php include "./sub/config.php";?>
  <?php include "./sub/head.php";?>
  <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook.css">
  
</head>

<body>

  
  <?php include "./sub/header.php"?>

  <div class="blankk"></div>

  <div class="blank">

      <div class="top">

          <ul>
            <li>
                <button type="button" class="toplabel toplabel1">WET LAB</button>
            </li>

            <li>
                <button type="button" class="toplabel">DRY LAB</button>
            </li>

            <li>
                <button type="button" class="toplabel">HP</button>
            </li>

            <li>
                <button type="button" class="toplabel">TIMELINE</button>
            </li>
          </ul>

      </div>

      <div class="left">
          
        <ul>
            <li>
                <button type="button" class="leftlabel leftlabel1">MAY.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel2">JUN.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel3">JUL.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel4">AUG.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel5">SEP.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel6">OCT.</button>
            </li>
        </ul>

      </div>

      <div class="out">

        <h1>NOTEBOOK</h1>
        <hr>

          <div class="mid">
              
              

              <ul>
                <li>
                  <button type="button" class="midbutton"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">WET LAB</button>
                </li>
                
                <li>
                  <button type="button" class="midbutton"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">DRY LAB</button>
                </li>
                
                <li>
                  <button type="button" class="midbutton"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">HUMAN PRACTICE</button>
                </li>
              </ul>




          </div>

      </div>






  </div>

  <div class="blankkk"></div>


  

  <?php include "./sub/footer.php"?>

</body>
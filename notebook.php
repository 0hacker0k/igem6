<head>
  
  <title>wiki</title>
  <?php include "./sub/config.php";?>
  <?php include "./sub/head.php";?>
  <link rel="stylesheet" media="all" href="<?php echo cssfile;?>/notebook.css">
  
</head>

<body>

  <?php include "./sub/header.php"?>

  

  <div class="blank">

      <div class="top">

          <ul>
            <li>
                <button type="button" class="toplabel toplabel1" onclick="switchbtn(10)">WET LAB</button>
            </li>

            <li>
                <button type="button" class="toplabel" onclick="switchbtn(20)">DRY LAB</button>
            </li>

            <li>
                <button type="button" class="toplabel" onclick="switchbtn(30)">HP</button>
            </li>

            <li>
                <button type="button" class="toplabel" onclick="switchbtn(40)">TIMELINE</button>
            </li>
          </ul>

      </div>

      <div class="left">
          
        <ul>
            <li>
                <button type="button" class="leftlabel leftlabel1" onclick="switchbtn(1)">MAY.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel2" onclick="switchbtn(2)">JUN.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel3" onclick="switchbtn(3)">JUL.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel4" onclick="switchbtn(4)">AUG.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel5" onclick="switchbtn(5)">SEP.</button>
            </li>

            <li>
                <button type="button" class="leftlabel leftlabel6" onclick="switchbtn(6)">OCT.</button>
            </li>
        </ul>

      </div>

      <div class="out">

        <h1>NOTEBOOK</h1>
        <hr>

          <div class="mid">
              
              

              <ul>
                <li>
                  <button type="button" class="midbutton" onclick="switchbtn(10)"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">WET LAB</button>
                </li>
                
                <li>
                  <button type="button" class="midbutton" onclick="switchbtn(20)"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">DRY LAB</button>
                </li>
                
                <li>
                  <button type="button" class="midbutton" onclick="switchbtn(30)"><img class="drop" src="<?php echo imgfile;?>/drop.png" alt="">HUMAN PRACTICE</button>
                </li>
              </ul>

              
              

          </div>

            <div class="output">
                <div id="id11"><p>11</p></div>
                <div id="id12"><p>12</p></div>
                <div id="id13"><p>13</p></div>
                <div id="id14"><p>14</p></div>
                <div id="id15"><p>15</p></div>
                <div id="id16"><p>16</p></div>
                <div id="id21"><p>21</p></div>
                <div id="id22"><p>22</p></div>
                <div id="id23"><p>23</p></div>
                <div id="id24"><p>24</p></div>
                <div id="id25"><p>25</p></div>
                <div id="id26"><p>26</p></div>
                <div id="id31"><p>31</p></div>
                <div id="id32"><p>32</p></div>
                <div id="id33"><p>33</p></div>
                <div id="id34"><p>34</p></div>
                <div id="id35"><p>35</p></div>
                <div id="id36"><p>36</p></div>
            </div>
        
      </div>

    




  </div>

  <script>
        var x=1,y=10;
        function switchbtn(id){
            $("#mid").hide();
            $("#id"+(y+x)).hide();
            if(id>=10)y=id;
            else x=id;
            id=x+y;
            $("#id"+(y+x).toString()).show();
            while(id==10^id==20^id==30){
                
            }
        }

        for(i=11; i<=36; i++){
            $("#id"+(i)).hide();
        }

    </script>

  <div class="blankkk"></div>

  <?php include "./sub/footer.php"?>

</body>
<head>
  
    <title>wiki</title>
    <?php include "../sub/config.php";?>
    <?php include "../sub/head.php";?>
  
</head>

<body>
    <?php include "../sub/header.php"?>
    
    <button onclick="switchbtn(1)">1</button>
    <button onclick="switchbtn(2)">2</button>
    <button onclick="switchbtn(10)">10</button>
    <button onclick="switchbtn(20)">20</button>

    <div id="id11"><p>1111111111</p></div>
    <div id="id12"><p>2222222222</p></div>
    <div id="id21"><p>3333333333</p></div>
    <div id="id22"><p>4444444444</p></div>
    <script>
        var x=1,y=10;
        function switchbtn(id){
            if(id>=10)y=id;
            else x=id;
            $("#id"+(y+x).toString()).show();
        }
        $("#id11").hide();
        $("#id12").hide();
        $("#id21").hide();
        $("#id22").hide();
        function loadingFunction(){
      $(".loading").delay(1000).hide();
    }
    </script>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php include "../sub/footer.php"?>
</body>
<head>
  
    <title>wiki</title>
    <?php include "../sub/config.php";?>
    <?php include "../sub/head.php";?>
  
</head>

<body>
    <?php include "../sub/header.php"?>
    
    <!-- horizontal -->
    <button onclick="switchbtn(10)">10</button>
    <button onclick="switchbtn(20)">20</button>
    <button onclick="switchbtn(30)">30</button>
    <button onclick="switchbtn(40)">40</button>
    <!-- vertical -->
    <button onclick="switchbtn(1)">1</button>
    <button onclick="switchbtn(2)">2</button>

    <div id="id11"><p>1111111111</p></div>
    <div id="id12"><p>2222222222</p></div>
    <div id="id21"><p>3333333333</p></div>
    <div id="id22"><p>4444444444</p></div>

    <script>
        var x=1,y=10;
        function switchbtn(id){
            if(id>=10)y=id;
            else x=id;
            id=x+y;
            // $("#id"+(y+x).toString()).show();
        }
        $("#id11").hide();
        $("#id12").hide();
        $("#id21").hide();
        $("#id22").hide();
        switch(id){
            case 11:
                $("#id11").show();
                break;
            case 12:
                $("#id12").show();
                break;
            case 21:
                $("#id21").show();
                break;
            case 21:
                $("#id22").show();
                break;
        }
        // function loadingFunction(){
        //     $("#id"+(y+x)).delay(1000).hide();
        // }
    </script>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <?php include "../sub/footer.php"?>
</body>
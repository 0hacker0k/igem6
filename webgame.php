<!doctype html> 
<html lang="zh-tw">
<head>
    <?php include "sub/config.php"?>
    <?php include "sub/head.php"?>
    <?php include "sub/gamehead.php"?>
    <meta charset="UTF-8" />
    <title>igem6 web game</title>
    <!-- <script src="phaser-3.55.2/dist/phaser.js"></script> -->
    
    <!-- <style type="text/css">
        body {
            margin: 10%;
        }
    </style> -->
</head>
<body onload="load_finish()">
    <?php include "sub/header.php"?>
    <?php include "sub/loading.php"?>
    <!-- <div style="text-align: center;">
        <div>hiuuuu</div>
    </div> -->
    <div class="maindiv">
        <div class="centerdiv">
            <div>
                <select id="language_set" onChange="changeLang(this.options[this.selectedIndex].value)">
                    <option value="en">English</option>
                    <option value="zh-tw">繁體中文</option>
                    <option value="zh-cn">簡體中文</option>
                </select>
            </div>
            <div id="game"></div>
        </div>
    </div>
    <?php include "sub/footer.php"?>
    <script>
        setTimeout(function(){
            close_header();
        },500);
    </script>
<!-- <button onclick="load()">123123132</button> -->
</body>
</html>
<!doctype html> 
<html lang="zh-tw"> 
<head>
    <?php include "sub/head.html"?>
    <?php include "sub/gamehead.html"?>
    <meta charset="UTF-8" />
    <title>igem6 web game</title>
    <!-- <script src="phaser-3.55.2/dist/phaser.js"></script> -->
    
    <style type="text/css">
        body {
            margin: 10%;
        }
    </style>
</head>
<body>
    <!-- <div style="text-align: center;">
        <div>hiuuuu</div>
    </div> -->
    <select id="language_set" onChange="changeLang(this.options[this.selectedIndex].value)">
        <!-- <option value="#">please choose your language</option> -->
        <option value="en">English</option>
        <option value="zh-tw">繁體中文</option>
        <option value="zh-cn">簡體中文</option>
    </select>
<!-- <button onclick="load()">123123132</button> -->
</body>
</html>
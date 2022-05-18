<?php
// define("root",substr(dirname(__FILE__,2),strlen($_SERVER['DOCUMENT_ROOT'])));
// echo dirname(__FILE__,2);
// echo dirname($_SERVER['DOCUMENT_ROOT']);
if(dirname(__FILE__,2)=="/data1/adm/webteam.ccu.edu.tw/WWW/phaser"){
    define("root","/phaser");
}else{
    define("root","/igem6");
}
define("cssfile", root."/css");
define("jsfile", root."/js");
define("webgamejsfile", root."/webgamejs");
define("imgfile", root."/img");
// define("DB_PASSWD", "");
//    /data1/adm/webteam.ccu.edu.tw/WWW/phaser
//    /data1/adm/www013001.ccu.edu.tw
?>

<?php
// define("root",substr(dirname(__FILE__,2),strlen($_SERVER['DOCUMENT_ROOT'])));
// echo dirname(__FILE__,2);
// echo dirname($_SERVER['DOCUMENT_ROOT']);
$htmlmode=2;//0:強制以特定名字 1:自適應 2:最終輸出模式(暫定)
if($htmlmode==1 && dirname(__FILE__,2)=="/data1/adm/webteam.ccu.edu.tw/WWW/phaser"){
    define("root","/phaser");
}else if($htmlmode==1 && dirname(__FILE__,2)=="/.CSDATA_NFS/home/under/u108/lyang108u/WWW/igem6"){
    define("root","/~lyang108u/igem6");
}else if($htmlmode==1 && dirname(__FILE__,2)=="/.CSDATA_NFS/home/under/u108/lyang108u/WWW/igem6_final"){
    define("root","/~lyang108u/igem6_final");
}else if($htmlmode==2){
    // define("root","/igem6_final");
    // define("root","/~lyang108u/igem6_final");
    define("root","http://127.0.0.1:8080");
}else if($htmlmode==1){
    define("root","/igem6");
}else if($htmlmode==0){
    define("root","/igem6");
}
if($htmlmode==2){
    define("imgfile", "https://static.igem.wiki/teams/4131/wiki");
    define("cssfile", "{{ url_for('static', filename = 'css");
    define("jsfile", "{{ url_for('static', filename = 'js");
    define("webgamejsfile", "{{ url_for('static', filename = 'webgamejs");
    define("subfile", root."/sub");
}else{
    define("cssfile", root."/css");
    define("jsfile", root."/js");
    define("webgamejsfile", root."/webgamejs");
    define("imgfile", root."/img");
    define("subfile", root."/sub");
}



// define("DB_PASSWD", "");
//    /data1/adm/webteam.ccu.edu.tw/WWW/phaser
//    /data1/adm/www013001.ccu.edu.tw
?>

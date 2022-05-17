// import "./map/lobby.js";
// document.cookie = 'stage=1';
// document.cookie = 'stage=2';
// document.cookie='max-age=0';
/*
var exp = new Date();
exp.setTime(exp.getTime() - 1);
var cval = document.cookie;
document.cookie = document.cookie + ";expires=" + exp.toGMTString();
*/
//alert(document.cookie);
var debug=1; //if in debug mod it will be set to 1
var anime; //It is settimeout return value in anime
var stop=0; //whether should stop the role
var set_width=1260; //the web game window size(width)
var set_height=900; //the web game window size(height)
var scale=0.8; //the web game scale of window size
var width=set_width*scale; //the web game real window size(width)
var height=set_height*scale; //the web game real window size(height)
var role_x=width/2; //the x coordinate of role when the user back to map
var role_y=height/2; //the y coordinate of role when the user back to map
var config;
var score = 0;
var scoreText;
var game=null;
var game_temp=null;
var platforms;
var level=0;
var send_string="";
gameOver=false;
var getUrlString = location.href;
var url = new URL(getUrlString);
//alert(location.host+location.pathname);
var language=url.searchParams.get('lang');
var page=url.searchParams.get('page');
if(language==null)language="en";

var langLoadComplete=0;
let languages="./language/"+language+".js";
var head= document.getElementsByTagName('head')[0]; 
var script= document.createElement('script'); 
script.type= 'text/javascript';
script.onload = script.onreadystatechange = function() { 
    if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete" ) { 
        loadlanguage();
        script.onload = script.onreadystatechange = null; 
    }
};
script.src= languages;
head.appendChild(script);
function changeLang(input){
    language=input;
    document.cookie='language='+input;
    // alert(location.protocol+"//"+location.host+location.pathname+"?lang="+language);
    languages="./language/"+language+".js";
    head= document.getElementsByTagName('head')[0]; 
    script= document.createElement('script'); 
    script.type= 'text/javascript';
    script.onload = script.onreadystatechange = function() { 
        if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete" ) { 
            script.onload = script.onreadystatechange = null; 
        }
    };
    script.src= languages;
    head.appendChild(script);
    // location=location.protocol+"//"+location.host+location.pathname+"?lang="+language;
    
}
function loadlanguage(){
    langLoadComplete=1;
    var language_set = document.getElementById("language_set");
    switch (language){
        case "en":
            language_set[0].selected=true;
            break;
        case "zh-tw":
            language_set[1].selected=true;
            break;
        case "zh-cn":
            language_set[2].selected=true;
            break;
    }
    load();
}
const map_1={
    key: 'map_1',
    preload: preload,
    create: create,
    update: update
}
const stage_1_choose={
    key: 'stage_1_choose',
    preload: preload_stage1_choose,
    create: create_stage1_choose,
    update: update_stage1_choose
}
const stage_1_sequence={
    key: 'stage_1_sequence',
    preload: preload_stage1_sequence,
    create: create_stage1_sequence,
    update: update_stage1_sequence
}
const stage_1_pcr={
    key: 'stage_1_pcr',
    preload: preload_stage1_pcr,
    create: create_stage1_pcr,
    update: update_stage1_pcr
}
const stage_2_flop={
    key: 'stage_2_flop',
    preload: preload_stage2_flop,
    create: create_stage2_flop,
    update: update_stage2_flop
}
const stage_3_shoot={
    key: 'stage_3_shoot',
    preload: preload_stage3_shoot,
    create: create_stage3_shoot,
    update: update_stage3_shoot
}
function load(){
    if(page==null){
        load_page(map_1);
    }else{
        switch(page){
            case "lobby":
                load_page(map_1);
                break;
            case "stage1":
                load_page(stage_1_choose);
                break;
            case "stage2":
                load_page(stage_2_flop);
                break;
            case "stage3":
                load_page(stage_3_shoot);
                break;
        }
    }
}
function load_page(page){
    config = {
        type: Phaser.AUTO,
        width: width,
        height: height,
        parent: "game",
        backgroundColor: "#000000",
        physics: {//物理函式
            default: 'arcade',
            arcade: {
                gravity: { y: 0 },
                debug: false
            }
        },
        scene: page
    };
    game_temp = new Phaser.Game(config);
    if(game!=null)
        game.destroy(true, false);
    game=game_temp;
}
// alert(navigator.userAgent);
function isMobileDevice(){
    var mobileDevices = ['Android', 'webOS', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'Windows Phone','Samsung','MiuiBrowser','XiaoMi'];
    var isMobileDevice=false;
    for(var i=0;i<mobileDevices.length;i++){
        if(navigator.userAgent.match(mobileDevices[i])){
            isMobileDevice=true;
        }
    }
    // return true;
    // alert(isMobileDevice);
    return isMobileDevice;
}

function getcookie(text){
    var content=document.cookie;
    var i=content.indexOf(text, 0);
    if(i==-1){
        return null;
    }
    var begin=content.indexOf('=', i);
    var len=content.indexOf(' ', begin);
    if(len==-1){
        len=content.length;
    }
    len-=begin;
    return content.substr(begin+1,len);
}
// console.log(getcookie("language"));
// function load_stage_1(){
//     config = {
//         type: Phaser.AUTO,
//         width: 800,
//         height: 600,
//         physics: {//物理函式
//             default: 'arcade',
//             arcade: {
//                 gravity: { y: 0 },
//                 debug: false
//             }
//         },
//         scene: {//場景函式
//             preload: preload_stage1_sequence,//預載入
//             create: create_stage1_sequence,//建立
//             update: update_stage1_sequence//更新
//         }
//     };
//     game_temp = new Phaser.Game(config);
//     if(game!=null)
//         game.destroy(true, false);
//     game=game_temp;
// }
/*
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

*/
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
const rexUI_path = "./webgamejs/rexUI.min.js";
const prefix = "img"; 
var COLOR_PRIMARY;
var COLOR_LIGHT;
var COLOR_DARK;
var debug=1; //if in debug mod it will be set to 1
var anime; //It is settimeout return value in anime
var stop=0; //whether should stop the role
var set_width=1280; //the web game window size(width) 1260
var set_height=720; //the web game window size(height) 900
var scale=0.9; //the web game scale of window size
var width=set_width*scale; //the web game real window size(width)
var height=set_height*scale; //the web game real window size(height)
var role_x=width/2; //the x coordinate of role when the user back to map
var role_y=height/2; //the y coordinate of role when the user back to map
var con;//every storys' parameter. 
var config;
const TextBox_x=width*0.15;
const TextBox_y=height*0.75;
const TalkBox_config =
{
    wrapWidth: width*0.5,
    fixedWidth: width*0.55,
    fixedHeight: height*0.15,
};
var audiovolume = 1;//audio
var score = 0;
var scoreText;
var game=null;
var game_temp=null;
var game_end=0;//trigger the scene after congratulation.
var last_one=null;
var platforms;
var level=0;
var send_string="";
gameOver=false;
var getUrlString = location.href;
/* 關卡通關過與否
   index: 1~5，代表1~5關
   value: 通關過為1，尚未為0
*/
var stage_complete = [];
console.log('index');
for(var i=1;i<=5;i++){
    stage_complete[0]=1;
    stage_complete[i]=0;
}
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
const opening={
    key: 'opening',
    preload: preload_opening,
    create: create_opening,
    update: update_opening
}
const stage_0_story={
    key: 'stage_0_story',
    preload: preload_story0,
    create: create_story0,
    update: update_story0
}
const map_1={
    key: 'map_1',
    preload: preload,
    create: create,
    update: update
}
const stage_1_story={
    key: 'stage_1_story',
    preload: preload_story1,
    create: create_story1,
    update: update_story1
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
const stage_1_story_after={
    key: 'stage_1_story_after',
    preload: preload_story1_after,
    create: create_story1_after,
    update: update_story1_after
}
const stage_2_story={
    key: 'stage_2_story',
    preload: preload_story2,
    create: create_story2,
    update: update_story2
}
const stage_2_gel={
    key: 'stage_2_gel',
    preload: preload_stage2_gel,
    create: create_stage2_gel,
    update: update_stage2_gel
}
const stage_2_story_after={
    key: 'stage_2_story_after',
    preload: preload_story2_after,
    create: create_story2_after,
    update: update_story2_after
}
const stage_3_story={
    key: 'stage_3_story',
    preload: preload_story3,
    create: create_story3,
    update: update_story3
}
const stage_3_flop={
    key: 'stage_3_flop',
    preload: preload_stage3_flop,
    create: create_stage3_flop,
    update: update_stage3_flop
}
const stage_3_story_after={
    key: 'stage_3_story_after',
    preload: preload_story3_after,
    create: create_story3_after,
    update: update_story3_after
}
const stage_4_story={
    key: 'stage_4_story',
    preload: preload_story4,
    create: create_story4,
    update: update_story4
}
const stage_4_shoot={
    key: 'stage_4_shoot',
    preload: preload_stage4_shoot,
    create: create_stage4_shoot,
    update: update_stage4_shoot
}
const stage_4_story_after={
    key: 'stage_4_story_after',
    preload: preload_story4_after,
    create: create_story4_after,
    update: update_story4_after
}
const stage_5_take={
    key: 'stage_5_take',
    preload: preload_stage5_take,
    create: create_stage5_take,
    update: update_stage5_take
}
const ending={
    key: 'ending',
    preload: preload_endingscene,
    create: create_endingscene,
    update: update_endingscene
}

function load(){
    if(page==null){
        load_page(opening);
    }else{
        switch(page){
            case "lobby":
                load_page(map_1);
                break;
            case "opening":
                load_page(opening);
                break;
            case "story0":
                load_page(stage_0_story);
                break;
            case "stage1":
                load_page(stage_1_choose);
                break;
            case "stage2":
                load_page(stage_2_gel);
                break;
            case "stage3":
                load_page(stage_3_flop);
                break;
            case "stage4":
                load_page(stage_4_shoot);
                break;
            case "stage5":
                load_page(stage_5_take);
                break;
            case "ending":
                load_page(ending);
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
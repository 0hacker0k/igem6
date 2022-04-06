// import "./map/lobby.js";
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
//alert(language);

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
    location=location.protocol+"//"+location.host+location.pathname+"?lang="+language;
}
function loadlanguage(){
    langLoadComplete=1;
    var language_set = document.getElementById("language_set");
    switch (language){
        case "en":
            language_set[1].selected=true;
            break;
        case "zh-tw":
            language_set[2].selected=true;
            break;
        case "zh-cn":
            language_set[3].selected=true;
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
                load_page(stage_2);
                break;
        }
    }
}
function load_page(page){
    config = {
        type: Phaser.AUTO,
        width: 800,
        height: 600,
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
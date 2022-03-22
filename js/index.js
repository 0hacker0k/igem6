var config;
var score = 0;
var scoreText;
var game=null;
var platforms;
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
function load(){
    if(page==null){
        load_lobby_1();
    }else{
        switch(page){
            case "lobby":
                load_lobby_1();
                break;
            case "stage1":
                load_stage_1();
                break;
            case "stage2":
                load_stage_2();
                break;
        }
    }

}
function load_lobby_1(){
    if(game!=null)
        game.destroy(true, false);
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
        scene: {//場景函式
            preload: preload,//預載入
            create: create,//建立
            update: update//更新
        }
    };
    game = new Phaser.Game(config);
}
function load_stage_1(){
    if(game!=null)
        game.destroy(true, false);
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
        scene: {//場景函式
            preload: preload_stage_1,//預載入
            create: create_stage_1,//建立
            update: update_stage_1//更新
        }
    };
    game = new Phaser.Game(config);
}
/*
var game = new Phaser.Game(800, 600, Phaser.CANVAS, 'phaser-example', { preload: preload, create: create, update: update, render: render });

*/
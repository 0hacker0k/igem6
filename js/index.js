var config;
var score = 0;
var scoreText;
var game=null;
var platforms;
gameOver=false;
function load(){
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
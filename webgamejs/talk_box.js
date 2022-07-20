function load_talkbox(where){//載入動畫檔
    where.load.image('talkbox', 'img/main/green.png');
    where.load.image('nextPage', 'img/main/green.png');
    where.load.scenePlugin({
        key: 'rexuiplugin',
        url: rexUI_path,
        sceneKey: 'rexUI'
    });
}

function loading_talkbox(where,x,y){
    talkbox = where.physics.add.sprite(x,y,'talkbox').setOrigin(0.5,0.5).setDisplaysize(500,500);
}

function start_talkbox(where,dialog){
    
}
const talkbox_size = width*0.01;
const GetValue = Phaser.Utils.Objects.GetValue;
function createTextBox (scene, x, y, config, npc_key) {
    var wrapWidth = GetValue(config, 'wrapWidth', 0);
    var fixedWidth = GetValue(config, 'fixedWidth', 0);
    var fixedHeight = GetValue(config, 'fixedHeight', 0);
    var textBox = scene.rexUI.add.textBox({
            x: x,
            y: y,

            background: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 20, COLOR_PRIMARY)
                .setStrokeStyle(2, COLOR_LIGHT),

            icon: scene.add.image(0, 0, npc_key),//卡關
            //icon: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 20, COLOR_DARK),
            //iconMask: true,
            //text: getBuiltInText(scene, wrapWidth, fixedWidth, fixedHeight),
            text: getBBcodeText(scene, wrapWidth, fixedWidth, fixedHeight),

            action: scene.add.image(0, 0, 'nextPage').setTint(COLOR_LIGHT).setVisible(false),
            
            space: {
                left: talkbox_size*2,
                right: talkbox_size*2,
                top: talkbox_size*2,
                bottom: talkbox_size*2,
                icon: talkbox_size,
                text: talkbox_size,
            }
        })
        .setOrigin(0)
        .layout();
        

    textBox
        .setInteractive()
        .on('pointerdown', function () {
            var icon = this.getElement('action').setVisible(false);
            this.resetChildVisibleState(icon);
            if (this.isTyping) {
                this.stop(true);
            } else {
                if(this.isLastPage){
                    //最後一頁，字跑完，talkbox消失，遊戲開始
                    this.setVisible(false);
                    this.setInteractive(false);
                    return;
                }
                this.typeNextPage();
            }
            
        }, textBox)
        .on('pageend', function () {
            // if (this.isLastPage) {
            //     return;
            // }
            
            var icon = this.getElement('action').setVisible(true);
            this.resetChildVisibleState(icon);
            icon.y -= 30;
            var tween = scene.tweens.add({
                targets: icon,
                y: '+=30', // '+=100'
                ease: 'Bounce', // 'Cubic', 'Elastic', 'Bounce', 'Back'
                duration: 500,
                repeat: 0, // -1: infinity
                yoyo: false
            });
        }, textBox)
        
    //.on('type', function () {
    //})

    return textBox;
}

var getBuiltInText = function (scene, wrapWidth, fixedWidth, fixedHeight) {
    return scene.add.text(0, 0, '', {
            fontSize: '20px',
            wordWrap: {
                width: wrapWidth
            },
            maxLines: 3
        })
        .setFixedSize(fixedWidth, fixedHeight);
}

var getBBcodeText = function (scene, wrapWidth, fixedWidth, fixedHeight) {
    return scene.rexUI.add.BBCodeText(0, 0, '', {
        fixedWidth: fixedWidth,
        fixedHeight: fixedHeight,

        fontSize: '20px',
        wrap: {
            mode: 'word',
            width: wrapWidth
        },
        maxLines: 3
    })
}
// function loading_transition (where,x,y){//載入黑畫面
//     transition = where.physics.add.sprite(x, y, 'transition').setOrigin(0, 0).setDisplaySize(width*2.1,height*1.1);
//     transition.depth = 1024;
// }
// function start_transition (where){//畫面漸亮
//     transition.setVelocityX(-2500*width/800);
//     function keep_move(){
//         if(transition.x<-2.1*width){
//             transition.setVelocityX(0);
//         }else{
//             anime=setTimeout(function(){
//                 keep_move();
//             },200);
//         }
            
//     }keep_move();
// }
// function finish_transition (where,x,y){//畫面漸暗
//     clearTimeout(anime);
//     transition = where.physics.add.sprite(x, y, 'transition').setOrigin(0, 0).setDisplaySize(width*2.1,height*1.1);
//     transition.depth = 1024;
//     transition.setVelocityX(-2500*width/800);
// }

var descript_count;//remind: set the limitation
var descript_limit;
var preisdone=0;
var PACO;
var Sprite;
function load_talkbox(where){//載入動畫檔
    where.load.image('talkbox', 'img/main/green.png');
    where.load.image('nextPage', 'img/main/green.png');
    where.load.scenePlugin({
        key: 'rexuiplugin',
        url: rexUI_path,
        sceneKey: 'rexUI'
    });
    where.load.image('PACO', 'img/main/PACO.png');
    where.load.image('Sprite', 'img/main/sprite.png');
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

            icon: scene.add.image(0, 0, npc_key).setDisplaySize(fixedWidth*0.1,fixedWidth*0.1),//卡關
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
        
    var barrier=scene.physics.add.sprite(0, 0, "green").setDisplaySize(width,height).setOrigin(0,0).refreshBody();
    barrier.depth=1023;
    barrier.alpha=0.0000001;
    barrier.setInteractive();

    textBox
        .setInteractive()
        .on('pointerdown', function () {
            var icon = this.getElement('action').setVisible(false);
            this.resetChildVisibleState(icon);
            if (this.isTyping) {
                //show all text
                this.stop(true);
            } else {
                if(this.isLastPage){
                    //最後一頁，字跑完，talkbox消失，遊戲開始
                    barrier.setVisible(false);
                    this.setVisible(false);
                    this.setInteractive(false);
                    preisdone=1;
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
        }, textBox);
    textBox.setDepth(1024);
    // .on('pointerdown', function (pointer) {
    //     alert("QAQ");
    // }, scene);
    //textBox.setVisible(false);
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
    var mod ='word';
    if(language=='zh-tw') mod = 'char';
    return scene.rexUI.add.BBCodeText(0, 0, '', {
        fixedWidth: fixedWidth,
        fixedHeight: fixedHeight,
        
        padding :{//避免中文被切字
            top:8,
        },
        fontSize: '20px',
        wrap: {
            mode: mod,
            width: wrapWidth
        },
        maxLines: 3
    })

}

function updateTalkbox(lan){
    if(descript_count<=descript_limit){
        if(preisdone){
            if(lan["pa_"+descript_count.toString()]!=undefined){
                PACO.setInteractive().setVisible(true);
                PACO.start(lan["pa_"+descript_count.toString()] ,50);
                descript_count++;
            }else if(lan["vo_"+descript_count.toString()]!=undefined){
                Sprite.setInteractive().setVisible(true);
                Sprite.start(lan["vo_"+descript_count.toString()],50);
                descript_count++;
            }
            preisdone=0;
        }
    }  
}


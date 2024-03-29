var descript_count;
var descript_limit;
var preisdone=0;
var preslide;
var slides = [];
var PACO;
var Sprite;
var backer;
var npc;
var stranger;
var hero;
var grandpa;
var barrier=null;
var skiptalk=null;
function load_talkbox(where){//載入動畫檔
    barrier=null;
    where.load.image('talkbox', prefix+'/main/next.png');
    where.load.image('nextPage', prefix+'/main/next.png');
    where.load.scenePlugin({
        key: 'rexuiplugin',
        url: rexUI_path,
        sceneKey: 'rexUI'
    });
    where.load.image('PACO', prefix+'/main/paco.png');
    where.load.image('Sprite', prefix+'/main/sprite.png');
    where.load.image('backer', prefix+'/map/backer3.png');
    where.load.image('hero', prefix+'/map/hero.png');
    where.load.image('stranger', prefix+'/map/stranger.png');
    where.load.image('grandpa', prefix+'/map/grandpa.png');
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
    var iconset;
    // if(npc_key=="backer"){
    //     iconset = scene.rexUI.add.roundRectangle(0, 0, fixedWidth*0.01, fixedWidth*0.01, 0, COLOR_PRIMARY);
    // }else{
    //     iconset = scene.add.image(0, 0, npc_key).setDisplaySize(fixedWidth*0.1,fixedWidth*0.1);
    // }
    var textBox = scene.rexUI.add.textBox({
            x: x,
            y: y,

            background: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 20, COLOR_PRIMARY)
                .setStrokeStyle(2, COLOR_LIGHT),

            icon: scene.add.image(0, 0, npc_key).setDisplaySize(fixedWidth*0.1,fixedWidth*0.1),
            //icon: scene.rexUI.add.roundRectangle(0, 0, 2, 2, 20, COLOR_DARK),
            //iconMask: true,
            //text: getBuiltInText(scene, wrapWidth, fixedWidth, fixedHeight),
            text: getBBcodeText(scene, wrapWidth, fixedWidth, fixedHeight),

            action: scene.add.image(0, 0, 'nextPage').setDisplaySize(width*0.02,width*0.02).setVisible(false),
            
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
        
        textBox.alpha=0.8;
        if(barrier==null){
            barrier=scene.physics.add.sprite(0, 0, "green").setDisplaySize(width,height).setOrigin(0,0).refreshBody();
            barrier.depth=1023;
            barrier.alpha=0.0000001;
            barrier.setInteractive();
            if(stop!=undefined)stop=1;
        }
    var tween;
    var now_y= textBox.getElement('action').y;
    textBox
        //.setInteractive()
        .on('pointerdown', function () {
            var icon = this.getElement('action').setVisible(false);
            if(tween!=undefined)
                tween.stop();
            this.resetChildVisibleState(icon);
            if (this.isTyping) {
                //show all text
                this.stop(true);
            } else {
                if(this.isLastPage){
                    this.setVisible(false);
                    this.setInteractive(false);
                    preisdone=1;
                    if(descript_count>descript_limit){
                        barrier.destroy();
                        barrier=null;
                        if(stop!=undefined)stop=0;
                    }
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
            icon.y = now_y;
            tween = scene.tweens.add({
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
    textBox.setVisible(false);
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
    var bbcode = scene.rexUI.add.BBCodeText(0, 0, '', {
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
    });
    if (isMobileDevice()){
        bbcode.fontSize='12px';
        console.log(bbcode.fontSize);
        if(language=="zh-tw"){
            bbcode.padding.top=4;
        }else{
            bbcode.padding.top=0;
        }
        console.log(bbcode.padding.top);
    }
    return bbcode;

}

function updateTalkbox(lan,slide=undefined){
    if(descript_count<=descript_limit){
        if(preisdone||descript_count==1){
            if(slide!=undefined){
                if(slide[descript_count.toString()]!=undefined){
                    if(descript_count!=1) preslide.setVisible(false);
                    preslide=slides[slide[descript_count.toString()]].setVisible(true);
                }
            }
            if(lan["pa_"+descript_count.toString()]!=undefined){
                PACO.setInteractive().setVisible(true);
                PACO.start(lan["pa_"+descript_count.toString()] ,50);
                descript_count++;
            }else if(lan["vo_"+descript_count.toString()]!=undefined){
                Sprite.setInteractive().setVisible(true);
                Sprite.start(lan["vo_"+descript_count.toString()],50);
                descript_count++;
            }else if(lan["back_"+descript_count.toString()]!=undefined){
                backer.setInteractive().setVisible(true);
                backer.start(lan["back_"+descript_count.toString()],50);
                descript_count++;
            }else if(lan["npc_"+descript_count.toString()]!=undefined){
                npc.setInteractive().setVisible(true);
                npc.start(lan["npc_"+descript_count.toString()],50);
                descript_count++;
            }else if(lan["?_"+descript_count.toString()]!=undefined){
                stranger.setInteractive().setVisible(true);
                stranger.start(lan["?_"+descript_count.toString()],50);
                descript_count++;
            }else if(lan["hero_"+descript_count.toString()]!=undefined){
                hero.setInteractive().setVisible(true);
                hero.start(lan["hero_"+descript_count.toString()],50);
                descript_count++;
            }else if(lan["grand_"+descript_count.toString()]!=undefined){
                grandpa.setInteractive().setVisible(true);
                grandpa.start(lan["grand_"+descript_count.toString()],50);
                descript_count++;
            }
            preisdone=0;
        }
    }
}


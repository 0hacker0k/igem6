var desk_what = [
            ['TAE','agarose','marker','sample','','','tank','','',''],
            ['','','','','','','','','','uv'],
            ['','','','','','','','','','gel_machine'],
            ['mod','','','','pipette','beaker','beaker','','',''],
            ['mod','','','','','','','','','machine'],
            ['','','','','','','','','','note'],
            ['','','microwave','microwave','','','trashcan','','','']];
//  
//桌子 7X8
var desk_pos = [
                [1,1,1,1,1,1,1,0,0,0],
                [0,0,0,0,0,0,0,0,0,1],
                [0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,1,1,1,0,0,0],
                [1,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,1],
                [1,1,1,1,1,1,1,0,0,1]
            ];
COLOR_PRIMARY = 0x4e342e;
COLOR_LIGHT = 0x7b5e57;
COLOR_DARK = 0x260e04;
const PLAYER_KEY = 'player';
function preload_stage5_take(){
    //basic
    debug = 1;
    if(debug==1){
        this.load.image('D_center', 'img/main/debug_center.png');
        
    }
    this.load.image('green', 'img/main/green.png');
    this.load.image('back', 'img/main/back.png');
    load_talkbox(this);
    load_transition(this);

    //else
    this.load.image('trashcan', 'img/stage5/trashcan.png');
    this.load.image('TAE', 'img/stage5/TAE.png');
    this.load.image('agarose', 'img/stage5/agarose.png');
    this.load.image('desk', 'img/stage5/desk.png');
    this.load.image('background', 'img/stage5/background.jpg');
    this.load.image('direct', 'img/main/director.png');
    this.load.image('marker', 'img/stage5/marker.png');
    this.load.image('sample', 'img/stage5/sample.png');
    this.load.image('gold','img/main/green.png');
    this.load.image('silver','img/main/green.png');
    this.load.image('bronze','img/main/green.png');
    // this.load.image('pipette', 'img/stage5/pipette.png');
    this.load.image("alert",'img/stage5/temp.png');
    this.load.image("qte_pointer",'img/stage5/qte_bar_pointer.png');
    this.load.image("qte_half",'img/stage5/qte_bar_half.png');
    this.load.image("qte_perfect",'img/stage5/qte_bar_perfect.png');
    this.load.image("qte_bar",'img/stage5/qte_bar.png');
    this.load.image("gel_machine",'img/stage5/gel_machine.png');
    this.load.image("uv",'img/stage5/uv.png');
    this.load.image("note",'img/stage5/note.png');
    this.load.image("machine",'img/stage5/gel_making_machine.png');
    // this.load.image("gel",'img/stage5/gel.png');
    //remind: change gel photo:DONE
    this.load.spritesheet('mod',
        'img/stage5/mod.png',
        { frameWidth: 928, frameHeight: 674 }
    );
    this.load.spritesheet('pipette',
        'img/stage5/pipette.png',
        { frameWidth: 421, frameHeight: 1741 }
    );
    this.load.spritesheet('gel',
        'img/stage5/gel.png',
        { frameWidth: 633, frameHeight: 602.5 }
    );
    this.load.spritesheet('microwave',
        'img/stage5/microwave.png',
        { frameWidth: 1173, frameHeight: 784 }
    );
    this.load.spritesheet('tank',
        'img/stage5/tank.png',
        { frameWidth: 1075, frameHeight: 625 }
    );
    this.load.spritesheet('player',
        'img/main/human.png',
        { frameWidth: 496, frameHeight: 1118 }
    );
    this.load.spritesheet('beaker',
        'img/stage5/beaker.png',
        { frameWidth: 216, frameHeight: 281.75 }
    );
    //載入畫楨
    //右靜止 
    // this.load.spritesheet('human',
    // 'img/main/human2.png',
    // { frameWidth: 464, frameHeight: 1028 }
    // );//載入畫楨
    //music
    //this.load.audio('music',['aud/map/record.ogg','aud/map/record.mp3']);
    
}
var direction;
var desk = new Array();
var player;
var keySpace;
var spot,spot_touch;
var p_facing=2;
var point_x,point_y;
function create_stage5_take (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    var deskGroup = this.physics.add.staticGroup();
    var deskGroup_touch = this.physics.add.staticGroup();
    var cant_move_item = this.physics.add.staticGroup();
    var gel_list=[];
    //--------------------場景設定--------------------
    //背景
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);

    //人物、camera
    player = this.physics.add.sprite(width*0.45, height*0.35, PLAYER_KEY);//this.centerX
    player.body.fixedRotation = true;
    player.setDisplaySize(player.width/10,player.height/10).setOrigin(0.5,0.9).refreshBody();
    this.physics.world.bounds.width=width;
    this.physics.world.bounds.height=height;
    player.depth = 5;
    player.pick=null;
    player.stop=0;
    spot=this.physics.add.image(player.x, player.y, "green", this).setDisplaySize(width/40,width/40).refreshBody();
    spot.alpha=0;
    spot_touch=this.physics.add.image(player.x, player.y, "green", this).setDisplaySize(width/25,width/25).refreshBody();
    spot_touch.alpha=0;
    spot_touch.player=player;
    spot.setCollideWorldBounds(true);
    var trashcan=this.physics.add.staticGroup();
    var banner=this.physics.add.staticGroup().create(0, 0, "green", this).setDisplaySize(width,height*0.16).setOrigin(0,0).refreshBody();
    banner.alpha=0;
    where=this;
    for(var i=0;i<7;i++){   //建立桌子
        desk[i] = new Array();
        for(var j=0;j<10;j++){
            if(desk_pos[i][j]){
                desk[i][j] = deskGroup_touch.create(j*width*0.1+width*0.05,i*height*0.12+height*0.22,'desk');
                desk[i][j].setBodySize(width*0.099,height*0.12,true);
                desk[i][j].y-=height*0.03;
                desk[i][j].setDisplaySize(width*0.1,height*0.18,true);
                desk[i][j].i=i;
                desk[i][j].j=j;
                desk[i][j].id=10*i+j;
                desk[i][j].depth=5+i*2;
                var desk_entity;
                if(i>=6 || !desk_pos[i+1][j]){
                    var k=1;
                    while(i>0 && desk_pos[i-k][j]){
                        k++;
                    }
                    desk_entity = deskGroup.create(j*width*0.1+width*0.05,(i-(k-1)/2)*height*0.12+height*0.22,'desk');
                    desk_entity.setBodySize(width*0.1,height*0.12*k,true);
                    desk_entity.y-=height*0.03-height*0.12*(k-1)/2;
                    desk_entity.setDisplaySize(width*0.1,height*0.18,true);
                    desk_entity.alpha=0.0001;
                }
            }
            
        }
    }
    //遊戲時間
    var timer=this.add.text(width*0.88, height*0.02, '', { fontFamily: 'fantasy', fontSize: width*0.05+'px', fill: '#111111' });
    timer.time=80;
    timer.setText(Math.floor(timer.time/60)+":"+(timer.time%60<10?'0':"")+timer.time%60);
    timer.depth=30;
    //remind: string to variable(en and zh-tw)
    //結算文字
    var ending_text = this.add.text(width*0.5, height*0.9, 'Tap to continue', { fontFamily: 'fantasy', fontSize: width*0.03+'px', fill: '#111111' })
    ending_text.setOrigin(0.5,0.5).alpha=0;
    
    //分數
    var score_text=this.add.text(width*0.88, height*0.02, '', { fontFamily: 'fantasy', fontSize: width*0.05+'px', fill: '#111111' });
    var score=0;
    score_text.alpha=0;
    score_text.setText(score.toString());
    {//動畫畫禎
        //人物動畫
        {
            this.anims.create({//橫向移動動畫
                key: 'movew_1',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 4, end: 4 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//橫向移動動畫
                key: 'movew_2',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 5, end: 5 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//向上移動動畫
                key: 'moveh_1',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 2, end: 2 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//向下移動動畫
                key: 'moveh_2',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//下不動
                key: 'face',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 6, end: 6 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//左不動
                key: 'left',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//上不動
                key: 'back',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 3, end: 3 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//橫向移動動畫
                key: 'pick_1',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 8, end: 8 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//橫向移動動畫
                key: 'pick_2',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 9, end: 9 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({//橫向移動動畫
                key: 'pick_0',
                frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 10, end: 10 }),
                frameRate: 5,
                repeat: -1
            });
        }
        {//beaker
            this.anims.create({
                key: 'beaker_A',
                frames: this.anims.generateFrameNumbers("beaker", { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_AA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_AAA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 2, end: 2 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_AAAA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 3, end: 3 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_dirty',
                frames: this.anims.generateFrameNumbers("beaker", { start: 4, end: 4 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_dry2',
                frames: this.anims.generateFrameNumbers("beaker", { start: 5, end: 5 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_dry4',
                frames: this.anims.generateFrameNumbers("beaker", { start: 6, end: 6 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker',
                frames: this.anims.generateFrameNumbers("beaker", { start: 7, end: 7 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_T',
                frames: this.anims.generateFrameNumbers("beaker", { start: 8, end: 8 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 9, end: 9 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TAA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 10, end: 10 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TAAA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 11, end: 11 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TT',
                frames: this.anims.generateFrameNumbers("beaker", { start: 12, end: 12 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TTA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 13, end: 13 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TTAA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 14, end: 14 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TTT',
                frames: this.anims.generateFrameNumbers("beaker", { start: 15, end: 15 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TTTA',
                frames: this.anims.generateFrameNumbers("beaker", { start: 16, end: 16 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'beaker_TTTT',
                frames: this.anims.generateFrameNumbers("beaker", { start: 17, end: 17 }),
                frameRate: 5,
                repeat: -1
            });
        }
        {//microwave
            this.anims.create({
                key: 'mw_l',
                frames: this.anims.generateFrameNumbers("microwave", { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'mw_d',
                frames: this.anims.generateFrameNumbers("microwave", { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
        }
        {//mod
            this.anims.create({
                key: 'mod_w',
                frames: this.anims.generateFrameNumbers("mod", { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'mod_n',
                frames: this.anims.generateFrameNumbers("mod", { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'mod_d',
                frames: this.anims.generateFrameNumbers("mod", { start: 2, end: 2 }),
                frameRate: 5,
                repeat: -1
            });
        }
        {//gel
            this.anims.create({
                key: 'gel',
                frames: this.anims.generateFrameNumbers("gel", { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'gel_m',
                frames: this.anims.generateFrameNumbers("gel", { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'gel_mm',
                frames: this.anims.generateFrameNumbers("gel", { start: 2, end: 2 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'gel_s',
                frames: this.anims.generateFrameNumbers("gel", { start: 3, end: 3 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'gel_ss',
                frames: this.anims.generateFrameNumbers("gel", { start: 4, end: 4 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'gel_sm',
                frames: this.anims.generateFrameNumbers("gel", { start: 5, end: 5 }),
                frameRate: 5,
                repeat: -1
            });
        }
        {//tank
            this.anims.create({
                key: 'tank',
                frames: this.anims.generateFrameNumbers("tank", { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'tank_T',
                frames: this.anims.generateFrameNumbers("tank", { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'tank_G',
                frames: this.anims.generateFrameNumbers("tank", { start: 2, end: 2 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'tank_TG',
                frames: this.anims.generateFrameNumbers("tank", { start: 3, end: 3 }),
                frameRate: 5,
                repeat: -1
            });
        }
        {//pipette
            this.anims.create({
                key: 'pipette',
                frames: this.anims.generateFrameNumbers("pipette", { start: 0, end: 0 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'pipette_m',
                frames: this.anims.generateFrameNumbers("pipette", { start: 1, end: 1 }),
                frameRate: 5,
                repeat: -1
            });
            this.anims.create({
                key: 'pipette_s',
                frames: this.anims.generateFrameNumbers("pipette", { start: 2, end: 2 }),
                frameRate: 5,
                repeat: -1
            });
        }
    }
    //碰撞、放器材
    keySpace = this.input.keyboard.addKey(Phaser.Input.Keyboard.KeyCodes.SPACE);
    //獎牌
    // var medals=[];
    // medals[0]=this.physics.add.image(width*0.63, height*0.75, "gold").setDisplaySize(width/15,width/15).setTint(0xff0000);
    // medals[1]=this.physics.add.image(width*0.63, height*0.75, "silver").setDisplaySize(width/15,width/15).setTint(0x550000);
    // medals[2]=this.physics.add.image(width*0.63, height*0.75, "bronze").setDisplaySize(width/15,width/15).setTint(0x110000);
    // medals[0].alpha=0;
    // medals[1].alpha=0;
    // medals[2].alpha=0;
    // medals[0].depth=65500;
    // medals[1].depth=65500;
    // medals[2].depth=65500;
    for(var i=0;i<7;i++){
        for(var j=0;j<10;j++){
            if(desk_what[i][j]!=''){//物件初始位置
                desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                desk[i][j].item.depth=desk[i][j].depth+1;
                if(desk_what[i][j]=="trashcan"){
                    desk[i][j].disableBody(false,true);
                }else if(desk_what[i][j]=="beaker"){
                    beaker_zero(desk[i][j].item);
                }else if(desk_what[i][j]=="microwave"){
                    desk[i][j].item.anims.play("mw_d");
                    desk[i][j].item.item=null;
                    desk[i][j].item.time=-12;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y-width*0.05, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.depth=100;
                }else if(desk_what[i][j]=="mod"){
                    desk[i][j].item.anims.play("mod_n");
                    desk[i][j].item.item=null;
                    desk[i][j].item.time=-12;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y-width*0.05, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.depth=100;
                }else if(desk_what[i][j]=="pipette"){
                    desk[i][j].item.take="";
                    desk[i][j].item.setDisplaySize(width*0.015,width*0.06).refreshBody();
                    desk[i][j].item.setAngle(45);
                }else if(desk_what[i][j]=="tank"){
                    desk[i][j].item.anims.play("tank");
                    desk[i][j].item.item=null;
                    desk[i][j].item.has_TAE=0;
                    desk[i][j].item.TAE_concentration=0;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y+width*0.02, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    // desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.setTint(0x000000);
                    desk[i][j].item.alert.depth=100;
                }else if(desk_what[i][j]=="uv"){
                    desk[i][j].item.depth+=1;
                    desk[i][j].item.alpha=0.65;
                }else if(desk_what[i][j]=="machine"){
                    desk[i][j].item.TAE=0;
                    desk[i][j].item.agar=0;
                    desk[i][j].item.TAE_text=this.add.text(desk[i][j].item.x-width*0.05, desk[i][j].item.y-height*0.02, '', { fontFamily: 'fantasy', fontSize: width*0.02+'px', fill: '#111111' });
                    desk[i][j].item.agar_text=this.add.text(desk[i][j].item.x+width*0.05, desk[i][j].item.y-height*0.02, '', { fontFamily: 'fantasy', fontSize: width*0.02+'px', fill: '#111111' });
                    desk[i][j].item.gel=0;
                    desk[i][j].item.runtime=16; //13*1.2
                    desk[i][j].item.nowtime=-1;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y+width*0.02, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    // desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.depth=100;
                }
            }
        }
    }
    this.physics.add.overlap(spot_touch, deskGroup_touch, touch_table, null, this);
    this.physics.add.collider(spot, deskGroup, null, null, this);//統一
    this.physics.add.overlap(spot_touch, trashcan, trashing, null, this);
    this.physics.add.collider(spot, trashcan, null, null, this);
    this.physics.add.collider(spot, banner, null, null, this);
    function createObject(x,y,what,where){
        var Object;
        y-=height*0.03;
        if(what=="beaker"){
            Object = where.physics.add.sprite(x, y, what).setDisplaySize(width*0.1/2,height*0.17/2);
            Object.setInteractive().setBodySize(Object.width,Object.height);
        }else if(what=="trashcan"){
            Object = trashcan.create(x, y+width*0.04, what).setDisplaySize(width*0.1/2,height*0.17/2).refreshBody();
        }else if(what=="uv"){
            Object = cant_move_item.create(x, y+width*0.02, what).setDisplaySize(width*0.1,height*0.3).refreshBody();
        }else if(what=="gel_machine"){
            Object = cant_move_item.create(x+width*0.02, y+width*0.02-height*0.15, what).setDisplaySize(width*0.1,height*0.3).refreshBody();
        }else if(what=="sample" || what=="marker"){
            Object = cant_move_item.create(x, y, what).setDisplaySize(width*0.1/6,height*0.17/3).refreshBody();
        }else{
            Object = where.physics.add.sprite(x, y, what).setDisplaySize(width*0.1/2,height*0.17/2).refreshBody();
            Object.setInteractive();
        }
        Object.type=what;
        return Object;
    }
    var action_record=0;
    var action_list=[];
    function touch_table(spot_touch, desk_entity){
        i=desk_entity.i;
        j=desk_entity.j;
        if(keySpace.isDown){
            if(action_list.indexOf(desk_entity.id)==-1){
                action_list[action_record]=desk_entity;
                action_record++;
            }
        }else{
            if(action_record>0){
                var final_desk=action_list[0];
                for(var k=1;k<action_record;k++){
                    if((action_list[k].x-spot_touch.x)*(action_list[k].x-spot_touch.x)+(action_list[k].y-spot_touch.y)*(action_list[k].y-spot_touch.y)<(final_desk.x-spot_touch.x)*(final_desk.x-spot_touch.x)+(final_desk.y-spot_touch.y)*(final_desk.y-spot_touch.y))
                        final_desk=action_list[k];
                }
                action_in_thing(spot_touch.player, final_desk);
                action_record=0;
                action_list.length=0;
            }
        }
        
    }
    function action_in_thing(p,desk_entity){
        // console.log(desk_entity.item.type);
        if(desk_entity.item!=null){//desk has something
            if(p.pick!=null){//player has something
                if(desk_entity.item.type=="TAE" && p.pick.type=="beaker"){
                    take_TAE(p.pick);
                }else if(desk_entity.item.type=="agarose" && p.pick.type=="beaker"){
                    take_agarose(p.pick);
                }else if(desk_entity.item.type=="microwave" && p.pick.type=="beaker"){
                    microwave_in(p, desk_entity.item);
                }else if(desk_entity.item.type=="mod" && p.pick.type=="beaker"){
                    mod_in(p, p.pick, desk_entity.item);
                }else if((desk_entity.item.type=="sample" || desk_entity.item.type=="marker") && p.pick.type=="pipette"){
                    pipette_suction(p.pick, desk_entity.item);
                }else if(desk_entity.item.type=="gel" && p.pick.type=="pipette" && p.pick.take!=""){
                    // pipette_spit(p, p.pick, desk_entity.item);
                }else if(desk_entity.item.type=="tank" && p.pick.type=="pipette" && p.pick.take!=""){
                    pipette_spit(p, p.pick, desk_entity.item);
                }else if(desk_entity.item.type=="beaker" || desk_entity.item.type=="pipette" || desk_entity.item.type=="gel"){
                    swap_item(p, desk_entity);
                }else if((desk_entity.item.type=="tank") && p.pick.type=="gel"){
                    tank_in(p, desk_entity.item);
                }else if((desk_entity.item.type=="tank") && p.pick.type=="beaker"){
                    tank_change_TAE(p, desk_entity.item);
                }else if((desk_entity.item.type=="uv" || desk_entity.item.type=="gel_machine") && p.pick.type=="gel"){
                    gel_submit(p, desk_entity.item);
                }else if(desk_entity.item.type=="machine" && p.pick.type=="beaker"){
                    machine_add(p, desk_entity.item);
                }
                
            }else{//player has nothing
                if(desk_entity.item.type=="beaker" || desk_entity.item.type=="pipette" || desk_entity.item.type=="gel"){
                    pick_thing(p, desk_entity.item, desk_entity);
                }else if(desk_entity.item.type=="microwave"){
                    microwave_out(p, desk_entity.item);
                }else if(desk_entity.item.type=="mod"){
                    mod_out(p, desk_entity.item);
                }else if(desk_entity.item.type=="tank"){
                    tank_run(p, desk_entity.item);
                    // tank_out(p, desk_entity.item);
                }
            }
        }else{//desk has nothing
            if(p.pick!=null){//player has something
                put_thing(p, desk_entity);
            }else{//player has nothing
                //hmmmm... actually, it's useless.
            }
        }
    }
    function take_TAE(beaker){
        if(beaker.c<4){
            beaker.TAE+=1;
            beaker.c+=1;
            change_skin_beaker(beaker);
        }
    }
    function take_agarose(beaker){
        if(beaker.c<4){
            beaker.agar+=1;
            beaker.c+=1;
            change_skin_beaker(beaker);
        }
    }
    function change_skin_beaker(beaker){
        if(beaker.c==4){
            if(beaker.ok==1){
                beaker.anims.play('beaker_TTTT',true);
            }else if(beaker.TAE==4){//beaker.agar should be 0.
                beaker.anims.play('beaker_TTTT',true);
            }else if(beaker.TAE==3){//beaker.agar should be 1.
                beaker.anims.play('beaker_TTTA',true);
            }else if(beaker.TAE==2){//beaker.agar should be 2.
                beaker.anims.play('beaker_TTAA',true);
            }else if(beaker.TAE==1){//beaker.agar should be 3.
                beaker.anims.play('beaker_TAAA',true);
            }else if(beaker.TAE==0){//beaker.agar should be 4.
                beaker.anims.play('beaker_AAAA',true);
            }else if(beaker.TAE==-1){//beaker.TAE can't use anymore.
                beaker.anims.play('beaker_dirty',true);
                //remind: change skin
                // beaker.setTint(0x666666);
            }
        }else if(beaker.c==3){
            if(beaker.TAE==3){//beaker.agar should be 0.
                beaker.anims.play('beaker_TTT',true);
            }else if(beaker.TAE==2){//beaker.agar should be 1.
                beaker.anims.play('beaker_TTA',true);
            }else if(beaker.TAE==1){//beaker.agar should be 2.
                beaker.anims.play('beaker_TAA',true);
            }else if(beaker.TAE==0){//beaker.agar should be 3.
                beaker.anims.play('beaker_AAA',true);
            }
        }else if(beaker.c==2){
            if(beaker.ok==1){
                beaker.anims.play('beaker_TT',true);
            }else if(beaker.TAE==1){//beaker.agar should be 1 too.
                beaker.anims.play('beaker_TA',true);
            }else if(beaker.TAE==2){//beaker.agar should be 0.
                beaker.anims.play('beaker_TT',true);
            }else if(beaker.TAE==0){//beaker.agar should be 2.
                beaker.anims.play('beaker_AA',true);
            }
        }else if(beaker.c==1){
            if(beaker.TAE==1){//beaker.agar should be 0.
                beaker.anims.play('beaker_T',true);
            }else if(beaker.TAE==0){//beaker.agar should be 1.
                beaker.anims.play('beaker_A',true);
            }
        }else{
            beaker.anims.play('beaker',true);
        }
    }
    function microwave_in(a_player, microwave){
        if(microwave.item==null){
            microwave.item=a_player.pick;
            a_player.pick=null;
            microwave.item.alpha=0;
            microwave.time=4;
            microwave.anims.play("mw_l");
            setTimeout(function(){
                microwave_timeout(microwave);
            },1000);
        }
    }
    function microwave_out(a_player, microwave){
        if(microwave.item!=null){
            a_player.pick=microwave.item;
            microwave.item=null;
            a_player.pick.alpha=1;
            microwave.anims.play("mw_d");
            if(a_player.pick.ok==1){
                a_player.pick.score+=(microwave.time>-4)?100:100+(3+microwave.time)*15;
            } 
            microwave.time=-12;
            microwave.alert.alpha=0;
        }
    }
    function microwave_timeout(microwave){
        microwave.time-=1;
        if(microwave.item==null)return ;
        if(microwave.time==0){
            if(microwave.item.c%2==0 && microwave.item.TAE==microwave.item.agar){
                if(microwave.item.ok!=-1){
                    microwave.item.ok=1;
                }
                if(microwave.item.c==2)
                    microwave.item.anims.play("beaker_TT");
                if(microwave.item.c==4)
                    microwave.item.anims.play("beaker_TTTT");
            }
            microwave.alert.setTint(0xffffff);
            microwave.alert.alpha=1;
            microwave.anims.play("mw_d");
        }if(microwave.item.TAE==microwave.item.agar && microwave.item.c%2==0){
            if(microwave.time<=-3 && microwave.time>-6){
                warning(1,0,microwave.alert,1,0);
                // microwave.alert.setTint(0xffffff+(microwave.time+3)*0x002222);
            }else if(microwave.time<=-6 && microwave.time>-9){
                warning(2,0,microwave.alert,1,0);
                // microwave.alert.setTint(0xffffff+(microwave.time+3)*0x002222);
            }else if(microwave.time<=-9 && microwave.time>-12){
                warning(4,0,microwave.alert,1,0);
                // microwave.alert.setTint(0xffffff+(microwave.time+3)*0x002222);
            }else if(microwave.time==-12){
                microwave.item.ok=-1;
                warning(20,0,microwave.alert,1,0);
                if(microwave.item.c==2){
                    microwave.item.anims.play("beaker_dry2");
                }else if(microwave.item.c==4){
                    microwave.item.anims.play("beaker_dry4");
                }
                //remind: add microwave.item.anims.play("beaker_fail");
            }
        }
        
        if(microwave.time>-12){
            setTimeout(function(){
                microwave_timeout(microwave);
            },1000);
        }
    }
    function mod_in(a_player, beaker, mod){
        if(mod.item==null){
            if(beaker.ok==1){
                mod.anims.play("mod_w");
                mod.item=create_gel(mod.x,mod.y,0,beaker.score);
                mod.time=9;
                if(beaker.c%2==0){
                    beaker.TAE-=1;
                    beaker.agar-=1;
                    beaker.c-=2;
                    if(beaker.c==0){
                        beaker.ok=0;
                        beaker.score=0;
                    }
                    change_skin_beaker(beaker);
                }
                setTimeout(function(){
                    mod_cooldown(mod);
                },1000);
                //remind: change gel photo
            }
        }
    }
    function mod_out(a_player, mod){
        if(mod.time<=0 && mod.item!=null){
            a_player.pick=mod.item;
            mod.item=null;
            a_player.pick.alpha=1;
            if(a_player.pick.ok==1)
                a_player.pick.mod_score+=(mod.time>-4)?100:100+(mod.time+3)*15;
            mod.time=-12;
            mod.alert.alpha=0;
            mod.anims.play("mod_n");
        }
    }
    function mod_cooldown(mod){
        mod.time-=1;
        if(mod.time==0){
            mod.item.ok=1;
            mod.alert.setTint(0xffffff);
            mod.alert.alpha=1;
            mod.anims.play("mod_d");
        }else if(mod.time<=-3 && mod.time>-6){
            warning(1,0,mod.alert,1,0);
        }else if(mod.time<=-6 && mod.time>-9){
            warning(2,0,mod.alert,1,0);
        }else if(mod.time<=-9 && mod.time>-12){
            warning(3,0,mod.alert,1,0);
        }else if(mod.time==-12){
            mod.item.ok=0;
            mod.item.setTint(0xaaaaaa);
            warning(20,0,mod.alert,1,0);
            //remind: change gel skin
            // mod.item.anims.play("");
        }
        if(mod.time>-12){
            setTimeout(function(){
                mod_cooldown(mod);
            },1000);
        }
    }
    function tank_in(p, tank){
        if(tank.item==null && p.pick.ok==1){
            tank.item=p.pick;
            p.pick=null;
            tank.item.x=tank.x;
            tank.item.y=tank.y;
            tank.item.alpha=0;
        }change_tank_skin(tank);
    }
    function tank_out(p, tank){
        if(tank.item!="" && tank.item!=null){
            p.pick=tank.item;
            tank.item=null;
            p.pick.alpha=1;
            if(p.pick.run_time>=55 && p.pick.run_time<=95)
                p.pick.run_score+=50;
            if(p.pick.run_time>=67 && p.pick.run_time<=82)
                p.pick.run_score+=50;
            if(p.pick.run_time>=100)
                p.pick.run_score=-1;
            p.pick.qte_bar.alpha=0;
            p.pick.qte_half.alpha=0;
            p.pick.qte_perfect.alpha=0;
            p.pick.qte_pointer.alpha=0;
            change_tank_skin(tank);
        }
    }
    function tank_run(p, tank){
        if(tank.item!=null && tank.has_TAE==1 && tank.item.onuse==0){
            tank.item.onuse=1;
            var qte_half=0.55*tank.item.qte_bar.width;
            var qte_perfect=0.67*tank.item.qte_bar.width;
            tank.item.qte_bar.depth=100;
            tank.item.qte_bar.x=tank.item.x-tank.item.qte_bar.width/2;
            tank.item.qte_bar.y=tank.item.y-height*0.07;
            tank.item.qte_bar.alpha=1;
            tank.item.qte_half.depth=101;
            tank.item.qte_half.x=tank.item.qte_bar.x+qte_half;
            tank.item.qte_half.y=tank.item.y-height*0.07;
            tank.item.qte_half.alpha=1;
            tank.item.qte_perfect.depth=102;
            tank.item.qte_perfect.x=tank.item.qte_bar.x+qte_perfect;
            tank.item.qte_perfect.y=tank.item.y-height*0.07;
            tank.item.qte_perfect.alpha=1;
            tank.item.qte_pointer.depth=103;
            tank.item.qte_pointer.x=tank.item.qte_bar.x+tank.item.qte_bar.width*tank.item.run_time*0.01;
            tank.item.qte_pointer.y=tank.item.y-height*0.07;
            tank.item.qte_pointer.alpha=1;
            if(tank.item.marker+tank.item.sample>0){
                setTimeout(function(){
                    gel_run_time(tank, tank.item.qte_pointer.x);
                },100);
            }
        }else{
            tank.item.onuse=0;
            tank_out(p, tank);
        }
    }
    function gel_run_time(tank, locate){
        if(tank.item==null)return ;
        if(tank.has_TAE==1){
            if(locate>=tank.item.qte_bar.x+tank.item.qte_bar.width){
                locate=tank.item.qte_bar.x+tank.item.qte_bar.width;
            }
            if(tank.TAE_concentration>0){
                tank.TAE_concentration-=1;
            }
            tank.item.TAE_score+=(tank.TAE_concentration)/500;
            tank.item.run_time+=1;
            locate+=tank.item.qte_bar.width*0.01;
            tank.item.qte_pointer.x=locate;
            tank.alert.setTint(0xffffff-Math.floor((1000-tank.TAE_concentration)/4)*(0x010101));
        }
        setTimeout(function(){
            gel_run_time(tank, locate);
        },100);
    }
    function tank_change_TAE(p, tank){
        if(tank.has_TAE==0 && p.pick.TAE==4){
            tank.has_TAE=1;
            tank.TAE_concentration=1000;
            p.pick.c=0;
            p.pick.TAE=0;
            tank.alert.alpha=1;
            tank.alert.setTint(0xffffff);
            change_skin_beaker(p.pick);
            change_tank_skin(tank);
        }else if(tank.has_TAE==1 && p.pick.c==0){
            if(tank.TAE_concentration<1000){
                p.pick.TAE=-1;
            }else{
                p.pick.TAE=4;
            }
            tank.has_TAE=0;
            tank.TAE_concentration=0;
            p.pick.c=4;
            tank.alert.alpha=0;
            change_skin_beaker(p.pick);
            change_tank_skin(tank);
        }
    }
    function change_tank_skin(tank){
        if(tank.item!=null){
            if(tank.has_TAE==1){
                tank.anims.play("tank_TG");
            }else{
                tank.anims.play("tank_G");
            }
        }else{
            if(tank.has_TAE==1){
                tank.anims.play("tank_T");
            }else{
                tank.anims.play("tank");
            }
        }
    }
    function trashing(spot_touch, trashcan){
        if(keySpace.isDown){
            var p=spot_touch.player;
            if(p.pick!=null){
                if(p.pick.type=="beaker"){
                    beaker_zero(p.pick);
                }else if(p.pick.type=="gel"){
                    p.pick.qte_bar.destroy();
                    p.pick.qte_half.destroy();
                    p.pick.qte_perfect.destroy();
                    p.pick.qte_pointer.destroy();
                    p.pick.destroy();
                    p.pick=null;
                }else if(p.pick.type=="pipette"){
                    p.pick.take="";
                    p.pick.clearTint();
                }
            }
        }
    }
    function pipette_suction(pipette, sample){
        
        if(pipette.take==""){
            pipette.take=sample.type;
            if(sample.type=="sample"){
                // pipette.setTint(0xaaffaa);
                pipette.anims.play("pipette_s");
            }else if(sample.type=="marker"){
                // pipette.setTint(0xffaaff);
                pipette.anims.play("pipette_m");
            }
            //remind: pipe skin
        }
    }
    function pipette_spit(p, pipette, tank){
        if(tank.has_TAE==0)return;
        if(tank.item.type!="gel")return;
        if(tank.item.run_time!=0)return;
        gel=tank.item;
        if(gel.onuse==0 && pipette.take!="" && gel.sample+gel.marker<2){
            gel.onuse=1;
            p.stop=1;
            var qte_half=Math.floor(Math.random()*36)/60*gel.qte_bar.width;
            var qte_perfect=Math.floor(Math.random()*16)/60*gel.qte_bar.width;
            gel.qte_bar.depth=100;
            gel.qte_bar.x=gel.x-gel.qte_bar.width/2;
            gel.qte_bar.y=gel.y-height*0.07;
            gel.qte_bar.alpha=1;
            gel.qte_half.depth=101;
            gel.qte_half.x=gel.qte_bar.x+qte_half;
            gel.qte_half.y=gel.y-height*0.07;
            gel.qte_half.alpha=1;
            gel.qte_perfect.depth=102;
            gel.qte_perfect.x=gel.qte_half.x+qte_perfect;
            gel.qte_perfect.y=gel.y-height*0.07;
            gel.qte_perfect.alpha=1;
            gel.qte_pointer.depth=103;
            gel.qte_pointer.x=gel.qte_bar.x;
            gel.qte_pointer.y=gel.y-height*0.07;
            gel.qte_pointer.alpha=1;
            setTimeout(function(){
                qte_pointer_move(p, gel, 1, gel.qte_pointer.x);
            },500);
        }
    }
    function qte_pointer_move(p, gel, d, locate){
        if(keySpace.isDown){
            p.stop=0;
            if(p.pick.take=="marker")
                gel.marker_score+=20;
            else if(p.pick.take=="sample")
                gel.sample_score+=20;
            //QTE not so perfect
            if(gel.qte_pointer.x>=gel.qte_half.x && gel.qte_pointer.x<=gel.qte_half.x+gel.qte_bar.width*0.4){
                if(p.pick.take=="marker")
                    gel.marker_score+=40;
                else if(p.pick.take=="sample")
                    gel.sample_score+=40;
            }
            //QTE perfect
            if(gel.qte_pointer.x>=gel.qte_perfect.x && gel.qte_pointer.x<=gel.qte_perfect.x+gel.qte_bar.width*0.15){
                if(p.pick.take=="marker")
                    gel.marker_score+=40;
                else if(p.pick.take=="sample")
                    gel.sample_score+=40;
            }
            if(p.pick.take=="sample"){
                gel.sample+=1;
            }else if(p.pick.take=="marker"){
                gel.marker+=1;
            }
            change_skin_gel(gel);
            if(gel.marker+gel.sample==2){
                gel.ok=1;
            }
            setTimeout(function(){
                p.pick.take="";
                gel.onuse=0;
            },100);
            // p.pick.clearTint();
            p.pick.anims.play("pipette");
            gel.qte_bar.alpha-=0.001;
            setTimeout(function(){
                gel_fade_out(gel);
            },300);
            return ;
        }
        locate+=d*gel.qte_bar.width*0.0125;
        gel.qte_pointer.x=locate;
        if(locate>=gel.qte_bar.x+gel.qte_bar.width || locate<=gel.qte_bar.x){
            d=-d;
        }
        setTimeout(function(){
            qte_pointer_move(p, gel, d, locate);
        },10);
    }
    function gel_fade_out(gel){
        if(gel.qte_bar.alpha==1)return ;
        gel.qte_bar.alpha-=0.1;
        gel.qte_half.alpha-=0.1;
        gel.qte_perfect.alpha-=0.1;
        gel.qte_pointer.alpha-=0.1;
        if(gel.qte_bar.alpha<=0)return ;
        setTimeout(function(){
            gel_fade_out(gel);
        },50);
    }
    function change_skin_gel(gel){
        if(gel.sample+gel.marker==2){
            if(gel.sample==1){//gel.marker should be 1 too.
                gel.anims.play('gel_sm',true);
            }if(gel.sample==2){//gel.marker should be 0.
                gel.anims.play('gel_ss',true);
            }if(gel.sample==0){//gel.marker should be 2.
                gel.anims.play('gel_mm',true);
            }
        }else if(gel.sample+gel.marker==1){
            if(gel.sample==1){//gel.marker should be 0.
                gel.anims.play('gel_s',true);
            }if(gel.sample==0){//gel.marker should be 1.
                gel.anims.play('gel_m',true);
            }
        }else{
            gel.anims.play('gel',true);
        }
    }
    function beaker_zero(beaker){
        beaker.TAE=0;
        beaker.agar=0;
        beaker.c=0;
        beaker.ok=0;
        beaker.score=0;
        beaker.anims.play("beaker");
        beaker.clearTint();
    }
    function pick_thing(p, pick_item, from){
        p.pick=pick_item;
        from.item=null;
    }
    function swap_item(p, desk){
        var t_item=desk.item;
        desk.item=p.pick;
        p.pick=t_item;
        desk.item.x=desk.x;
        desk.item.y=desk.y-height*0.03;;
        desk.item.depth=desk.depth+1;
        if(desk.item.type=="pipette"){
            desk.item.setDisplaySize(width*0.015,width*0.06);
            desk.item.setAngle(45);
        }
    }
    function put_thing(p, to){
        to.item=p.pick;
        p.pick=null;
        to.item.x=to.x;
        to.item.y=to.y-height*0.03;
        to.item.depth=to.depth+1;
        if(to.item.type=="pipette"){
            to.item.setDisplaySize(width*0.015,width*0.06);
            to.item.setAngle(45);
        }
    }
    function warning(level,last,item,d,count){
        if(item.alpha==0){
            return ;
        }
        count++;
        if(level>10){
            item.setTint(0xff0000);
        }else{
            if(last<=-20 || last>=0){
                d=-d;
            }
            last+=d*level;
            item.setTint(0xffffff+last*(0x000c0c));
        }
        if(count<39){
            setTimeout(function(){
                warning(level,last,item,d,count);
            },25);
        }
       
    }
    function gel_submit(p, item){
        gel_list.push(p.pick);
        p.pick.alpha=0;
        p.pick.qte_bar.destroy();
        p.pick.qte_half.destroy();
        p.pick.qte_perfect.destroy();
        p.pick.qte_pointer.destroy();
        p.pick=null;
    }
    function time_count_down(timer){
        var time_now=Math.floor(timer.time/60)+":"+(timer.time%60<10?'0':"")+(timer.time%60);
        if(timer.scene!=undefined)
            timer.setText(time_now);
        if(timer.time==0){
            game_over();
            return ;
        }
        if(stop==0){
            timer.time-=1;
        }
        setTimeout(function(){
            time_count_down(timer);
        },1000);
    }
    function game_over(){
        //if(this.create.name!="create_stage5_take")return ;
        stop=1;
        finish_transition(where,width,0);
        setTimeout(function(){
            free_all();
        },500);
    }
    function free_all(){
        free_player(player);
        timer.destroy();
        for(var i=0;i<7;i++){   //建立桌子
            for(var j=0;j<10;j++){
                free_desk(desk[i][j]);
            }
        }
        lighting_gel(gel_list);
        start_transition(where);
    }
    function free_desk(desk){
        if(desk!=null){
            if(desk.item!=null){
                if(desk.item.alert!=null){
                    desk.item.alert.destroy();
                }if(desk.item.qte_bar!=null){
                    desk.item.qte_bar.destroy();
                }if(desk.item.qte_pointer!=null){
                    desk.item.qte_pointer.destroy();
                }if(desk.item.qte_half!=null){
                    desk.item.qte_half.destroy();
                }if(desk.item.qte_perfect!=null){
                    desk.item.qte_perfect.destroy();
                }desk.item.destroy();
            }desk.destroy();
        }
    }
    function free_player(player){
        if(player!=null){
             if(player.pick!=null){
                if(player.pick.qte_bar!=null){
                    player.pick.qte_bar.destroy();
                }if(player.pick.qte_pointer!=null){
                    player.pick.qte_pointer.destroy();
                }if(player.pick.qte_half!=null){
                    player.pick.qte_half.destroy();
                }if(player.pick.qte_perfect!=null){
                    player.pick.qte_perfect.destroy();
                }player.pick.destroy();
            }
            player.alpha=0;
            // player.destroy();
        //     spot.destroy();
        //     spot_touch.destroy();
        }
    }
    function machine_add(p, item){
        if(p.pick.TAE==0 && p.pick.agar>0){
            item.agar=(item.agar+p.pick.agar<=10)?item.agar+p.pick.agar:10;
            p.pick.agar=(item.agar+p.pick.agar<=10)?0:item.agar+p.pick.agar-10;
            change_skin_beaker(p.pick);
            change_machine_text(item);
        }else if(p.pick.TAE>0 && p.pick.agar==0){
            item.agar=(item.agar+p.pick.agar<=10)?item.agar+p.pick.agar:10;
            p.pick.agar=(item.agar+p.pick.agar<=10)?0:item.agar+p.pick.agar-10;
            change_skin_beaker(p.pick);
            change_machine_text(item);
        }
        if(item.TAE>0 && item.agar>0 && item.nowtime==-1){
            machine_run(item);
        }
    }
    function machine_run(machine){
        if(machine.nowtime==-1){
            machine.nowtime=0;
            machine.agar-=1;
            machine.TAE-=1;
            change_machine_text(machine);
        }
        machine.nowtime+=1;
        if(machine.nowtime<15){
            setTimeout(function(){
                machine_run(machine);
            },1000);
        }else if(machine.nowtime==15){
            machine.gel+=1;
            machine.nowtime=-1;
            change_machine_text(machine);
            if(machine.TAE>0 && machine.agar>0){
                machine_run(machine);
            }
        }
    }
    function change_machine_text(machine){
        machine.agar_text.setText(machine.agar+"/10");
        machine.TAE_text.setText(machine.TAE+"/10");
        if(machine.gel>0){
            machine.alert.alpha=1;
        }else{
            machine.alert.alpha=0;
        }
    }
    //+幾分
    var plus_score = this.add.text(width*0.5, height*0.12, '', { fontFamily: 'fantasy', fontSize: width*0.03+'px', fill: '#111111' });
    plus_score.setInteractive().setOrigin(0.5,0.5);
    plus_score.alpha=0;
    var medal_list=[];
    function lighting_gel(gel_list){
        //--結算畫面初始化--
        var list_len=gel_list.length;
        ending_text.alpha=1;
        score_text.alpha=1;
        for(var i=0;i<list_len;i++){
            gel_list[i].setDisplaySize(width*0.3,width*0.3);
            gel_list[i].x=width*0.5+width*0.35*i;
            gel_list[i].y=height*0.5;
            gel_list[i].alpha=1;
            //獎牌設置 width*0.63,height*0.75;
            gel_list[i].medal=create_medal(gel_list[i].x+width*0.13, gel_list[i].y+height*0.25,gel_list[i].score);
            gel_list[i].medal.alpha=1;
            gel_list[i].medal.depth=65500;            
        }
        gel_stop(gel_list,list_len,0);
        
        // for(var i=0;i<3;i++){
        //     medals[i].alpha=1;
        // }
        var count=0;
        var act=0;
        where.input.on('pointerup', function (pointer) {
            if(act==0){//當沒在跑的時候
                if(count<list_len){
                    var tar_score = gel_list[count].score;
                    score+=tar_score;
                    score_text.setText(score.toString());
                }
                count+=1;
                act=1;
                setTimeout(function(){
                    gel_stop(gel_list,list_len,count);
                    act=0;
                },1000);
                for(var i=0;i<list_len;i++){
                    gel_list[i].setVelocityX(-0.35*width);
                    gel_list[i].medal.setVelocityX(-0.35*width);
                }
                //plus_score跳出
                plus_score.alpha=1;
                plus_score.setText('+'+tar_score.toString());
                text_fade_out(plus_score);
                if(count==list_len){//跑完
                    setTimeout(function(){//轉回map_1
                        finish_transition(this,width,0);
                        setTimeout(function(){
                            load_page(map_1);
                        },500);
                    },1000);
                }
            }
        }, this);
    }
    function text_fade_out(text){
        text.alpha-=0.05;
        text.y=text.y-1.5;
        if(text.alpha<=0)return ;
        setTimeout(function(){
            text_fade_out(text);
        },50);
    }
    function gel_stop(gel_list,list_len,count){
        for(var i=0;i<list_len;i++){
            gel_list[i].setVelocityX(0);
            gel_list[i].medal.setVelocityX(0);
            gel_list[i].x=width*0.5+width*0.35*(i-count);
        }
        var temp=gel_list[count];
        if(temp.score==0){
            temp.score+=temp.microwave_score+temp.mod_score+temp.sample_score;
            temp.score+=temp.marker_score+temp.TAE_score+temp.run_score;
        }
        //結算分數
        console.log("score:"+temp.score);
        console.log("microwave:"+temp.microwave_score);
        console.log("mod:"+temp.mod_score);
        console.log("sample:"+temp.sample_score);
        console.log("marker:"+temp.marker_score);
        console.log("TAE:"+temp.TAE_score);
        console.log("run:"+temp.run_score);
        //gel說明
        if(temp.sample+temp.marker==0){
            ending_text.setText("There are nothing in the gel...");
            temp.score=0;
        }else if(temp.sample<1){
            ending_text.setText("You have no sample.");
            temp.score=0;
        }else if(temp.marker<1){
            ending_text.setText("You have no marker.");
            temp.score=0;
        }else if(temp.run_score==0){
            ending_text.setText("The time of electrophoresis is not enough.");
        }else if(temp.run_score==-1){
            ending_text.setText("The time of electrophoresis is too long.");
            temp.score=0;
        }else if(temp.marker_score<=20){
            ending_text.setText("The marker of gel is crooked.");
        }else if(temp.sample_score<=20){
            ending_text.setText("The sample of gel is crooked.");
        }else if(temp.mod_score<=30 || temp.microwave_score<=30){
            ending_text.setText("The gel has been left in the air for too long.");
        }else if(temp.TAE_score<=30){
            ending_text.setText("The TAE concentration of electrophoresis is too low.");
        }else if(temp.score<=300){
            ending_text.setText("Well... It's ok...");
        }else if(temp.score<=400){
            ending_text.setText("Actually, not bad.");
        }else if(temp.score<=500){
            ending_text.setText("It's a excellent gel graph.");
        }else if(temp.score<=600){
            ending_text.setText("What a amazing gel graph.");
        }
    }
    function create_medal(x,y,score=0){
        var temp;
        //remind: judge score still need adjust.
        console.log('MEDAL!');
        if(score<=200){
            temp = where.physics.add.image(x, y, "bronze").setDisplaySize(width/15,width/15).setTint(0x110000);
            console.log('bronze');
        }else if(score<=400){
            temp = where.physics.add.image(x, y, "silver").setDisplaySize(width/15,width/15).setTint(0x550000);
            console.log('silver');
        }else if(score<=600){
            temp = where.physics.add.image(x, y, "gold").setDisplaySize(width/15,width/15).setTint(0xff0000);
            console.log('gold');
        }
        return temp;
    }
    
    function create_gel(x,y,score=0,microwave_score=0,mod_score=0,sample_score=0,marker_score=0,TAE_score=0,run_score=0){
        var temp;
        temp=createObject(x, y, "gel",where).setDisplaySize(width*0.1/2,height*0.17/2).refreshBody();
        temp.score=score;
        temp.microwave_score=microwave_score;
        temp.mod_score=mod_score;
        temp.sample_score=sample_score;
        temp.marker_score=marker_score;
        temp.TAE_score=TAE_score;
        temp.run_score=run_score;
        temp.alpha=0;
        temp.ok=0;
        temp.onuse=0;
        temp.run_time=0;
        temp.type="gel";
        temp.sample=0;
        temp.marker=0;
        temp.qte_bar=cant_move_item.create(x, y, "qte_bar").setDisplaySize(width*0.1*2,width*0.1/12*2).setOrigin(0,0.5).refreshBody();
        temp.qte_bar.width=width*0.1*2;
        temp.qte_bar.height=width*0.1/12*2;
        temp.qte_bar.alpha=0;
        // temp.qte_bar.setTint();
        temp.qte_pointer=cant_move_item.create(x, y, "qte_pointer").setDisplaySize(temp.qte_bar.width/60,temp.qte_bar.width/6).setOrigin(0,0.5).refreshBody();
        temp.qte_pointer.alpha=0;
        temp.qte_pointer.setTint(0x9999ff);
        temp.qte_half=cant_move_item.create(x, y, "qte_half").setDisplaySize(temp.qte_bar.width*0.4,temp.qte_bar.width/12).setOrigin(0,0.5).refreshBody();
        temp.qte_half.alpha=0;
        temp.qte_half.setTint(0xffffbb);
        temp.qte_perfect=cant_move_item.create(x, y, "qte_perfect").setDisplaySize(temp.qte_bar.width*0.15,temp.qte_bar.width/12).setOrigin(0,0.5).refreshBody();
        temp.qte_perfect.alpha=0;
        temp.qte_perfect.setTint(0xffcccc);
        change_skin_gel(temp);
        return temp;
    }

    //test-結算膠
    var test;
    // score,microwave_score,mod_score,sample_score,marker_score,TAE_score,run_score
    test=create_gel(0,0,0,50,50,50,50,50,50);
    test.sample=1;
    change_skin_gel(test);
    gel_list.push(test);
    
    test=create_gel(0,0,0,100,100,50,50,50,20);
    test.marker=1;
    change_skin_gel(test);
    gel_list.push(test);

    test=create_gel(0,0,0,100,100,50,50,50,100);
    test.sample=1;
    test.marker=1;
    change_skin_gel(test);
    gel_list.push(test);


    var x,y,status=0;
    direct=this.add.image(x, y, 'direct').setDisplaySize(0.2*width,0.2*width);
    direct.alpha = 0;
    this.input.on('pointerdown', function (pointer) {
        x=pointer.x;
        y=pointer.y;
        status=1;
        point_x=x;
        point_y=y;
        if(isMobileDevice()){
            direct.alpha = 1;
        }
        // console.log(stage.x);
    }, this);
    this.input.on('pointermove', function (pointer) {
        point_x=x;
        point_y=y;
        if(status!=0){
            var temp_x=(pointer.x-x);
            var temp_y=(pointer.y-y);
            if(temp_x >= Math.abs(temp_y)){
                direction=1;
                p_facing=1;
            }else if(-temp_x > Math.abs(temp_y)){
                direction=3;
                p_facing=3;
            }else if(temp_y > Math.abs(temp_x)){
                direction=2;
                p_facing=2;
            }else if(-temp_y > Math.abs(temp_x)){
                direction=4;
                p_facing=4;
            }
            // console.log(direction);
        }
    }, this);
    this.input.on('pointerup', function (pointer) {
        status=0;
        direction=0;
        direct.alpha = 0;
    }, this);
    //文字說明
    TextBox_x=width*0.15;
    TextBox_y=height*0.75;
    var config =
    {
        wrapWidth: width*0.5,
        fixedWidth: width*0.55,
        fixedHeight: height*0.15,
    };
    PACO=new createTextBox(this, TextBox_x, TextBox_y, config, 'PACO');
    Sprite=new createTextBox(this, TextBox_x, TextBox_y, config, 'Sprite');
    Sprite.depth=2000;
    PACO.depth=1024;
    PACO.setVisible(false).setInteractive(false);
    Sprite.start(lan_stage2.vo_1,50);
    descript_count=2;
    descript_limit=13;
    //返回
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.depth=1024;
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
    },this);
    //轉場動畫
    start_transition(this);
    time_count_down(timer);
    // var content = `Phaser is a fast, free, and fun open source HTML5 game framework that offers WebGL and Canvas rendering across desktop and mobile web browsers. Games can be compiled to iOS, Android and native apps by using 3rd party tools. You can use JavaScript or TypeScript for development.`;
    // createTextBox(this, width*0.15, height*0.75, {
    //     wrapWidth: width*0.5,
    //     fixedWidth: width*0.55,
    //     fixedHeight: height*0.15,
    // },'green').start(content, 50);
}
var animate_f=0;
var animate_tick=5;
var s5_run_speed=400;
function update_stage5_take (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    // console.log(this.cameras.main.scrollX,this.cameras.main.scrollY);
    if(spot!=undefined){
        spot.setVelocityX(0);
        spot.setVelocityY(0);
    }
    
    updateTalkbox(lan_stage2);
    if(stop==0 && player.stop==0){
        direct.x=player.x+point_x-width/2;
        direct.y=player.y+point_y-height/2;
        if (cursors.up.isDown){
            p_facing=4;
            spot.setVelocityY(-s5_run_speed);
            if((animate_f/animate_tick)%4==0){
                player.flipX = 0;
                player.anims.play('moveh_1',true);
            }else if((animate_f/animate_tick)%4==1){
                player.anims.play('back',true);
            }else if((animate_f/animate_tick)%4==2){
                player.flipX = -1;
                player.anims.play('moveh_1',true);
            }else if((animate_f/animate_tick)%4==3){
                player.flipX = 0;
                player.anims.play('back',true);
            }
        }else if (cursors.down.isDown){
            p_facing=2;
            spot.setVelocityY(s5_run_speed);
            if((animate_f/animate_tick)%4==0){
                player.flipX = 0;
                player.anims.play('moveh_2',true);
            }else if((animate_f/animate_tick)%4==1){
                player.anims.play('face',true);
            }else if((animate_f/animate_tick)%4==2){
                player.flipX = -1;
                player.anims.play('moveh_2',true);
            }else if((animate_f/animate_tick)%4==3){
                player.flipX = 0;
                player.anims.play('face',true);
            }
        }else if (cursors.left.isDown){
            p_facing=3;
            spot.setVelocityX(-s5_run_speed);
            player.flipX = 0;
            if((animate_f/animate_tick)%4==0){
                if(player.pick!=null)
                    player.anims.play('pick_1',true);
                else
                    player.anims.play('movew_1',true);
            }else if((animate_f/animate_tick)%4==1){
                if(player.pick!=null)
                    player.anims.play('pick_0',true);
                else
                    player.anims.play('left',true);
            }else if((animate_f/animate_tick)%4==2){
                if(player.pick!=null)
                    player.anims.play('pick_2',true);
                else
                    player.anims.play('movew_2',true);
            }else if((animate_f/animate_tick)%4==3){
                if(player.pick!=null)
                    player.anims.play('pick_0',true);
                else
                    player.anims.play('left',true);
            }
        }else if (cursors.right.isDown){
            p_facing=1;
            spot.setVelocityX(s5_run_speed);
            player.flipX = -1;
            if((animate_f/animate_tick)%4==0){
                if(player.pick!=null)
                    player.anims.play('pick_1',true);
                else
                    player.anims.play('movew_1',true);
            }else if((animate_f/animate_tick)%4==1){
                if(player.pick!=null)
                    player.anims.play('pick_0',true);
                else
                    player.anims.play('left',true);
            }else if((animate_f/animate_tick)%4==2){
                if(player.pick!=null)
                    player.anims.play('pick_2',true);
                else
                    player.anims.play('movew_2',true);
            }else if((animate_f/animate_tick)%4==3){
                if(player.pick!=null)
                    player.anims.play('pick_0',true);
                else
                    player.anims.play('left',true);
            }
        }else{
            switch(direction){
                case 1://右
                    spot.setVelocityX(s5_run_speed);
                    player.flipX = -1;
                    if((animate_f/animate_tick)%4==0){
                        player.anims.play('movew_1',true);
                    }else if((animate_f/animate_tick)%4==1){
                        if(player.pick!=null)
                            player.anims.play('pick_0',true);
                        else
                            player.anims.play('left',true);
                    }else if((animate_f/animate_tick)%4==2){
                        player.anims.play('movew_2',true);
                    }else if((animate_f/animate_tick)%4==3){
                        if(player.pick!=null)
                            player.anims.play('pick_0',true);
                        else
                            player.anims.play('left',true);
                    }
                    break;
                case 2://下
                    spot.setVelocityY(s5_run_speed);
                    if((animate_f/animate_tick)%4==0){
                        player.flipX = 0;
                        player.anims.play('moveh_2',true);
                    }else if((animate_f/animate_tick)%4==1){
                        player.anims.play('face',true);
                    }else if((animate_f/animate_tick)%4==2){
                        player.flipX = -1;
                        player.anims.play('moveh_2',true);
                    }else if((animate_f/animate_tick)%4==3){
                        player.flipX = 0;
                        player.anims.play('face',true);
                    }
                    break;
                case 3://左
                    spot.setVelocityX(-s5_run_speed);
                    player.flipX = 0;
                    if((animate_f/animate_tick)%4==0){
                        player.anims.play('movew_1',true);
                    }else if((animate_f/animate_tick)%4==1){
                        if(player.pick!=null)
                            player.anims.play('pick_0',true);
                        else
                            player.anims.play('left',true);
                    }else if((animate_f/animate_tick)%4==2){
                        player.anims.play('movew_2',true);
                    }else if((animate_f/animate_tick)%4==3){
                        if(player.pick!=null)
                            player.anims.play('pick_0',true);
                        else
                            player.anims.play('left',true);
                    }
                    break;
                case 4://上
                    spot.setVelocityY(-s5_run_speed);
                    if((animate_f/animate_tick)%4==0){
                        player.flipX = 0;
                        player.anims.play('moveh_1',true);
                    }else if((animate_f/animate_tick)%4==1){
                        player.anims.play('back',true);
                    }else if((animate_f/animate_tick)%4==2){
                        player.flipX = -1;
                        player.anims.play('moveh_1',true);
                    }else if((animate_f/animate_tick)%4==3){
                        player.flipX = 0;
                        player.anims.play('back',true);
                    }
                    break;
                default:
                    if(p_facing==4){
                        player.flipX = 0;
                        player.anims.play('back',true);
                    }else if(p_facing==3){
                        player.flipX = 0;
                        if(player.pick!=null)
                            player.anims.play('pick_0',true);
                        else
                            player.anims.play('left',true);
                    }else if(p_facing==2){
                        player.flipX = 0;
                        player.anims.play('face',true);
                    }else if(p_facing==1){
                        player.flipX = -1;
                        if(player.pick!=null)
                            player.anims.play('pick_0',true);
                        else
                            player.anims.play('left',true);
                    }animate_f=-1;
            }
        }
        
    }
    animate_f++;
    if(animate_f>10000000)animate_f=0;
    player.x=spot.x;
    player.y=spot.y;
    spot_touch.x=spot.x;
    spot_touch.y=spot.y;
    // i*height*0.12+height*0.22  0.1*height
    player.depth=6+Math.floor((player.y-height*0.16)/(height*0.12))*2;
    if(player.pick!=null){
        switch(p_facing){
            case 1://右
                player.pick.x=player.x+width*0.02;
                player.pick.y=player.y-width*0.03;
                // player.pick.depth=player.depth-0.5;
                player.pick.depth=100;
                if(player.pick.type=="pipette"){
                    player.pick.setAngle(0);
                    player.pick.setDisplaySize(width*0.01,width*0.04);
                }
                break;
            case 2://下
                player.pick.x=player.x;
                player.pick.y=player.y-width*0.03;
                // player.pick.depth=player.depth+0.5;
                player.pick.depth=100;
                if(player.pick.type=="pipette"){
                    player.pick.setAngle(45);
                    player.pick.setDisplaySize(width*0.01,width*0.04);
                }
                break;
            case 3://左
                player.pick.x=player.x-width*0.02;
                player.pick.y=player.y-width*0.03;
                // player.pick.depth=player.depth-0.5;
                player.pick.depth=100;
                if(player.pick.type=="pipette"){
                    player.pick.setAngle(0);
                    player.pick.setDisplaySize(width*0.01,width*0.04);
                }
                break;
            case 4://上
                player.pick.x=player.x;
                player.pick.y=player.y-width*0.05;
                player.pick.depth=player.depth-0.5;
                if(player.pick.type=="pipette"){
                    player.pick.y=player.y-width*0.03;
                    player.pick.setAngle(-45);
                    player.pick.setDisplaySize(width*0.01,width*0.04);
                }
                break;
        }
        
    }
    // .setTint('0xff0000');
    // .clearTint('0xff0000');
}

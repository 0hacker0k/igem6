var desk_what = [['TAE','agarose','beaker','beaker','microwave','trashcan','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['marker','sample','','pipette','','','microwave',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['','run_gel','','','','','mod','']];
var things = desk_what;
//桌子 7X8
var desk_pos = [
                [1,1,1,1,1,1,0,0],
                [0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0],
                [1,1,1,1,0,0,1,0],
                [0,0,0,1,0,0,0,0],
                [0,0,0,0,0,0,0,0],
                [1,1,0,0,0,0,1,1]];
// var desk_pick = [
//                 [0,0,0,0,0,0,0,0],
//                 [0,0,0,0,0,0,0,0],
//                 [0,0,0,0,0,0,0,0],
//                 [0,0,0,0,0,0,0,0],
//                 [0,0,0,0,0,0,0,0],
//                 [0,0,0,0,0,0,0,0],
//                 [0,0,0,0,0,0,0,0],];
                
var picking;//人物拿取的物件
var touching;
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
    
    this.load.image('desk', 'img/stage5/desk.png');
    
    this.load.image('background', 'img/stage5/background.jpg');
    this.load.image('direct', 'img/main/director.png');
    // this.load.image('marker', 'img/stage5/marker.png');
    // this.load.image('sample', 'img/stage5/sample.png');
    // this.load.image('pipette', 'img/stage5/pipette.png');
    for(var i=0;i<7;i++){
        for(var j=0;j<8;j++){
            if(desk_what[i][j]!='' && desk_what[i][j]!="beaker"){
                this.load.image(desk_what[i][j], 'img/stage5/'+desk_what[i][j]+'.png');
            }
        }
    }
    // for(var i=0;i<7;i++){
    //     for(var j=0;j<8;j++){
    //         if(desk_what[i][j]!=''){
    //             this.load.image(desk_what[i][j],'img/stage5/temp.png');
    //         }
            
    //     }
    // }
    this.load.image("alert",'img/stage5/temp.png');
    this.load.image("qte_pointer",'img/stage5/qte_bar_pointer.png');
    this.load.image("qte_half",'img/stage5/qte_bar_half.png');
    this.load.image("qte_perfect",'img/stage5/qte_bar_perfect.png');
    this.load.image("qte_bar",'img/stage5/qte_bar.png');
    // this.load.image("gel",'img/stage5/gel.png');
    //remind: change gel photo
    this.load.spritesheet('player',
        'img/main/human3.png',
        { frameWidth: 480, frameHeight: 1028 }
    );
    this.load.spritesheet('beaker',
        'img/stage5/beaker.png',
        { frameWidth: 780.8, frameHeight: 1022 }
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

var desk = new Array();
var player;
var keySpace;
var islap=0;
var ispick=0;
var picking;
var spot,spot_touch;
var trashcan;
var p_facing=2;

function create_stage5_take (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    var deskGroup = this.physics.add.staticGroup();
    var cant_move_item = this.physics.add.staticGroup();
    //--------------------場景設定--------------------
    //背景
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);

    //人物、camera
    player = this.physics.add.sprite(width*0.05, height*0.3, PLAYER_KEY);//this.centerX
    player.body.fixedRotation = true;
    player.setDisplaySize(player.width/10,player.height/10).setOrigin(0.5,0.9).refreshBody();
    this.physics.world.bounds.width=width;
    this.physics.world.bounds.height=height;
    player.depth = 5;
    player.pick=null;
    player.stop=0;
    spot=this.physics.add.image(player.x, player.y, "green", this).setDisplaySize(width/35,width/35).refreshBody();
    spot.alpha=0;
    spot_touch=this.physics.add.image(player.x, player.y, "green", this).setDisplaySize(width/25,width/25).refreshBody();
    spot_touch.alpha=0;
    spot_touch.player=player;
    spot.setCollideWorldBounds(true);
    for(var i=0;i<7;i++){   //建立桌子
        desk[i] = new Array();
        for(var j=0;j<8;j++){
            if(desk_pos[i][j]){
                desk[i][j] = deskGroup.create((1+j)*width*0.1+width*0.05,(1+i)*height*0.12+height*0.05,'desk').setDisplaySize(width*0.1,height*0.12);
                desk[i][j].setBodySize(width*0.1,height*0.12,true).refreshBody();   
                desk[i][j].i=i;
                desk[i][j].j=j;
            }
            
        }
    }
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
    }
    {//beaker animation
        this.anims.create({
            key: 'beaker_TT',
            frames: this.anims.generateFrameNumbers("beaker", { start: 4, end: 4 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({
            key: 'beaker_AA',
            frames: this.anims.generateFrameNumbers("beaker", { start: 5, end: 5 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({
            key: 'beaker_TA',
            frames: this.anims.generateFrameNumbers("beaker", { start: 3, end: 3 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({
            key: 'beaker_T',
            frames: this.anims.generateFrameNumbers("beaker", { start: 1, end: 1 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({
            key: 'beaker_A',
            frames: this.anims.generateFrameNumbers("beaker", { start: 2, end: 2 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({
            key: 'beaker',
            frames: this.anims.generateFrameNumbers("beaker", { start: 0, end: 0 }),
            frameRate: 5,
            repeat: -1
        });
    }
    //碰撞、放器材
    var delta_rect = height*0.5;
    keySpace = this.input.keyboard.addKey(Phaser.Input.Keyboard.KeyCodes.SPACE);
    
    for(var i=0;i<7;i++){
        for(var j=0;j<8;j++){
            if(desk_what[i][j]!=''){//物件初始位置
                desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                if(desk_what[i][j]=="trashcan"){
                    trashcan = desk[i][j].item;
                    desk[i][j].disableBody(false,true);
                }else if(desk_what[i][j]=="beaker"){
                    beaker_zero(desk[i][j].item);
                }else if(desk_what[i][j]=="microwave"){
                    desk[i][j].item.item=null;
                    desk[i][j].item.time=-8;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y-width*0.05, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    desk[i][j].item.alert.alpha=0;
                }else if(desk_what[i][j]=="mod"){
                    desk[i][j].item.item=null;
                    desk[i][j].item.time=-8;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y-width*0.05, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    desk[i][j].item.alert.alpha=0;
                }else if(desk_what[i][j]=="pipette"){
                    desk[i][j].item.take="";
                    desk[i][j].item.score=0;
                    desk[i][j].item.setDisplaySize(width*0.015,width*0.06).refreshBody();
                    desk[i][j].item.setAngle(45);
                }else if(desk_what[i][j]=="run_gel"){
                    desk[i][j].item.item=null;
                    desk[i][j].item.has_TAE=0;
                    desk[i][j].item.TAE_concentration=0;
                    desk[i][j].item.alert=cant_move_item.create(desk[i][j].item.x, desk[i][j].item.y+width*0.02, "alert").setDisplaySize(width*0.03,width*0.03).setOrigin(0.5,0.5);
                    // desk[i][j].item.alert.alpha=0;
                    desk[i][j].item.alert.setTint(0x000000);
                }
            }
        }
    }
    this.physics.add.overlap(spot_touch, deskGroup, touch_table, null, this);
    this.physics.add.collider(spot, deskGroup, null, null, this);
    this.physics.add.overlap(spot_touch, trashcan, trashing, null, this);
    this.physics.add.collider(spot, trashcan, null, null, this);
    
    function createObject(x,y,what,where){
        var Object;
        if(what=="beaker"){
            Object = where.physics.add.sprite(x, y, what).setDisplaySize(width*0.1/2,height*0.17/2);
            Object.setInteractive().setBodySize(Object.width,Object.height);
        }else if(what=="trashcan"){
            Object = cant_move_item.create(x, y, what).setDisplaySize(width*0.1/2,height*0.17/2).refreshBody();
        }else{
            Object = where.physics.add.image(x, y, what).setDisplaySize(width*0.1/2,height*0.17/2);
            Object.setInteractive().setBodySize(Object.width,Object.height);
        }
        Object.type=what;
        return Object;
    }
    var action_record=0;
    function touch_table(spot_touch, desk_entity){
        i=desk_entity.i;
        j=desk_entity.j;
        if(keySpace.isDown){
            if(action_record==0){
                action_record=1;
                action_in_thing(spot_touch.player, desk_entity);
            }
        }else{
            action_record=0;
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
                    pipette_spit(p, p.pick, desk_entity.item);
                }else if(desk_entity.item.type=="beaker" || desk_entity.item.type=="pipette" || desk_entity.item.type=="gel"){
                    swap_item(p, desk_entity);
                }else if((desk_entity.item.type=="run_gel") && p.pick.type=="gel"){
                    run_gel_in(p, desk_entity.item);
                }else if((desk_entity.item.type=="run_gel") && p.pick.type=="beaker"){
                    tank_change_TAE(p, desk_entity.item);
                }
            }else{//player has nothing
                if(desk_entity.item.type=="beaker" || desk_entity.item.type=="pipette" || desk_entity.item.type=="gel"){
                    pick_thing(p, desk_entity.item, desk_entity);
                }else if(desk_entity.item.type=="microwave"){
                    microwave_out(p, desk_entity.item);
                }else if(desk_entity.item.type=="mod"){
                    mod_out(p, desk_entity.item);
                }else if(desk_entity.item.type=="run_gel"){
                    run_gel_out(p, desk_entity.item);
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
        if(beaker.c<2){
            beaker.TAE+=1;
            beaker.c+=1;
            change_skin_beaker(beaker);
        }
    }
    function take_agarose(beaker){
        if(beaker.c<2){
            beaker.agar+=1;
            beaker.c+=1;
            change_skin_beaker(beaker);
        }
    }
    function change_skin_beaker(beaker){
        if(beaker.c==2){
            if(beaker.TAE==1){//beaker.agar should be 1 too.
                beaker.anims.play('beaker_TA',true);
            }if(beaker.TAE==2){//beaker.agar should be 0.
                beaker.anims.play('beaker_TT',true);
            }if(beaker.TAE==0){//beaker.agar should be 2.
                beaker.anims.play('beaker_AA',true);
            }if(beaker.TAE==-1){//beaker.TAE can't use anymore.
                // beaker.anims.play('beaker_AA',true);
                //remind: change skin
                beaker.setTint(0x666666);
            }
        }else if(beaker.c==1){
            if(beaker.TAE==1){//beaker.agar should be 0.
                beaker.anims.play('beaker_T',true);
            }if(beaker.TAE==0){//beaker.agar should be 1.
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
            microwave.time=5;
            setTimeout(function(){
                microwave_timeout(microwave);
            },1000);
        }
    }
    function microwave_out(a_player, microwave){
        if(microwave.time<=0 && microwave.item!=""){
            a_player.pick=microwave.item;
            microwave.item=null;
            a_player.pick.alpha=1;
            a_player.pick.score+=(microwave.time>-4)?100:100-(microwave.time+3)*20;
            microwave.time=-8;
            microwave.alert.alpha=0;
        }
    }
    function microwave_timeout(microwave){
        microwave.time-=1;
        if(microwave.time==0){
            if(microwave.item.c==2 && microwave.item.TAE==1 && microwave.item.agar==1){
                microwave.item.ok=1;
                microwave.item.anims.play("beaker_TT");
            }
            microwave.alert.setTint(0xffffff);
            microwave.alert.alpha=1;
            //remind: add microwave.item.anims.play("beaker_success");
        }else if(microwave.time<=-4 && microwave.time>-8){
            microwave.alert.setTint(0xffffff+(microwave.time+3)*0x002222);
        }else if(microwave.time==-8){
            microwave.item.ok=0;
            microwave.alert.setTint(0x000000);
            if(microwave.item.c==2 && microwave.item.TAE==1 && microwave.item.agar==1){
                microwave.item.anims.play("beaker_AA");
            }
            //remind: add microwave.item.anims.play("beaker_fail");
        }
        if(microwave.time>-8){
            setTimeout(function(){
                microwave_timeout(microwave);
            },1000);
        }
    }
    function mod_in(a_player, beaker, mod){
        if(mod.item==null){
            if(beaker.ok==1){
                mod.item=cant_move_item.create(mod.x, mod.y, "green").setDisplaySize(width*0.1/2,height*0.17/2).refreshBody();
                mod.item.score=beaker.score;
                mod.item.alpha=0;
                mod.item.ok=0;
                mod.item.onuse=0;
                mod.item.run_time=0;
                mod.item.type="gel";
                mod.item.quality=4000;
                mod.item.sample=0;
                mod.item.marker=0;
                mod.item.qte_bar=cant_move_item.create(mod.x, mod.y, "qte_bar").setDisplaySize(width*0.1,width*0.1/12).setOrigin(0,0.5).refreshBody();
                mod.item.qte_bar.alpha=0;
                // mod.item.qte_bar.setTint();
                mod.item.qte_pointer=cant_move_item.create(mod.x, mod.y, "qte_pointer").setDisplaySize(width*0.1/60,width*0.1/6).setOrigin(0,0.5).refreshBody();
                mod.item.qte_pointer.alpha=0;
                mod.item.qte_pointer.setTint(0x9999ff);
                mod.item.qte_half=cant_move_item.create(mod.x, mod.y, "qte_half").setDisplaySize(width*0.1*0.4,width*0.1/12).setOrigin(0,0.5).refreshBody();
                mod.item.qte_half.alpha=0;
                mod.item.qte_half.setTint(0xffffbb);
                mod.item.qte_perfect=cant_move_item.create(mod.x, mod.y, "qte_perfect").setDisplaySize(width*0.1*0.15,width*0.1/12).setOrigin(0,0.5).refreshBody();
                mod.item.qte_perfect.alpha=0;
                mod.item.qte_perfect.setTint(0xffcccc);
                mod.time=7;
                beaker_zero(beaker);
                setTimeout(function(){
                    mod_cooldown(mod);
                },1000);
                //remind: change gel photo
            }
        }
    }
    function mod_out(a_player, mod){
        if(mod.time<=0){
            a_player.pick=mod.item;
            mod.item=null;
            a_player.pick.alpha=1;
            mod.time=-8;
            mod.alert.alpha=0;
        }
    }
    function mod_cooldown(mod){
        mod.time-=1;
        if(mod.time==0){
            mod.item.ok=1;
            mod.alert.setTint(0xffffff);
            mod.alert.alpha=1;
        }else if(mod.time<=-4 && mod.time>-8){
            mod.alert.setTint(0xffffff+(mod.time+3)*0x002222);
        }else if(mod.time==-8){
            mod.item.ok=0;
            mod.alert.setTint(0x000000);
            //remind: change gel skin
            // mod.item.anims.play("");
        }
        if(mod.time>-8){
            setTimeout(function(){
                mod_cooldown(mod);
            },1000);
        }
    }
    function run_gel_in(p, tank){
        if(tank.item==null && p.pick.ok==1){
            tank.item=p.pick;
            p.pick=null;
            tank.item.x=tank.x;
            tank.item.y=tank.y;
            tank.item.alpha=0;
            tank.item.onuse=1;
            var qte_half=0.55*width*0.1;
            var qte_perfect=0.67*width*0.1;
            tank.item.qte_bar.depth=7;
            tank.item.qte_bar.x=tank.item.x-width*0.1/2;
            tank.item.qte_bar.y=tank.item.y-height*0.07;
            tank.item.qte_bar.alpha=1;
            tank.item.qte_half.depth=8;
            tank.item.qte_half.x=tank.item.qte_bar.x+qte_half;
            tank.item.qte_half.y=tank.item.y-height*0.07;
            tank.item.qte_half.alpha=1;
            tank.item.qte_perfect.depth=9;
            tank.item.qte_perfect.x=tank.item.qte_bar.x+qte_perfect;
            tank.item.qte_perfect.y=tank.item.y-height*0.07;
            tank.item.qte_perfect.alpha=1;
            tank.item.qte_pointer.depth=10;
            tank.item.qte_pointer.x=tank.item.qte_bar.x+width*0.1*tank.item.run_time*0.01;
            tank.item.qte_pointer.y=tank.item.y-height*0.07;
            tank.item.qte_pointer.alpha=1;
            setTimeout(function(){
                gel_run_time(tank, tank.item.qte_pointer.x);
            },100);
        }
    }
    function run_gel_out(p, tank){
        if(tank.item!=""){
            p.pick=tank.item;
            tank.item=null;
            p.pick.alpha=1;
            //remind: gel score should be add by gel.run_time when it commit.
            p.pick.qte_bar.alpha=0;
            p.pick.qte_half.alpha=0;
            p.pick.qte_perfect.alpha=0;
            p.pick.qte_pointer.alpha=0;
        }
    }
    function gel_run_time(tank, locate){
        if(tank.item==null)return ;
        if(locate>=tank.item.qte_bar.x+width*0.1){
            locate=tank.item.qte_bar.x+width*0.1;
        }
        if(tank.TAE_concentration>0){
            tank.TAE_concentration-=1;
        }
        tank.item.quality-=(1000-tank.TAE_concentration)/100;
        tank.item.run_time+=1;
        locate+=width*0.1*0.01;
        tank.item.qte_pointer.x=locate;
        tank.alert.setTint(0xffffff-Math.floor((1000-tank.TAE_concentration)/4)*(0x010101));
        setTimeout(function(){
            gel_run_time(tank, locate);
        },100);
    }
    function tank_change_TAE(p, tank){
        if(tank.has_TAE==0 && p.pick.TAE==2){
            tank.has_TAE=1;
            tank.TAE_concentration=1000;
            p.pick.c=0;
            p.pick.TAE=0;
            tank.alert.setTint(0xffffff-Math.floor((1000-tank.TAE_concentration)/4)*(0x010101));
            change_skin_beaker(p.pick);
        }else if(tank.has_TAE==1 && p.pick.c==0){
            tank.has_TAE=0;
            tank.TAE_concentration=0;
            p.pick.c=2;
            p.pick.TAE=-1;
            tank.alert.setTint(0xffffff-Math.floor((1000-tank.TAE_concentration)/4)*(0x010101));
            change_skin_beaker(p.pick);
        }
    }
    function trashing(spot_touch, trashcan){
        if(keySpace.isDown){
            var p=spot_touch.player;
            if(p.pick!=null){
                if(p.pick.type=="beaker"){
                    beaker_zero(p.pick);
                }else if(p.pick.type=="gel"){
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
                pipette.setTint(0xaaffaa);
                // pipette.anims.play("");
            }else if(sample.type=="marker"){
                pipette.setTint(0xffaaff);
                // pipette.anims.play("");
            }
            //remind: pipe skin
        }
    }
    function pipette_spit(p, pipette, gel){
        if(gel.onuse==0 && pipette.take!="" && gel.sample+gel.marker<2){
            gel.onuse=1;
            p.stop=1;
            var qte_half=Math.floor(Math.random()*36)/60*width*0.1;
            var qte_perfect=Math.floor(Math.random()*16)/60*width*0.1;
            gel.qte_bar.depth=7;
            gel.qte_bar.x=gel.x-width*0.1/2;
            gel.qte_bar.y=gel.y-height*0.07;
            gel.qte_bar.alpha=1;
            gel.qte_half.depth=8;
            gel.qte_half.x=gel.qte_bar.x+qte_half;
            gel.qte_half.y=gel.y-height*0.07;
            gel.qte_half.alpha=1;
            gel.qte_perfect.depth=9;
            gel.qte_perfect.x=gel.qte_half.x+qte_perfect;
            gel.qte_perfect.y=gel.y-height*0.07;
            gel.qte_perfect.alpha=1;
            gel.qte_pointer.depth=10;
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
            if(gel.qte_pointer.x>=gel.qte_half.x && gel.qte_pointer.x<=gel.qte_half.x+width*0.1*0.4){
                gel.score+=50;
            }
            if(gel.qte_pointer.x>=gel.qte_perfect.x && gel.qte_pointer.x<=gel.qte_perfect.x+width*0.1*0.15){
                gel.score+=50;
            }
            if(p.pick.take=="sample"){
                gel.sample+=1;
            }else if(p.pick.take=="marker"){
                gel.marker+=1;
            }
            change_skin_gel(gel);
            //remind: change gel skin
            if(gel.marker+gel.sample==2){
                gel.ok=1;
            }
            setTimeout(function(){
                p.pick.take="";
                gel.onuse=0;
            },100);
            p.pick.clearTint();
            gel.qte_bar.alpha=0;
            gel.qte_half.alpha=0;
            gel.qte_perfect.alpha=0;
            gel.qte_pointer.alpha=0;
            console.log(gel.score);
            return ;
        }
        locate+=d*width*0.1*0.0125;
        gel.qte_pointer.x=locate;
        if(locate>=gel.qte_bar.x+width*0.1 || locate<=gel.qte_bar.x){
            d=-d;
        }
        setTimeout(function(){
            qte_pointer_move(p, gel, d, locate);
        },10);
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
        desk.item.y=desk.y;
    }
    function put_thing(p, to){
        to.item=p.pick;
        p.pick=null;
        to.item.x=to.x;
        to.item.y=to.y;
    }

    //燒杯

    //mixer(攪拌器)
    //TAE
    //(粉)阿嘎羅斯
    //微波爐
    //垃圾桶
    //電泳(TANK)
    //做膠模具
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
    stop=0;
    start_transition(this);
    //返回
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
    },this);
    //轉場動畫
    start_transition(this);

    // var content = `Phaser is a fast, free, and fun open source HTML5 game framework that offers WebGL and Canvas rendering across desktop and mobile web browsers. Games can be compiled to iOS, Android and native apps by using 3rd party tools. You can use JavaScript or TypeScript for development.`;
    // createTextBox(this, width*0.15, height*0.75, {
    //     wrapWidth: width*0.5,
    //     fixedWidth: width*0.55,
    //     fixedHeight: height*0.15,
    // },'green').start(content, 50);
}
var animate_f=0;
var animate_tick=5;
function update_stage5_take (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    // console.log(this.cameras.main.scrollX,this.cameras.main.scrollY);
    spot.setVelocityX(0);
    spot.setVelocityY(0);
    if(stop==0 && player.stop==0){
        direct.x=player.x+point_x-width/2;
        direct.y=player.y+point_y-height/2;
        if (cursors.up.isDown){
            p_facing=4;
            spot.setVelocityY(-300);
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
            spot.setVelocityY(300);
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
            spot.setVelocityX(-300);
            player.flipX = 0;
            if((animate_f/animate_tick)%4==0){
                player.anims.play('movew_1',true);
            }else if((animate_f/animate_tick)%4==1){
                player.anims.play('left',true);
            }else if((animate_f/animate_tick)%4==2){
                player.anims.play('movew_2',true);
            }else if((animate_f/animate_tick)%4==3){
                player.anims.play('left',true);
            }
        }else if (cursors.right.isDown){
            p_facing=1;
            spot.setVelocityX(300);
            player.flipX = -1;
            if((animate_f/animate_tick)%4==0){
                player.anims.play('movew_1',true);
            }else if((animate_f/animate_tick)%4==1){
                player.anims.play('left',true);
            }else if((animate_f/animate_tick)%4==2){
                player.anims.play('movew_2',true);
            }else if((animate_f/animate_tick)%4==3){
                player.anims.play('left',true);
            }
        }else{
            switch(direction){
                case 1://右
                    spot.setVelocityX(300);
                    player.flipX = -1;
                    if((animate_f/animate_tick)%4==0){
                        player.anims.play('movew_1',true);
                    }else if((animate_f/animate_tick)%4==1){
                        player.anims.play('left',true);
                    }else if((animate_f/animate_tick)%4==2){
                        player.anims.play('movew_2',true);
                    }else if((animate_f/animate_tick)%4==3){
                        player.anims.play('left',true);
                    }
                    break;
                case 2://下
                    spot.setVelocityY(300);
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
                    spot.setVelocityX(-300);
                    player.flipX = 0;
                    if((animate_f/animate_tick)%4==0){
                        player.anims.play('movew_1',true);
                    }else if((animate_f/animate_tick)%4==1){
                        player.anims.play('left',true);
                    }else if((animate_f/animate_tick)%4==2){
                        player.anims.play('movew_2',true);
                    }else if((animate_f/animate_tick)%4==3){
                        player.anims.play('left',true);
                    }
                    break;
                case 4://上
                    spot.setVelocityY(-300);
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
                        player.anims.play('left',true);
                    }else if(p_facing==2){
                        player.flipX = 0;
                        player.anims.play('face',true);
                    }else if(p_facing==1){
                        player.flipX = -1;
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
    if(player.pick!=null){
        switch(p_facing){
            case 1://右
                player.pick.x=player.x+width*0.02;
                player.pick.y=player.y-width*0.03;
                player.pick.depth=4;
                break;
            case 2://下
                player.pick.x=player.x;
                player.pick.y=player.y-width*0.03;
                player.pick.depth=6;
                break;
            case 3://左
                player.pick.x=player.x-width*0.02;
                player.pick.y=player.y-width*0.03;
                player.pick.depth=4;
                break;
            case 4://上
                player.pick.x=player.x;
                player.pick.y=player.y-width*0.05;
                player.pick.depth=4;
                break;
        }
        
    }
    // .setTint('0xff0000');
    // .clearTint('0xff0000');
}
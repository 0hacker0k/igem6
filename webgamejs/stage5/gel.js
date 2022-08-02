var desk_what = [['TAE','agarose','beaker','microwave','trashcan','','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['marker','sample','','pipette','','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['','run_gel','','','','','mod','']];
var things = desk_what;
//桌子 7X8
var desk_pos = [
                [1,1,1,1,1,0,0,0],
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
    this.load.image('marker', 'img/stage5/marker.png');
    this.load.image('sample', 'img/stage5/sample.png');
    this.load.image('pipette', 'img/stage5/pipette.png');
    for(var i=0;i<7;i++){
        for(var j=0;j<8;j++){
            if(desk_what[i][j]!=''){
                this.load.image(desk_what[i][j], 'img/stage5/'+desk_what[i][j]+'.png');
            }
        }
    }
    for(var i=0;i<7;i++){
        for(var j=0;j<8;j++){
            if(desk_what[i][j]!=''){
                this.load.image(desk_what[i][j],'img/stage5/temp.png');
            }
            
        }
    }
    this.load.spritesheet('player',
    'img/main/human3.png',
    { frameWidth: 480, frameHeight: 1028 }
    );//載入畫楨
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
    spot=this.physics.add.image(player.x, player.y, "green", this).setDisplaySize(width/35,width/35).refreshBody();
    spot.alpha=0;
    spot_touch=this.physics.add.image(player.x, player.y, "green", this).setDisplaySize(width/25,width/25).refreshBody();
    spot_touch.alpha=0;
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
    //碰撞、放器材
    var delta_rect = height*0.5;
    keySpace = this.input.keyboard.addKey(Phaser.Input.Keyboard.KeyCodes.SPACE);
    
    for(var i=0;i<7;i++){
        for(var j=0;j<8;j++){
            if(desk_what[i][j]!=''){//物件初始位置
                desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                desk[i][j].item_type=desk_what[i][j];
                if(desk_what[i][j]=="trashcan"){
                    trashcan = desk[i][j].item;
                    desk[i][j].disableBody(false,true);
                }
            }
        }
    }
    this.physics.add.overlap(spot_touch, deskGroup, touch_table, null, this);
    //this.physics.add.collider(player, desk, pick_thing, null, this);
    // this.physics.add.overlap(spot_touch,microwave,microwave_in,null,this);
    this.physics.add.collider(spot, deskGroup, null, null, this);
    this.physics.add.collider(spot, trashcan, null, null, this);
    
    function createObject(x,y,what,where){
        var Object = where.physics.add.image(x, y, what).setDisplaySize(width*0.1/2,height*0.17/2); 
        Object.setInteractive().setBodySize(Object.width,Object.height*1.8);
        return Object;
    }
    var action_record=0;
    function touch_table(spot_touch, desk_entity){
        i=desk_entity.i;
        j=desk_entity.j;
        if(keySpace.isDown){
            if(action_record==0){
                action_record=1;
                action_in_thing(desk_entity);
            }
        }else{
            action_record=0;
        }
        
    }
    function action_in_thing(desk_entity){
        if(desk_entity.item_type=="beaker" && player.pick==null){
            pick_thing(desk_entity.item, desk_entity);
        }else if(player.pick!=null && desk_entity.item_type=="beaker"){
            change_item(player.pick, desk_entity.item_type);
        }
    }
    function TAE_take(){

    }
    function agarose_take(){

    }
    function microwave_in(){

    }
    function trashing(){

    }
    function mixing(){

    }
    
    function pick_thing(pick_item, from){
        player.pick=pick_item;
        from.item=null;
    }
    function change_item(a,b){
        var temp=a;
        a=b;
        b=temp;
    }

    //燒杯

    //mixer(攪拌器)
    //TAE
    //(粉)阿嘎羅斯
    //微波爐
    //垃圾桶
    //電泳(TANK)
    //做膠模具

    
    //DEBUG
    // if(debug==1){
    //     this.add.image(width/2, height/2, 'D_center').setOrigin(0.5, 0.5).setDisplaySize(10,10);
    //     this.input.on('pointerdown', function (pointer) {
    //         console.log("x="+pointer.x);
    //         console.log("y="+pointer.y);
    //     },this);
    //     //x軸

    //     for(var i=1;i<=10;i++){
    //         this.add.image(width/2, i*height/10, 'green').setOrigin(0.5, 0.5).setDisplaySize(width,0.001*height);
    //     }
    //     //y軸
    //     for(var i=1;i<=10;i++){
    //         this.add.image(i*width/10, height/2, 'green').setOrigin(0.5, 0.5).setDisplaySize(0.001*width,height);
    //     }
    //     player.debugShowBody = 1;
    //     player.debugBodyColor = 0xff0000;
    // }
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
    if(stop==0){
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
                player.pick.y=player.y-width*0.05;
                player.pick.depth=4;
                break;
            case 2://下
                player.pick.x=player.x;
                player.pick.y=player.y-width*0.05;
                player.pick.depth=6;
                break;
            case 3://左
                player.pick.x=player.x-width*0.02;
                player.pick.y=player.y-width*0.05;
                player.pick.depth=4;
                break;
            case 4://上
                player.pick.x=player.x;
                player.pick.y=player.y-width*0.07;
                player.pick.depth=4;
                break;
        }
        
    }
    
}
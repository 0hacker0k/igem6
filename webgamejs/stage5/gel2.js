var desk_what = [['TAE','agarose','beaker','microwave','trashcan','','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['mixer','','','','','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['elec','run_gel','','','','','mod','']];
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

function preload_stage5_2_take(){
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
    this.load.image('mixer', 'img/stage5/mixer.png');
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
        'img/main/player.png',
        { frameWidth: 64, frameHeight: 64 }
    );//載入畫楨
    
    this.load.spritesheet('human',
    'img/main/human1.png',
    { frameWidth: 455, frameHeight: 1030 }
    );//載入畫楨
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
function create_stage5_2_take (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    var deskGroup = this.physics.add.staticGroup();
    //--------------------場景設定--------------------
    //背景
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);

    //人物、camera
    player = this.physics.add.sprite(width*0.05, height*0.3, PLAYER_KEY);//this.centerX
    player.body.fixedRotation = true;
    player.setDisplaySize(player.width/10,player.height/10).setOrigin(0.5,1).refreshBody();
    this.physics.world.bounds.width=width;
    this.physics.world.bounds.height=height;
    player.depth = 5;
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
        this.anims.create({//向左移動動畫
            key: 'left',
            frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 4, end: 5 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({//向右移動動畫
            key: 'right',
            frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 6, end: 7 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({//不動動畫
            key: 'face',
            frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 8, end: 8 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({//向上動畫
            key: 'up',
            frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 2, end: 3 }),
            frameRate: 5,
            repeat: -1
        });
        this.anims.create({//向下動畫
            key: 'down',
            frames: this.anims.generateFrameNumbers(PLAYER_KEY, { start: 0, end: 1 }),
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
                switch(desk_what[i][j]){
                    case 'TAE':
                        desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                        desk[i][j].item_type=desk_what[i][j];
                        break;
                    case 'agarose':
                        desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                        desk[i][j].item_type=desk_what[i][j];
                        break;
                    case 'beaker':
                        desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                        desk[i][j].item_type=desk_what[i][j];
                        break;
                    case 'microwave':
                        desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                        desk[i][j].item_type=desk_what[i][j];
                        break;
                    case 'trashcan':
                        desk[i][j].item = this.physics.add.image(desk[i][j].x, desk[i][j].y, desk_what[i][j]).setDisplaySize(width*0.1/2,height*0.17/2);
                        desk[i][j].item_type=desk_what[i][j];
                        desk[i][j].disableBody(true,true);
                        break;
                    case 'mixer':
                        desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                        desk[i][j].item_type=desk_what[i][j];
                        break;
                    default:
                        desk[i][j].item = createObject(desk[i][j].x, desk[i][j].y, desk_what[i][j], this);
                        desk[i][j].item_type=desk_what[i][j];
                    }
            
                
                
                
            }
        }
    }
    this.physics.add.overlap(spot_touch, deskGroup, touch_table, null, this);
    //this.physics.add.collider(player, desk, pick_thing, null, this);
    this.physics.add.overlap(spot_touch,microwave,microwave_in,null,this);
    this.physics.add.collider(spot, deskGroup, null, null, this);
    
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
        console.log(desk_entity.item_type);
        if(desk_entity.item_type=="beaker"){
            pick_thing(player, desk_entity.item);
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
    
    function pick_thing(player, what){
        islap = 1;
        if(picking==undefined){
            picking = what;
            
        }
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
            }else if(-temp_x > Math.abs(temp_y)){
                direction=3
            }else if(temp_y > Math.abs(temp_x)){
                direction=2;
            }else if(-temp_y > Math.abs(temp_x)){
                direction=4;
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
function update_stage5_2_take (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    // console.log(this.cameras.main.scrollX,this.cameras.main.scrollY);
    spot.setVelocityX(0);
    spot.setVelocityY(0);
    if(stop==0){
        direct.x=player.x+point_x-width/2;
        direct.y=player.y+point_y-height/2;
        switch(direction){
            case 1://右
                spot.setVelocityX(300);
                player.anims.play('right',true);
                break;
            case 2://下
                spot.setVelocityY(300);
                player.anims.play('down',true);
                break;
            case 3://左
                spot.setVelocityX(-300);
                player.anims.play('left',true);
                break;
            case 4://上
                spot.setVelocityY(-300);
                player.anims.play('up',true);
                break;
        }
        if (cursors.up.isDown){
            spot.setVelocityY(-300);
            player.anims.play('up',true);
        }else if (cursors.down.isDown){
            spot.setVelocityY(300);
            player.anims.play('down',true);
        }else if (cursors.left.isDown){
            spot.setVelocityX(-300);
            player.anims.play('left',true);
        }else if (cursors.right.isDown){
            spot.setVelocityX(300);
            player.anims.play('right',true);
        }else{
            player.anims.play('face',true);
            
        }
    }
    player.x=spot.x;
    player.y=spot.y;
    spot_touch.x=spot.x;
    spot_touch.y=spot.y;
    if(picking!=undefined){
        picking.x=player.x;
        picking.y=player.y-width*0.05;
    }
    // var pick;
    // var leave = 0;

    // for(var i=0;i<7;i++){
    //     for(var j=0;j<8;j++){
    //         if(desk_pos[i][j]){
    //             desk[i][j].clearTint();
    //         }
    //     }
    // }
    
    // if(touching!=undefined){
    //     if(picking!=undefined&&cursors.space.isDown){
    //         picking.x = touching.x;
    //         picking.y = touching.y;
            
    //         picking=undefined;
            
    //         touching.setTint('0xff0000');
    //     }

    //     touching = undefined;
    // }

    // if(picking!=undefined){
    //     picking.x=player.x;
    //     picking.y=player.y;
    // }
    

    // if(islap){
    //     if(keySpace.isDown){
    //         console.log('pick!')
    //     }else{
    //         pick=0;
    //         islap=0;
    //     }
    // }


    // cursors = this.input.keyboard.createCursorKeys();
}
/*****************************/


COLOR_PRIMARY = 0x4e342e;
COLOR_LIGHT = 0x7b5e57;
COLOR_DARK = 0x260e04;

var content = `Phaser is a fast, free, and fun open source HTML5 game framework that offers WebGL and Canvas rendering across desktop and mobile web browsers. Games can be compiled to iOS, Android and native apps by using 3rd party tools. You can use JavaScript or TypeScript for development.`;
function preload_stage5_take(){
    //basic
    debug = 1;
    if(debug==1){
        this.load.image('D_center', 'img/main/debug_center.png');
        this.load.image('green', 'img/main/green.png');
    }
    this.load.image('back', 'img/main/back.png');
    load_talkbox(this);
    load_transition(this);

    //else
    this.load.image('desk', 'img/main/green.png');
    this.load.image('background', 'img/stage4/background.jpg');
    this.load.image('direct', 'img/main/director.png');
    this.load.spritesheet('player',
        'img/main/player.png',
        { frameWidth: 64, frameHeight: 64 }
    );//載入畫楨

    //music
    //this.load.audio('music',['aud/map/record.ogg','aud/map/record.mp3']);
}
var player;
function create_stage5_take (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    //背景
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    //桌子
    var desk_pos = [
                [1,1,1,1,1,0,0,0],
                [0,0,0,0,0,0,0,0],
                [0,0,0,0,0,0,0,0],
                [1,1,1,1,0,0,0,0],
                [0,0,0,1,0,0,0,0],
                [0,0,0,0,0,0,0,0],
                [1,1,0,0,0,0,1,1],];
    var desk_what = [['TAE','agarose','beaker','microwave','trashcan','','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['mixer','mixer','','','','','',''],
                    ['','','','','','','',''],
                    ['','','','','','','',''],
                    ['elec','run_gel','','','','','mod','']];
    var desk = new Array();
    for(var i=0;i<7;i++){
        desk[i] = new Array();
        for(var j=0;j<8;j++){
            desk[i][j] = this.physics.add.staticImage((1+j)*width*0.1,(1+i)*height*0.12,'desk').setOrigin(0).setDisplaySize(width*0.1,height*0.12);
            desk[i][j].setBodySize(width*0.1,height*0.12,true).refreshBody();
        }
    }
    //人物、camera
    player = this.physics.add.sprite(width/2, height/2, 'player');//this.centerX
    player.body.fixedRotation = true;
    player.setBodySize(player.width,player.height);
    var cam=this.cameras.main;
    cam.startFollow(player,0.1,0.1);//後面兩個值是相機追趕速度
    cam.setBounds(0, 0, width, height);
    this.physics.world.bounds.width=width;
    this.physics.world.bounds.height=height;
    cam.setZoom(1);
    player.setCollideWorldBounds(true);
    
    //碰撞、
    for(var i=0;i<7;i++){
        for(var j=0;j<8;j++){
            if(desk_pos[i][j]==1){
                desk_collider(this,i,j);
            }
            if(desk_what[i][j]!=''){
                this.add.image((1+j)*width*0.1+width*0.1/4,(1+i)*height*0.12+height*0.12/4,desk_what[i][j]).setOrigin(0).setDisplaySize(width*0.1/2,height*0.12/2);
            }
        }
    }
    function desk_collider(where,i,j){
        where.physics.add.collider(player,desk[i][j]);
        desk[i][j].setTint("0xff1234");
    }
    function pick_thing(what){

    }
    
    //燒杯
    //mixer
    //TAE
    //(粉)阿嘎羅斯
    //微波爐
    //垃圾桶
    //電泳
    //模具

    //人物動畫
    this.anims.create({//向左移動動畫
        key: 'left',
        frames: this.anims.generateFrameNumbers('player', { start: 1, end: 1 }),
        frameRate: 10,
        repeat: -1
    });
    this.anims.create({//向右移動動畫
        key: 'right',
        frames: this.anims.generateFrameNumbers('player', { start: 2, end: 2 }),
        frameRate: 10,
        repeat: -1
    });
    this.anims.create({//不動動畫
        key: 'face',
        frames: this.anims.generateFrameNumbers('player', { start: 0, end: 0 }),
        frameRate: 10,
        repeat: -1
    });
    //DEBUG
    if(debug==1){
        this.add.image(width/2, height/2, 'D_center').setOrigin(0.5, 0.5).setDisplaySize(10,10);
        this.input.on('pointerdown', function (pointer) {
            console.log("x="+pointer.x);
            console.log("y="+pointer.y);
        },this);
        //x軸

        for(var i=1;i<=10;i++){
            this.add.image(width/2, i*height/10, 'green').setOrigin(0.5, 0.5).setDisplaySize(width,0.001*height);
        }
        //y軸
        for(var i=1;i<=10;i++){
            this.add.image(i*width/10, height/2, 'green').setOrigin(0.5, 0.5).setDisplaySize(0.001*width,height);
        }

    }
    var x,y,status=0;
    direct=this.add.image(x+cam.scrollX, y+cam.scrollY, 'direct').setDisplaySize(0.2*width,0.2*width);
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
    
    //music
    // var music = this.sound.add('music');
    // music.play();

    start_transition(this);
    
    //Talk box
    // createTextBox(this, 100, 100, {
    //     wrapWidth: 500,
    // })
    // .start(content, 50);
    createTextBox(this, width*0.15, height*0.75, {
        wrapWidth: width*0.5,
        fixedWidth: width*0.55,
        fixedHeight: height*0.15,
    },'green')
    .start(content, 50);
    
}
function update_stage5_take (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    player.setVelocityX(0);
    player.setVelocityY(0);
    // console.log(this.cameras.main.scrollX,this.cameras.main.scrollY);
    if(stop==0){
        direct.x=player.x+point_x-width/2;
        direct.y=player.y+point_y-height/2;
        switch(direction){
            case 1://右
                player.setVelocityX(300);
                player.anims.play('right');
                break;
            case 2://下
                player.setVelocityY(300);
                player.anims.play('face');
                break;
            case 3://左
                player.setVelocityX(-300);
                player.anims.play('left');
                break;
            case 4://上
                player.setVelocityY(-300);
                player.anims.play('face');
                break;
        }
        if (cursors.up.isDown){
            player.setVelocityY(-300);
            player.anims.play('face');
        }else if (cursors.down.isDown){
            player.setVelocityY(300);
            player.anims.play('face');
        }
        if (cursors.left.isDown){
            player.setVelocityX(-300);
            player.anims.play('left');
        }else if (cursors.right.isDown){
            player.setVelocityX(300);
            player.anims.play('right');
        }
    }
    
    // cursors = this.input.keyboard.createCursorKeys();
}
/*****************************/

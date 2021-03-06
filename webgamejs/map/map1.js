function preload (){
    load_transition(this);
    this.load.image('background', 'img/main/background.png');//載入一般圖片
    this.load.image('stage1', 'img/main/green.png');//載入一般圖片
    this.load.image('direct', 'img/main/director.png');
    this.load.spritesheet('player',
        'img/main/player.png',
        { frameWidth: 64, frameHeight: 64 }
    );//載入畫楨
}
var player;
var cursors;
var direction=0;
var direct;
var point_x,point_y;
function create (){
    loading_transition(this,this.cameras.main.scrollX+(-0.3)*width,this.cameras.main.scrollY+(0.26)*height);
    //--------------------場景設定--------------------
    background=this.add.tileSprite(0, 0, width,height, 'background').setOrigin(0, 0).setDisplaySize(width*2,height*2);//setScale: { x: 1, y: 2, stepY: 0.1 }
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    //玩家進入關卡
    stage = this.physics.add.group();//動態群組
    stage.create(100, 600, 'stage1');
    stage.create(1500, 600, 'stage1');
    //--------------------玩家設定--------------------
    player = this.physics.add.sprite(800, 600, 'player');//this.centerX
    player.body.fixedRotation = true;
    var cam=this.cameras.main;
    cam.startFollow(player,0.1,0.1);//後面兩個值是相機追趕速度
    cam.setBounds(0, 0, 1600, 1200);
    this.physics.world.bounds.width=1600;
    this.physics.world.bounds.height=1200;
    cam.setZoom(1);
    // -----------------------文字-------------------------
    scoreText = this.add.text(400, 300, lan_text.hello, { fontSize: '32px', fill: '#000000' });
    // scoreText.setText('Game Over\nYour Score:' + score);
    //player.setBounce(0.2);//反彈
    player.setCollideWorldBounds(true);//邊界設置為遊戲框
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
    //碰撞
    this.physics.add.overlap(player, stage, enter, null, this);//碰撞設定
    //function
    status=0;
    direction=0;
    function enter(){//進入關卡
        // alert(player.x);
        // alert(player.y);
        if(stop==0 && player.x>=80 && player.x<=145 && player.y>=555 && player.y<=600){
            //轉場設定
            finish_transition(this,cam.scrollX+(0.8)*width,cam.scrollY+(0.0)*height);
            setTimeout(function(){
                load_page(stage_1_choose);
            },500);
            stop=1;
        }else if(stop==0 && player.x>=1455 && player.x<=1520 && player.y>=555 && player.y<=600){
            finish_transition(this,cam.scrollX+(0.8)*width,cam.scrollY+(0.0)*height);
            setTimeout(function(){
                load_page(stage_2_flop);
            },500);
            stop=1;
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
}

function update (){//與外界有關的互動
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
}
/*
function create() {
    this.add.tileSprite(0, 0, 1920, 1920, 'background');
    this.world.setBounds(0, 0, 1920, 1920);
    this.physics.startSystem(Phaser.Physics.P2JS);
    player = this.add.sprite(this.world.centerX, this.world.centerY, 'player');
    this.physics.p2.enable(player);
    player.body.fixedRotation = true;
    cursors = this.input.keyboard.createCursorKeys();
    this.camera.follow(player, Phaser.Camera.FOLLOW_LOCKON, 0.1, 0.1);//後面兩個值是相機追趕速度
}

*/
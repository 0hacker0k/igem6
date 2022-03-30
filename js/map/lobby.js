function preload (){
    this.load.image('background', 'img/main/background.png');//載入一般圖片
    this.load.image('stage1', 'img/main/green.png');//載入一般圖片
    this.load.image('direct', 'img/main/director.png');
    this.load.image('transition', 'img/main/transition.png');
    //this.load.image('player', 'img/main/green.png');
    this.load.spritesheet('player',
        'img/main/player.png',
        { frameWidth: 64, frameHeight: 64 }
    );//載入畫楨
}
var player;
var cursors;
var direction=0;
function create (){
    //--------------------場景設定--------------------
    background=this.add.tileSprite(0, 0, 1600, 1200, 'background').setOrigin(0, 0).setScale(2);//setScale: { x: 1, y: 2, stepY: 0.1 }
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    //玩家進入關卡
    //stage = this.physics.add.group();//動態群組
    stage = this.physics.add.sprite(100, 600, 'stage1');
    //--------------------玩家設定--------------------
    player = this.physics.add.sprite(800, 600, 'player');//this.centerX
    player.body.fixedRotation = true;
    this.cameras.main.startFollow(player,0.1,0.1);//後面兩個值是相機追趕速度
    this.cameras.main.setBounds(0, 0, 1600, 1200);
    this.physics.world.bounds.width=1600;
    this.physics.world.bounds.height=1200;
    this.cameras.main.setZoom(1);
    // -----------------------文字-------------------------
    scoreText = this.add.text(400, 300, text.hello, { fontSize: '32px', fill: '#000000' });
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
    var stop=0;
    function enter(){//進入關卡
        // alert(player.x);
        // alert(player.y);
        if(stop==0 && player.x>=80 && player.x<=145 && player.y>=555 && player.y<=600){
            //轉場設定
            transition = this.physics.add.sprite(800, 300, 'transition').setOrigin(0, 0).setScale(2.1,1);
            transition.depth = 1024;
            transition.setVelocityX(-2500);
            setTimeout(function(){
                load_stage_1();
            },500);
            stop=1;
            this.scene.resume('sceneA');
            this.scene.stop();
            //return ;
        }
    }
    var x,y,status=0;
    this.input.on('pointerdown', function (pointer) {
        x=pointer.x;
        y=pointer.y;
        status=1;
        // this.add.image(pointer.x, pointer.y, 'direct');
        // console.log(stage.x);
    }, this);
    this.input.on('pointermove', function (pointer) {
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
    }, this);
}

function update (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    player.setVelocityX(0);
    player.setVelocityY(0);
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
function preload (){
    this.load.image('background', 'img/main/background.png');//載入一般圖片
    this.load.image('stage1', 'img/main/green.png');//載入一般圖片
    //this.load.image('player', 'img/main/green.png');
    this.load.spritesheet('player',
        'img/main/player.png',
        { frameWidth: 64, frameHeight: 64 }
    );//載入畫楨
}
var player;
var cursors;
function create (){
    //--------------------場景設定--------------------
    this.add.tileSprite(0, 0, 1600, 1200, 'background').setOrigin(0, 0).setScale(2);//setScale: { x: 1, y: 2, stepY: 0.1 }
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    //玩家進入關卡
    stage = this.physics.add.group();//動態群組
    stage = this.physics.add.sprite(100, 600, 'stage1');
    //--------------------玩家設定--------------------
    player = this.physics.add.sprite(800, 600, 'player');//this.centerX
    player.body.fixedRotation = true;
    this.cameras.main.startFollow(player,0.1,0.1);//後面兩個值是相機追趕速度
    this.cameras.main.setBounds(0, 0, 1600, 1200);
    this.physics.world.bounds.width=1600;
    this.physics.world.bounds.height=1200;
    this.cameras.main.setZoom(1);
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
    function enter(){//進入關卡
        // alert(player.x);
        // alert(player.y);
        if(player.x>=80 && player.x<=145 && player.y>=555 && player.y<=600){
            load_stage_1();
        }
    }
}

function update (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    /*if (cursors.left.isDown){//向左
        player.setVelocityX(-160);
        player.setVelocityY(0);
        player.anims.play('left');
        check_location();
    }else if (cursors.right.isDown){//向右
        player.setVelocityX(160);
        player.setVelocityY(0);
        player.anims.play('right');
    }else if (cursors.up.isDown){//上
        player.setVelocityY(-160);
        player.setVelocityX(0);
        //player.anims.play('face');
    }else if (cursors.down.isDown){//下
        player.setVelocityY(160);
        player.setVelocityX(0);
        player.anims.play('face');
    }else{//不動
        player.setVelocityX(0);
        player.setVelocityY(0);
    }
    function check_location(){
        //if(player.x==)
        //alert(y);
    }*/
    player.setVelocityX(0);
    player.setVelocityY(0);
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
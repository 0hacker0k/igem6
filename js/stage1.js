function preload_stage_1(){
    this.load.image('background', 'img/main/background.png');//載入一般圖片
    this.load.image('stage1', 'img/main/green.png');//載入一般圖片
    //this.load.image('player', 'img/main/green.png');
    this.load.spritesheet('player',
        'img/main/player.png',
        { frameWidth: 64, frameHeight: 64 }
    );//載入畫楨
}

function create_stage_1 (){
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0);
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    //玩家進入關卡
    stage = this.physics.add.group();//動態群組
    stage = this.physics.add.sprite(50, 300, 'stage1');
    //--------------------玩家設定--------------------
    player = this.physics.add.sprite(400, 300, 'player');
    player.setBounce(0.2);//反彈
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
        if(player.x>=40 && player.x<=90 && player.y>=260 && player.y<=330){
            load();
        }
    }
}

function update_stage_1 (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    if (cursors.left.isDown){//向左
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
    }

}
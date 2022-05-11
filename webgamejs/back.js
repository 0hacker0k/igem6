function preload1 (){
    this.load.image('sky', 'assets/sky.png');//載入一般圖片
    this.load.image('ground', 'assets/platform.png');
    this.load.image('star', 'assets/star.png');
    this.load.image('bomb', 'assets/bomb.png');
    this.load.spritesheet('dude', 
        'assets/dude.png',
        { frameWidth: 32, frameHeight: 48 }
    );//載入畫楨
}

function create1 (){
    //--------------------場景設定--------------------
    this.add.image(400, 300, 'sky');
    //this.add.image(0, 0, 'sky').setOrigin(0, 0);
    //this.add.image(400, 300, 'star');//後者覆蓋前者
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    platforms.create(400, 568, 'ground').setScale(2).refreshBody();
    //setScale()縮放功能  refreshBody()向物理世界刷新這個物體
    platforms.create(600, 400, 'ground');
    platforms.create(50, 250, 'ground');
    platforms.create(750, 220, 'ground');
    //--------------------玩家設定--------------------
    player = this.physics.add.sprite(100, 450, 'dude');
    player.setBounce(0.2);//反彈
    player.setCollideWorldBounds(true);//邊界設置為遊戲框
    
    this.anims.create({//向左移動動畫
        key: 'left',
        frames: this.anims.generateFrameNumbers('dude', { start: 0, end: 3 }),
        frameRate: 10,
        repeat: -1
    });

    this.anims.create({//轉身動畫
        key: 'turn',
        frames: [ { key: 'dude', frame: 4 } ],
        frameRate: 20
    });

    this.anims.create({//向右移動動畫
        key: 'right',
        frames: this.anims.generateFrameNumbers('dude', { start: 5, end: 8 }),
        frameRate: 10,
        repeat: -1
    });
    this.physics.add.collider(player, platforms);//在物理世界中增加碰撞器(collider)以檢測兩樣物品間的碰撞並使其分離
    //--------------------星星設定--------------------
    stars = this.physics.add.group({//動態群組
        key: 'star',
        repeat: 11,//生成11+1個星星
        setXY: { x: 12, y: 0, stepX: 70 }//位置在 (12,0) (82,0) (152,0) ... (12+70n,0)...
    });

    stars.children.iterate(function (child) {
        child.setBounceY(Phaser.Math.FloatBetween(0.4, 0.8));
    }); 
    this.physics.add.collider(stars, platforms);//碰撞檢測
    this.physics.add.overlap(player, stars, collectStar, null, this);//重疊檢測(物體A,物體B,處發函式)
    function collectStar (player, star){
        star.disableBody(true, true);
        score += 10;//加分
        scoreText.setText('Score: ' + score);//刷新得分面板
        //叫出炸彈
        var x = (player.x < 400) ? Phaser.Math.Between(400, 800) : Phaser.Math.Between(0, 400);

        var bomb = bombs.create(x, 16, 'bomb').setScale(2);
        bomb.setBounce(1);
        bomb.setCollideWorldBounds(true);
        bomb.setVelocity(Phaser.Math.Between(-200, 200), 20);

        if(stars.countActive(true) === 0){//當沒有星星時，刷新星星
            stars.children.iterate(function (child) {
                child.enableBody(true, child.x, 0, true, true);
            });
        }
    }
    //--------------------計分面板設定--------------------
    scoreText = this.add.text(16, 16, 'Score: 0', { fontSize: '32px', fill: '#ffffff' });//新增文字(座標,預設文字,樣式)
    //--------------------炸彈設定--------------------
    bombs = this.physics.add.group();//動態群組
    this.physics.add.collider(bombs, platforms);//碰撞設定
    this.physics.add.collider(player, bombs, hitBomb, null, this);
    function hitBomb (player, bomb){
        this.physics.pause();//物理特性停止(世界暫停)
        player.setTint(0xff0000);
        player.anims.play('turn');
        gameOver = true;
        scoreText.setText('Game Over\nYour Score:' + score + text[0]);//text.hello
        scoreText.setX(150);
        scoreText.setY(260);
        scoreText.setFontSize(64);
        //scoreText.setCenterAlign();
        scoreText.setTint(0xff0000);
    }
}

function update1 (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    
    if (cursors.left.isDown){//向左
        if(gameOver==false){
            player.setVelocityX(-160);
            player.anims.play('left', true);
        }
    }
    else if (cursors.right.isDown){//向右
        if(gameOver==false){
            player.setVelocityX(160);
            player.anims.play('right', true);
        }
    }else{//不動
        player.setVelocityX(0);
        player.anims.play('turn');
    }
    if (cursors.up.isDown && player.body.touching.down){//如果按下跳躍而且人在地上
        player.setVelocityY(-330);
    }
    
}
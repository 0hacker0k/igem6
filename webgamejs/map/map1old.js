function preload (){
    load_transition(this);
    this.load.image('background', prefix+'/main/background.png');//載入一般圖片
    this.load.image('stage1', prefix+'/main/green.png');//載入一般圖片
    this.load.image('direct', prefix+'/main/director.png');
    this.load.spritesheet('player',
        prefix+'/main/human.png',
        { frameWidth: 496, frameHeight: 1118 }
    );//載入畫楨
}
var player;
var keySpace;
var spot,spot_touch;
var p_facing=2;
var stop=0;
var point_x,point_y;
var direction;
function create (){
    loading_transition(this,this.cameras.main.scrollX+(-0.3)*width,this.cameras.main.scrollY+(0.5)*height);
    //--------------------場景設定--------------------
    background=this.add.tileSprite(0, 0, 0,0, 'background').setOrigin(0, 0).setDisplaySize(width*2,height*2);//setScale: { x: 1, y: 2, stepY: 0.1 }
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    //玩家進入關卡
    stage = this.physics.add.group();//動態群組
    stage.create(100, 600, 'stage1');
    stage.create(1500, 600, 'stage1');
    //--------------------玩家設定--------------------
    player = this.physics.add.sprite(width*1, height*1, "player");//this.centerX
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
    var cam=this.cameras.main;
    cam.startFollow(spot,0.1,0.1);//後面兩個值是相機追趕速度
    cam.setBounds(0, 0, width*2, height*2);
    this.physics.world.bounds.width=width*2;
    this.physics.world.bounds.height=height*2;
    cam.setZoom(1);
    // -----------------------文字-------------------------
    scoreText = this.add.text(400, 300, lan_text.hello, { fontSize: '32px', fill: '#000000' });
    // scoreText.setText('Game Over\nYour Score:' + score);
    //player.setBounce(0.2);//反彈
    spot.setCollideWorldBounds(true);//邊界設置為遊戲框
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
    //碰撞
    this.physics.add.overlap(player, stage, enter, null, this);//碰撞設定
    //function
    status=0;
    direction=0;
    function enter(){//進入關卡
        if(stop==0 && spot.x>=80 && spot.x<=145 && spot.y>=555 && spot.y<=600){
            //轉場設定
            finish_transition(this,cam.scrollX+(0.8)*width,cam.scrollY+(0.0)*height);
            setTimeout(function(){
                load_page(stage_1_choose);
            },500);
            stop=1;
        }else if(stop==0 && spot.x>=1455 && spot.x<=1520 && spot.y>=555 && spot.y<=600){
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
}
var animate_f=0;
var animate_tick=5;
var s5_run_speed=400;
function update (){//與外界有關的互動
    cursors = this.input.keyboard.createCursorKeys();
    spot.setVelocityX(0);
    spot.setVelocityY(0);
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
}
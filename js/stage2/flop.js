function preload_stage2_flop(){
    this.load.image('background', 'img/stage2/background.png');//載入一般圖片
    load_transition(this);
    this.load.image('back', 'img/main/back.png');
    // this.load.image('card_back', 'img/stage2/card_back.jpg');
    // this.load.image('card_plasmid', 'img/stage2/card_back.jpg');
    // this.load.image('card_target_gene', 'img/stage2/card_target_gene.jpg');
    
    this.load.spritesheet('card',
        'img/stage2/card.jpg',
        { frameWidth: 361, frameHeight: 519 }
    );
}
function create_stage2_flop (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    {//畫禎設定
        this.anims.create({//back
            key: 'back',
            frames: this.anims.generateFrameNumbers('card', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//plasmid
            key: 'plasmid',
            frames: this.anims.generateFrameNumbers('card', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'target_gene',
            frames: this.anims.generateFrameNumbers('card', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
    }
    // 產生card
    // var card_group=this.physics.add.staticGroup();
    var card=[18];
    for(var i=0;i<3;i++){
        for(var j=0;j<6;j++){
            card[i*6+j]=this.add.button(width*0.05+0.15*width*j, height*0.19+0.25*height*i, 'card').setOrigin(0, 0).setInteractive().setDisplaySize(width*21*0.0065 ,height*40*0.0065);
        }
    }
    // card_group.on('pointerdown', function (){
    //     finish_transition(this,width,0);
    //     setTimeout(function(){
    //         load_page(map_1);
    //     },500);
    // },this);
    //back
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
    },this);
    //轉場動畫
    start_transition(this);
}

function update_stage2_flop (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

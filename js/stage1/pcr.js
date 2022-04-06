function preload_stage1_pcr(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    load_transition(this);
    this.load.spritesheet('gene',
        'img/stage1/small_ATCG.png',
        { frameWidth: 90, frameHeight: 90 }
    );
}
function create_stage1_pcr (){
    //轉場設定
    loading_transition(this,-1100,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0);
    {//畫禎設定
        this.anims.create({//A
            key: 'A',
            frames: this.anims.generateFrameNumbers('gene', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//T
            key: 'T',
            frames: this.anims.generateFrameNumbers('gene', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//C
            key: 'C',
            frames: this.anims.generateFrameNumbers('gene', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//G
            key: 'G',
            frames: this.anims.generateFrameNumbers('gene', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
    }
    //send_string是序列
    var frames = this.textures.get('gene').getFrameNames();
    var x = 100;
    var y = 100;
    
    var len = level+2;
    for (var i = 0; i < len; i++){
        var temp="";
        switch(send_string[i]){
            case 'A':
                temp="T";
                break;
            case 'T':
                temp="A";
                break;
            case 'C':
                temp="G";
                break;
            case 'G':
                temp="C";
                break;
        }
        var image = this.physics.add.sprite(x, y, 'gene').setInteractive();
        image.anims.play(temp);
        this.input.setDraggable(image);
        x += 84;
    }

    //  Grab everything under the pointer

    this.input.topOnly = false;

    this.input.on('drag', function (pointer, gameObject, dragX, dragY) {

        gameObject.x = dragX;
        gameObject.y = dragY;

    });

    //轉場動畫
    start_transition(this);
    
    
}

function update_stage1_pcr (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

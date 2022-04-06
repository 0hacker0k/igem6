function preload_stage1_choose(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    this.load.image('button', 'img/main/green.png');
    load_transition(this);
}
function create_stage1_choose (){
    //轉場設定
    loading_transition(this,-1100,0);
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0);
    button1 = this.physics.add.sprite(170, 50, 'button').setOrigin(0, 0).setInteractive().setScale(2,4);
    button2 = this.physics.add.sprite(270, 50, 'button').setOrigin(0, 0).setInteractive().setScale(2,4);
    button3 = this.physics.add.sprite(370, 50, 'button').setOrigin(0, 0).setInteractive().setScale(2,4);
    button1.on('pointerdown', function (){clickButton(1,this)},this);
    button2.on('pointerdown', function (){clickButton(2,this)},this);
    button3.on('pointerdown', function (){clickButton(3,this)},this);
    function clickButton(id,where){//輸入序列
        level=id;
        finish_transition(where,800,0);
        setTimeout(function(){
            load_page(stage_1_sequence);
        },500);
    }
    

    //轉場動畫
    start_transition(this);
    
    
}

function update_stage1_choose (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

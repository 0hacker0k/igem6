function preload_stage1_choose(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    this.load.image('gene1', 'img/stage1/1.png');
    this.load.image('gene2', 'img/stage1/2.png');
    this.load.image('gene3', 'img/stage1/3.png');
    this.load.image('DNA', 'img/stage1/DNA.png');
    this.load.image('back', 'img/main/back.png');
    load_transition(this);
}
function create_stage1_choose (){
    /*send_string="ATT";
    level=1;
    load_page(stage_1_pcr);*/
    //轉場設定
    loading_transition(this,-500*width/800,0);
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    this.add.image(width*0.2, height*0.1, 'DNA').setOrigin(0, 0).setDisplaySize(height*0.8,height*0.8);
    button=[]
    button[0] = this.physics.add.sprite((1080-318)/1080*height*0.8+width*0.2, height*0.1, 'gene1').setOrigin(0, 0).setInteractive().setDisplaySize(height/1080*318*0.8,height/1080*324*0.8);
    button[1] = this.physics.add.sprite(406/1080*height*0.8+width*0.2, 300/1080*height*0.8+height*0.1, 'gene2').setOrigin(0, 0).setInteractive().setDisplaySize(height/1080*376*0.8,height/1080*377*0.8);
    button[2] = this.physics.add.sprite(width*0.2, (1080-425)/1080*height*0.8+height*0.1, 'gene3').setOrigin(0, 0).setInteractive().setDisplaySize(height/1080*427*0.8,height/1080*425*0.8);
    button[0].on('pointerdown', function (){clickButton(1,this)},this);
    button[1].on('pointerdown', function (){clickButton(2,this)},this);
    button[2].on('pointerdown', function (){clickButton(3,this)},this);
    button[0].on('pointerover', function (){hover(1)},this);
    button[1].on('pointerover', function (){hover(2)},this);
    button[2].on('pointerover', function (){hover(3)},this);
    button[0].on('pointerout', function (){out(1)},this);
    button[1].on('pointerout', function (){out(2)},this);
    button[2].on('pointerout', function (){out(3)},this);
    button[0].alpha=0.1;
    button[1].alpha=0.1;
    button[2].alpha=0.1;
    function clickButton(id,where){//輸入序列
        if(id==1)
            level=1;
        else if(id==2)
            level=3;
        else if(id==3)
            level=2;
        finish_transition(where,width,0);
        setTimeout(function(){
            load_page(stage_1_sequence);
        },500);
    }
    function hover(id){//輸入序列
        button[id-1].alpha=1;
    }
    function out(id){//輸入序列
        button[id-1].alpha=0.1;
    }
    //back
    back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
    },this);
    //轉場動畫
    start_transition(this);
    
    
}

function update_stage1_choose (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

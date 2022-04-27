function preload_stage2_flop(){
    this.load.image('background', 'img/stage2/background.png');//載入一般圖片
    load_transition(this);
    this.load.image('back', 'img/main/back.png');
    for(var i=0;i<18;i++){
        var i_0=i.toString();
        var i_1=(i+1).toString();
        var locate;
        if(i+1<10){
            locate='0'+i_1;
        }else{
            locate=i_1;
        }
        this.load.image('end'+i_0, 'img/stage1/congratulations/congratulations_'+locate+'.png');
    }
    this.load.image('end', 'img/stage1/congratulations.jpg');
    this.load.spritesheet('gene',
        'img/stage1/pcr/ATCG.png',
        { frameWidth: 220, frameHeight: 462 }
    );
}
function create_stage2_flop (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    
    //轉場動畫
    start_transition(this);
}

function update_stage2_flop (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

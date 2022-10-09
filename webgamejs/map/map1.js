debug=1;
function preload (){
    load_transition(this);
    this.load.image('map', prefix+'/map/map.jpg');//載入一般圖片
    for(var i=1;i<=5;i++){
        this.load.image('stage'+i, prefix+'/map/npc'+i+'.png');//載入一般圖片
    }
    if(debug==1){
        this.load.image('D_center', prefix+'/main/debug-center.png');
        this.load.image('green', prefix+'/main/green.png');
    }
    load_talkbox(this);
}
var where = this;
function create (){
    loading_transition(this,-500*width/800,0);
    create_audio(this);
    //--------------------場景設定--------------------
    map=this.add.tileSprite(0, 0, 0,0, 'map').setOrigin(0, 0).setDisplaySize(width,height);
    //--------------------人頭設定--------------------
    var stage=[];
    stage[1]=this.physics.add.sprite(width*0.33,height*0.55,'stage1');
    stage[2]=this.physics.add.sprite(width*0.35,height*0.7,'stage2');
    stage[3]=this.physics.add.sprite(width*0.36,height*0.42,'stage3');
    stage[4]=this.physics.add.sprite(width*0.42,height*0.25,'stage4');
    stage[5]=this.physics.add.sprite(width*0.47,height*0.15,'stage5');
    for(var i=1;i<=5;i++){
        stage[i].setDisplaySize(height*0.1,height*0.1)
                .setInteractive();
        if(stage_complete[i-1]!=1) stage[i].setTint(0x4F4F4F);
    }
    // for(var i=1;i<=5;i++){
    //     stage[i].on('pointerover',function(){hover(i)},where);
    //     stage[i].on('pointerout',function(){out(i)},where);
    //     stage[i].on('pointerdown',function(){touch(i)},this);
    // }

    {//各種stage的按鈕
        stage[1].on('pointerover',function(){hover(1)},this);
        stage[1].on('pointerout',function(){out(1)},this);
        stage[1].on('pointerdown',function(){touch(1)},this);
        if(stage_complete[1]==1){
            stage[2].on('pointerover',function(){hover(2)},this);
            stage[2].on('pointerout',function(){out(2)},this);
            stage[2].on('pointerdown',function(){touch(2)},this);
        }
        if(stage_complete[2]==1){
            stage[3].on('pointerover',function(){hover(3)},this);
            stage[3].on('pointerout',function(){out(3)},this);
            stage[3].on('pointerdown',function(){touch(3)},this);
        }
        if(stage_complete[3]==1){
            stage[4].on('pointerover',function(){hover(4)},this);
            stage[4].on('pointerout',function(){out(4)},this);
            stage[4].on('pointerdown',function(){touch(4)},this);
        }
        if(stage_complete[4]==1){
            stage[5].on('pointerover',function(){hover(5)},this);
            stage[5].on('pointerout',function(){out(5)},this);
            stage[5].on('pointerdown',function(){touch(5)},this);
        }
    }

    function hover(id){
        stage[id].setTint(0x00ff00);
    }
    function out(id){
        stage[id].clearTint();
    }
    function touch(id){
        if(stop==0){//切換關卡
            stop=1;
            finish_transition(this,(0.8)*width,(0.0)*height);
            if(id==1){
                setTimeout(function(){
                    load_page(stage_1_story);
                },500);
            }
            if(id==2){
                setTimeout(function(){
                    load_page(stage_2_gel);
                },500);
            }
            if(id==3){
                setTimeout(function(){
                    load_page(stage_3_flop);
                },500);
            }
            if(id==4){
                setTimeout(function(){
                    load_page(stage_4_shoot);
                },500);
            }
            if(id==5){
                setTimeout(function(){
                    load_page(stage_5_take);
                },500);
            }
        }
    }
    
    //DEBUG
    if(debug==1){
        this.add.image(width/2, height/2, 'D_center').setOrigin(0.5, 0.5).setDisplaySize(10,10);
        this.input.on('pointerdown', function (pointer) {
            console.log("x="+pointer.x);
            console.log("y="+pointer.y);
        },this);
        //x軸

        for(var i=1;i<=10;i++){
            this.add.image(width/2, i*height/10, 'green').setOrigin(0.5, 0.5).setDisplaySize(width,0.001*height);
        }
        //y軸
        for(var i=1;i<=10;i++){
            this.add.image(i*width/10, height/2, 'green').setOrigin(0.5, 0.5).setDisplaySize(0.001*width,height);
        }

    }
    
    stop=0;
    start_transition(this);
}

function update (){//與外界有關的互動
    
}
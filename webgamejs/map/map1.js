debug=1;
function preload (){
    load_transition(this);
    this.load.image('map', 'img/map/map.jpg');//載入一般圖片
    for(var i=1;i<=5;i++){
        this.load.image('stage'+i, 'img/main/green.png');//載入一般圖片
    }
    if(debug==1){
        this.load.image('D_center', 'img/main/debug_center.png');
        this.load.image('green', 'img/main/green.png');
    }
    load_talkbox(this);
}

function create (){
    loading_transition(this,this.cameras.main.scrollX+(-0.3)*width,this.cameras.main.scrollY+(0.5)*height);
    //--------------------場景設定--------------------
    map=this.add.tileSprite(0, 0, 0,0, 'map').setOrigin(0, 0).setDisplaySize(width,height);
    //--------------------人頭設定--------------------
    var stage=[];
    stage[1]=this.physics.add.sprite(width*0.33,height*0.55,'stage1').setDisplaySize(height*0.1,height*0.1).setInteractive();
    stage[2]=this.physics.add.sprite(width*0.35,height*0.7,'stage2').setDisplaySize(height*0.1,height*0.1).setInteractive();
    stage[3]=this.physics.add.sprite(width*0.36,height*0.42,'stage3').setDisplaySize(height*0.1,height*0.1).setInteractive();
    stage[4]=this.physics.add.sprite(width*0.42,height*0.25,'stage4').setDisplaySize(height*0.1,height*0.1).setInteractive();
    stage[5]=this.physics.add.sprite(width*0.47,height*0.15,'stage5').setDisplaySize(height*0.1,height*0.1).setInteractive();
    stage[1].on('pointerover',function(){hover(1)},this);
    stage[1].on('pointerout',function(){out(1)},this);
    stage[2].on('pointerover',function(){hover(2)},this);
    stage[2].on('pointerout',function(){out(2)},this);
    stage[3].on('pointerover',function(){hover(3)},this);
    stage[3].on('pointerout',function(){out(3)},this);
    stage[4].on('pointerover',function(){hover(4)},this);
    stage[4].on('pointerout',function(){out(4)},this);
    stage[5].on('pointerover',function(){hover(5)},this);
    stage[5].on('pointerout',function(){out(5)},this);
    function hover(id){
        stage[id].setTint(0x00ff00);
    }
    function out(id){
        stage[id].clearTint();
    }
    // -----------------------文字-------------------------
    //scoreText = this.add.text(400, 300, lan_text.hello, { fontSize: '32px', fill: '#000000' });

    
    
    //function
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
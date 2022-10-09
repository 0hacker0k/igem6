function preload_opening (){
    debug=0;
    load_transition(this);
    this.load.image('webgame', prefix+'/map/webgame.jpg');
    this.load.image('start', prefix+'/map/start.png');
    this.load.image('volumebutton', prefix+'/map/volume.png');
    if(debug==1){
        this.load.image('D_center', prefix+'/main/debug-center.png');
        this.load.image('green', prefix+'/main/green.png');
    }
    load_talkbox(this);
}
var where = this;
function create_opening (){
    loading_transition(this,-500*width/800,0);
    var music = create_audio(this);
    //--------------------場景設定--------------------
    var webgame;
    webgame=this.physics.add.sprite(width/2,height/2,'webgame').setDisplaySize(width,height);
    var start;
    start=this.physics.add.sprite(width*0.35,height*0.8,"start").setDisplaySize(width*0.12,height*0.12).setInteractive();
    var volumebutton;
    volumebutton = this.physics.add.sprite(width*0.63,height*0.8,"volumebutton").setDisplaySize(width*0.12,height*0.12).setInteractive();
    start.on("pointerup",function(){
        stop=1;
        finish_transition(this,(0.8)*width,(0.0)*height);
        setTimeout(function(){
            load_page(stage_0_story);
        },500);
    },this);
    start.on("pointerover",function(){
        start.setDisplaySize(width*0.14,height*0.14);
    },this);
    start.on("pointerout",function(){
        start.setDisplaySize(width*0.12,height*0.12);
    },this);

    volumebutton.on("pointerup",function(){
        if(music.mute){
            music.setMute(false);
            audiovolume=1;
            //換圖
        }else{
            music.setMute(true);
            audiovolume=0;
            //換圖
        }
        
    },this);
    volumebutton.on("pointerover",function(){
        volumebutton.setDisplaySize(width*0.14,height*0.14);
    },this);
    volumebutton.on("pointerout",function(){
        volumebutton.setDisplaySize(width*0.12,height*0.12);
    },this);

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

function update_opening (){//與外界有關的互動
    
}
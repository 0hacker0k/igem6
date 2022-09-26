debug=1;
function preload_story0 (){
    load_transition(this);
    
    for(var i=1;i<=6;i++){
        this.load.image('slide'+i, 'img/slide/'+i+'.jpg');//載入一般圖片
    }
    if(debug==1){
        this.load.image('D_center', 'img/main/debug_center.png');
        this.load.image('green', 'img/main/green.png');
    }
    load_talkbox(this);

}

function create_story0 (){
    loading_transition(this,-500*width/800,0);
    //--------------------場景設定--------------------
    //幻燈片
    for(var i=1;i<=6;i++){
        slides[i]=this.add.image(0,0,'slide'+i).setOrigin(0).setDisplaySize(width,height).setVisible(false);
    }
    //對話框
    TextBox_x=width*0.15;
    TextBox_y=height*0.75;
    var config =
    {
        wrapWidth: width*0.5,
        fixedWidth: width*0.55,
        fixedHeight: height*0.15,
    };
    
    PACO=new createTextBox(this, TextBox_x, TextBox_y, config, 'PACO');
    Sprite=new createTextBox(this, TextBox_x, TextBox_y, config, 'Sprite');
    back=new createTextBox(this, TextBox_x, TextBox_y, config, 'back');
    //back.start(lan_story0.back_1,50);
    descript_count=1;
    descript_limit=27;
    this.input.on("pointerup",function(){
        if(stop==0){
            finish_transition((0.8)*width,(0.0)*height);
            setTimeout(function(){
                load_page(map_1);
            },500);
            stop=1;
        }
    },this)
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
    //stop=0;
    start_transition(this);
}

function update_story0 (){//與外界有關的互動
    if(descript_count<=descript_limit){
        updateTalkbox(lan_story0,slide_story0);
    }
    // else if(stop==0){
    //     finish_transition((0.8)*width,(0.0)*height);
    //     setTimeout(function(){
    //         load_page(stage_1_choose);
    //     },500);
    //     stop=1;
    // }
}
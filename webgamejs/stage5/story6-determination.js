
function preload_story6_determination (){
    con=
    {//直接調參數
        "img_num_start":42,
        "img_num_end":54,
        "npc_key":'npc5',
        "next_page":stage_6_story_awaken,
        "lan":lan_story6_determination,
        "slide":slide_story6_determination,
        'descript_count':1,
        'descript_limit':Object.keys(lan_story6_determination).length
    };
    debug=0;
    load_transition(this);
    console.log(con);
    for(var i=con.img_num_start;i<=con.img_num_end;i++){
        this.load.image('slide'+i, prefix+'/slide/'+i+'.jpg');//載入一般圖片
    }
    
    if(debug==1){
        this.load.image('D_center', prefix+'/main/debug-center.png');
        this.load.image('green', prefix+'/main/green.png');
    }
    load_talkbox(this);
    this.load.image(con.npc_key, prefix+'/map/'+con.npc_key+'.png');
}

function create_story6_determination (){
    loading_transition(this,-500*width/800,0);
    create_audio(this);
    
    //--------------------場景設定--------------------
    //幻燈片
    for(var i=con.img_num_start;i<=con.img_num_end;i++){
        slides[i]=this.add.image(0,0,'slide'+i).setOrigin(0).setDisplaySize(width,height).setVisible(false);
    }
    //對話框
    PACO=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'PACO');
    Sprite=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'Sprite');
    backer=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'backer');
    npc=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, con.npc_key);
    hero=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'hero');
    stranger=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'stranger');
    
    descript_count=con.descript_count;
    descript_limit=con.descript_limit;
    //轉去下個場
    this.input.on("pointerup",function(){
        if(stop==0){
            finish_transition(this,(0.8)*width,(0.0)*height);
            setTimeout(function(){
                load_page(con.next_page);
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
    console.log(descript_limit);
    start_transition(this);
}

function update_story6_determination (){//與外界有關的互動
    if(descript_count<=descript_limit){
        updateTalkbox(con.lan,con.slide);
    }
}
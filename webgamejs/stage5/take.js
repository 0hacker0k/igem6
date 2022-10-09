COLOR_PRIMARY = 0x4e342e;
COLOR_LIGHT = 0x7b5e57;
COLOR_DARK = 0x260e04;

function preload_stage5_take(){
    debug = 0;
    this.load.image('background', prefix+'/stage5/background.jpg');//載入一般圖片
    load_transition(this);
    preload_congratulation(this);
    this.load.image('bac', prefix+'/stage5/bac.png');
    this.load.image('bac_gel', prefix+'/stage5/Plate.png');
    this.load.image('back', prefix+'/main/back.png');
    this.load.image('stick', prefix+'/stage5/stick.png');
    this.load.image('pressure', prefix+'/stage5/pressure.png');
    this.load.image('tube', prefix+'/stage5/tube.png');
    this.load.image('stick_box', prefix+'/main/green.png');
    this.load.image('trashcan', prefix+'/main/green.png');
    load_talkbox(this);
    if(debug==1){
        this.load.image('D_center', prefix+'/main/debug-center.png');
        this.load.image('green', prefix+'/main/green.png');
    }
    this.load.scenePlugin({
        key: 'rexuiplugin',
        url: rexUI_path,
        sceneKey: 'rexUI'
    });
    
}
var take_count=0;
function create_stage5_take (){
    where=this;
    //轉場設定
    loading_transition(this,-500*width/800,0);
    create_audio(this,"stage");
    
    //--------------------場景設定--------------------
    //背景
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    //膠盤
    var bac_gel = this.physics.add.group();
    var bac_gel_size = 0.9*height;
    bac_gel.create(width/2, height/2, 'bac_gel').setOrigin(0.5, 0.5).setDisplaySize(bac_gel_size,bac_gel_size).refreshBody();
    //吉祥物
    var bacs_totalnum=16;
    var bacs=new Array();
    var bacs_disize = new Array();   
    for(var i=-2;i<=1;i++){
        bacs[i+2] = new Array();
        bacs_disize[i+2] = new Array();
        for(var j=-2;j<=1;j++){
            add_bacs(this,i,j);
        }
    }
    function add_bacs(where,i,j){
        var rsize = (Math.random())*0.05;//0~0.05
        var bsize = 0.03*height;
        
        //bac_size = 30~30+0.05*height
        bacs[i+2][j+2] = where.physics.add.sprite(width/2+j*width*0.1+Math.random()*0.1*width, height/2+i*height*0.1+Math.random()*0.1*height, 'bac').setDisplaySize(rsize*height+bsize,rsize*height+bsize).setInteractive();
        bacs_disize[i+2][j+2] = rsize*height+bsize;
        //console.log(bacs[i+2][j+2].height);
    }
    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }
    //Tube
    var tube = this.physics.add.sprite(width*0.87, height*0.65,'tube').setOrigin(0, 0).setInteractive();
    var tube_size = 0.7
    tube.setDisplaySize(tube.width*tube_size,tube.height*tube_size);
    //牙籤盒
    // var stick_box = this.physics.add.sprite(width*0.025, height*0.7,'stick_box').setOrigin(0, 0).setInteractive();
    // var box_size;
    // stick_box.setDisplaySize(width*0.09, height*0.2);
    // stick_box.on('pointerdown', function (pointer) {
         
    // },this);
    //垃圾桶
    // var trashcan = this.physics.add.sprite(width*0.87, height*0.2,'trashcan').setOrigin(0, 0).setInteractive();
    // var trashcan_size;
    // trashcan.setDisplaySize(height*0.15, height*0.15);
    //牙籤
    var sticks = this.physics.add.group();
    var stick = sticks.create(width/2, height/2, 'stick').setOrigin(0.9,1);
    stick.setDisplaySize(0.3*stick.width,0.3*stick.height);
    stick.setAngle(30);
    
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
    //分數
    var score_text=this.add.text(width*0.98, height*0.15, '0', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1, 1);
    var score=0;
    var press_r;
    //press
    var press = this.add.sprite(width/2, height/2+50, 'pressure').setOrigin(0.5, 0.5).setDisplaySize(1,1);
    var press_disize = 1;
    //滑鼠移動
    this.input.on('pointermove', function (pointer) {
        stick.x = pointer.x;
        stick.y = pointer.y;
        
        press.alpha = 0;
    },this);
    //抓bac
    var big;
    for(var i=0;i<bacs.length;i++){
        for(var j=0;j<bacs.length;j++){
            take_ecoli(i,j);
        }
    }
    var delta_r;
    function take_ecoli(i,j){
        bacs[i][j].on('pointerdown', function (pointer){
            stick.x = bacs[i][j].x;
            stick.y = bacs[i][j].y;
            press.x = bacs[i][j].x;
            press.y = bacs[i][j].y;
            
            press_r = 0;
            bigger();
            
        },this);
        bacs[i][j].on('pointerup', function (pointer){
            stick.x = pointer.x;
            stick.y = pointer.y;
            //根據press大小精確度，分數不同，bac消失，移除碰撞
            delta_r = Math.abs(bacs_disize[i][j] - press_disize);//press差
            if(delta_r<=0.015*height){
                console.log("EX!");
                score+=1000;
                score_text.setText(score.toString());
                dis_bac(i,j)
                
            }else if(0.015*height<delta_r && delta_r<=0.04*height){
                console.log("Great");
                score+=500;
                score_text.setText(score.toString());
                dis_bac(i,j)
                
            }else{
                console.log("Bad");
                score+=100;
                score_text.setText(score.toString());
                dis_bac(i,j)
                
            }
            
        },this);
    }
    //放大press
    function bigger(){
        press_r +=height*0.005;
        press_r +=height*0.005;
        press.setDisplaySize(press_r,press_r);
        press_disize = press_r;
        press.alpha = 1;
        //console.log(delta_height);
        big = setTimeout(bigger,100);
    }
    //bac掰
    function dis_bac(i,j){
        bacs[i][j].disableBody(true, true);
        take_count++;
        if(take_count==16){
            end_stage(where,5);
        }
    }
    //滑鼠放開
    this.input.on('pointerup', function (pointer) {
         
        clearTimeout(big);
        press.setDisplaySize(height*0.01,height*0.01).alpha=0;
        
    },this);
    //loading_talkbox(this,500,500);
    PACO=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'PACO');
    Sprite=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'Sprite');
    descript_count=1;
    descript_limit=Object.keys(lan_stage5).length;
    create_congratulation(this,map_1);
    //返回
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.depth=1024;
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
    },this);
    //轉場動畫
    start_transition(this);   
}
function update_stage5_take (){//與外界有關的互動
    updateTalkbox(lan_stage5);
    
    // cursors = this.input.keyboard.createCursorKeys();
}
/*****************************/

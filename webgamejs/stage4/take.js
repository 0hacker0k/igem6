
function preload_stage4_take(){
    debug = 1;
    this.load.image('background', 'img/stage4/background.jpg');//載入一般圖片
    load_transition(this);
    this.load.image('bac', 'img/stage4/bac.png');
    this.load.image('bac_gel', 'img/stage4/Plate.png');
    this.load.image('back', 'img/main/back.png');
    this.load.image('green', 'img/stage4/stick.png');
    this.load.image('pressure', 'img/stage4/pressure.png');
    if(debug==1){
        this.load.image('D_center', 'img/main/debug_center.png')
    }
    
}

function create_stage4_take (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    //背景
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    //膠盤
    var bac_gel = this.physics.add.group();
    var bac_gel_size = 0.8*height;
    bac_gel.create(width/2, height/2, 'bac_gel').setOrigin(0.5, 0.5).setDisplaySize(bac_gel_size,bac_gel_size).refreshBody();
    //吉祥物
    var bacs=new Array();
    for(var i=-1;i<=1;i++){
        bacs[i+1] = new Array();
        for(var j=-1;j<=1;j++){
            add_bacs(this,i,j);
        }
    }
    function add_bacs(where,i,j){
        var rsize = (Math.random())*0.05;//-0.05~0.05
        var bsize = 30;
        bacs[i+1][j+1] = where.physics.add.sprite(width/2+j*width*Math.random()*0.2, height/2+i*height*Math.random()*0.2, 'bac').setOrigin(0.5, 0.5).setDisplaySize(rsize*height+bsize,rsize*height+bsize).setInteractive();
    }
    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }
    //牙籤
    var sticks = this.physics.add.group();
    var stick = sticks.create(width/2, height/2, 'green').setOrigin(0.9,1);
    stick.setDisplaySize(0.2*stick.width,0.2*stick.height);
    stick.setAngle(30);
    
    //DEBUG
    if(debug==1){
        this.add.image(width/2, height/2, 'D_center').setOrigin(0.5, 0.5).setDisplaySize(10,10);
        this.input.on('pointerdown', function (pointer) {
            console.log("x="+pointer.x);
            console.log("y="+pointer.y);
        },this);
    }
    var score_text=this.add.text(width*0.98, height*0.15, '0', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1, 1);
    var score=0;
    var delta_width,delta_height;
    //press
    var press = this.add.sprite(width/2, height/2+50, 'pressure').setOrigin(0.5, 0.5).setDisplaySize(height*0.01,height*0.01);
    //滑鼠移動
    this.input.on('pointermove', function (pointer) {
        stick.x = pointer.x;
        stick.y = pointer.y;
        
        press.alpha = 0;
    },this);

    var big;
    //Hint: settimeout,clear
    function bigger(){
        delta_height +=height*0.005;
        delta_width +=height*0.005;
        press.setDisplaySize(delta_width,delta_height);
        //console.log(delta_height);
        big = setTimeout(bigger,100);
    }
    for(var i=0;i<3;i++){
        for(var j=0;j<3;j++){
            take_ecoli(i,j);
        }
    }
    function take_ecoli(i,j){
        bacs[i][j].on('pointerdown', function (pointer){
            stick.x = pointer.x;
            stick.y = pointer.y;
            press.x = bacs[i][j].x;
            press.y = bacs[i][j].y;
            press.alpha = 1;
            delta_width = height*0.01;
            delta_height = height*0.01;        
            bigger();
            
        },this);
        bacs[i][j].on('pointerup', function (pointer){
            //根據prees大小精確度，分數不同，bac消失，移除碰撞
            
            
        },this);
    }

    //滑鼠放開
    this.input.on('pointerup', function (pointer) {
        var height_c = delta_height - 
        clearTimeout(big);
        press.setDisplaySize(height*0.01,height*0.01).alpha=0;
        
    },this);
    //生成目標物
    var ecolis = this.physics.add.staticGroup();//this.physics.add.group();
    //擊中目標物
    function hit(bullet, ecoli){
        
    }
    //返回
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
    },this);
    //轉場動畫
    start_transition(this);
}
function update_stage4_take (){//與外界有關的互動
    
    
    // cursors = this.input.keyboard.createCursorKeys();
}

function preload_stage4_take(){
    this.load.image('background', 'img/stage4/background.jpg');//載入一般圖片
    load_transition(this);
    this.load.image('bac', 'img/stage4/bac.png');
    this.load.image('bac_gel', 'img/stage4/bac_gel.png');
    this.load.image('back', 'img/main/back.png');
    this.load.image('green', 'img/main/green.png');
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
    bac_gel.create(width/2, height/2, 'bac_gel').setOrigin(0.5, 0.5).refreshBody();
    //吉祥物
    var bacs = this.add.sprite(width/2, height/2, 'bac').setOrigin(0.5, 0.5).setInteractive();
    
    //牙籤
    var sticks = this.physics.add.group();
    var stick = sticks.create(width/2, height/2, 'green').setDisplaySize(0.005*width,0.1*height).setOrigin(0.5,1).refreshBody();
    stick.setAngle(30);
    //DEBUG
    if(debug==1){
        this.add.image(width/2, height/2, 'D_center').setOrigin(0.5, 0.5).setDisplaySize(10,10);
    }
    var score_text=this.add.text(width*0.98, height*0.15, '0', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1, 1);
    var score=0;
    var delta_width,delta_height;

    var press = this.add.sprite(width/2, height/2+50, 'pressure').setOrigin(0.5, 0.5).setDisplaySize(height*0.05,height*0.05);
    //滑鼠移動
    this.input.on('pointermove', function (pointer) {
        stick.x = pointer.x;
        stick.y = pointer.y;
        press.x = pointer.x;
        press.y = pointer.y;
        press.alpha = 0;
    },this);

    delta_width = press.width;
    delta_height = press.height;
    //Hint: settimeout,clear
    this.input.on('pointerdown', function (pointer){
        press.alpha = 1;
        while(!pointer.leftReleased){
            setTimeout(function(){
                delta_height +=5;
                delta_width +=5;
                press.setDisplaySize(delta_width,delta_height);
                console.log(press.width);
                console.log(delta_width);
            },50);
        }
        
    },this);

    //滑鼠放開
    this.input.on('pointerup', function (pointer) {
        
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

function preload_stage1_choose(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    this.load.image('gene1', 'img/stage1/1.png');
    this.load.image('gene2', 'img/stage1/2.png');
    this.load.image('gene3', 'img/stage1/3.png');
    this.load.image('DNA', 'img/stage1/DNA.png');
    this.load.image('back', 'img/main/back.png');
    this.load.image('banner', 'img/stage1/banner.png');
    load_transition(this);
}
var banner_status=0;
var banner;
var instruction;
function create_stage1_choose (){
    /*send_string="ATT";
    level=1;
    load_page(stage_1_pcr);*/
    //轉場設定
    loading_transition(this,-500*width/800,0);
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    this.add.image(width*0.2, height*0.1, 'DNA').setOrigin(0, 0).setDisplaySize(height*0.8,height*0.8);
    button=[];
    button[0] = this.physics.add.sprite(0.69*height*0.8+width*0.2, -0.0514*height*0.8+height*0.1, 'gene1').setOrigin(0, 0).setInteractive().setDisplaySize(0.357*height*0.8,0.357*height*0.8);
    button[1] = this.physics.add.sprite(0.3731*height*0.8+width*0.2, 0.2062*height*0.8+height*0.1, 'gene2').setOrigin(0, 0).setInteractive().setDisplaySize(0.427*height*0.8,0.427*height*0.8);
    button[2] = this.physics.add.sprite(-0.066*height*0.8+width*0.2, 0.438*height*0.8+height*0.1, 'gene3').setOrigin(0, 0).setInteractive().setDisplaySize(0.6158*height*0.8,0.6158*height*0.8);
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
    banner_status=0;
    function clickButton(id,where){//輸入序列
        if(banner_status!=id && isMobileDevice()){
            banner_status=id;
            return ;
        }
        level=id;
        finish_transition(where,width,0);
        setTimeout(function(){
            load_page(stage_1_sequence);
        },500);
    }
    banner=this.add.image(0, 0.7*height, 'banner').setOrigin(0, 0).setDisplaySize(0,0.15*height); 
    banner.alpha=0.4;
    instruction=this.add.text(0.5*width, 0.775*height, '', { fontSize: (0.1*height).toString()+'px bold', fill: '#000000', bold: 'true'}).setOrigin(0.5, 0.5);
    function hover(id){//輸入序列
        if(!isMobileDevice()){
            banner_status=id;
        }
        button[id-1].alpha=1;
    }
    function out(id){//輸入序列
        if(!isMobileDevice()){
            banner_status=0;
        }
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
var banner_width=0;
function update_stage1_choose (){//與外界有關的互動
    var temp=banner_width;
    if(banner_status==0){
        banner.x=(width-banner_width)/2;
        banner.setDisplaySize(banner_width,0.15*height);
        if(banner_width>0)banner_width=(banner_width-(width*0.02))<0?0:banner_width-(width*0.2);
        instruction.setText("");
    }else{
        banner.x=(width-banner_width)/2;
        banner.setDisplaySize(banner_width,0.15*height);
        if(banner_width<width)banner_width+=(width*0.1);
        switch(banner_status){
            case 1: 
                instruction.setText(text.Easy);
                instruction.setColor("#33FF33");
                break;
            case 2: 
                instruction.setText(text.Moderate);
                instruction.setColor("#FFFF33");
                break;
            case 3: 
                instruction.setText(text.Difficult);
                instruction.setColor("#FF3333");
                break;
        }
    }
    if((banner_width<width) && banner_width==temp){
        banner_width=0;
        banner.x=(width-banner_width)/2;
        banner.setDisplaySize(banner_width,0.15*height);
    }
    
    // cursors = this.input.keyboard.createCursorKeys();
}

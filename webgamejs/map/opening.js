debug=0;
function preload_opening (){
    load_transition(this);
    this.load.image('webgame', 'img/map/webgame.jpg');
    if(debug==1){
        this.load.image('D_center', 'img/main/debug_center.png');
        this.load.image('green', 'img/main/green.png');
    }
    load_talkbox(this);
}
var where = this;
function create_opening (){
    loading_transition(this,-500*width/800,0);
    //--------------------場景設定--------------------
    var webgame;
    webgame=this.physics.add.sprite(width/2,height/2,'webgame').setDisplaySize(width,height);
    this.input.on("pointerup",function(){
        stop=1;
        finish_transition(this,(0.8)*width,(0.0)*height);
        setTimeout(function(){
            load_page(stage_0_story);
        },500);
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

function preload_endingscene(){
    load_transition(this);
    this.load.image("black",prefix+"/map/blacksquare.png");
    this.load.scenePlugin({
        key: 'rexuiplugin',
        url: rexUI_path,
        sceneKey: 'rexUI'
    });
    this.load.image("logo",prefix+"/map/brand.png");
    
}
var group=undefined;
function create_endingscene(){
    loading_transition(this,-500*width/800,0);
    create_audio(this);
    this.add.image(width/2,height/2,"black").setDisplaySize(width,height);
    var text_x=width/2;//初始位置
    var text_y=height*1.5;
    group = this.add.group();
    logo = this.add.image(text_x,text_y-height*0.3,"logo");
    logo.setDisplaySize(logo.width*0.125,logo.height*0.125);
    group.add(logo,true);
    for(var i=0;i<lan_ending_scene.length;i++){
        var text;
        var member;
        var lan;
        var fontsize=(width*0.038).toString()+'px';
        // if(key=='#'){
        //     fontsize=(width*0.07).toString()+'px'
        // }else if(key=='##'){
        //     fontsize=(width*0.055).toString()+'px'
        // }else{
        //     fontsize=(width*0.04).toString()+'px'
        // }
        text = this.rexUI.add.BBCodeText(text_x,text_y,lan_ending_scene[i],{fontFamily: 'fantasy', fontSize: fontsize, color: '#ffffff' }).setOrigin(0.5);
        text.setPadding(0,100,0,100)
        text.align = 'center';
        //text.setPadding(50,0,50,0);
        text.round=true;
        group.add(text,true);
        text_y+=height*0.1;
        //text.setVelocityY(height*(-0.05));
        //轉場動畫
        start_transition(this);
    }
    
}

function update_endingscene(){
    group.incY(-1);
}
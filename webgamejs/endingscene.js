
function preload_endingscene(){
    this.load.image("black","img/map/blacksquare.png");
    this.load.scenePlugin({
        key: 'rexuiplugin',
        url: rexUI_path,
        sceneKey: 'rexUI'
    });
}
var group=undefined;
function create_endingscene(){
    this.add.image(width/2,height/2,"black").setDisplaySize(width,height);
    var text_x=width/2;//初始位置
    var text_y=height;
    group = this.add.group();
    for(var i=0;i<lan_ending_scene.length;i++){
        var text;
        var member;
        var lan;
        var fontsize=(width*0.04).toString()+'px';
        // if(key=='#'){
        //     fontsize=(width*0.07).toString()+'px'
        // }else if(key=='##'){
        //     fontsize=(width*0.055).toString()+'px'
        // }else{
        //     fontsize=(width*0.04).toString()+'px'
        // }
        text = this.rexUI.add.BBCodeText(text_x,text_y,lan_ending_scene[i],{fontFamily: 'fantasy', fontSize: fontsize, color: '#ffffff' });
        //text.align = 'center';
        //text.setPadding(50,0,50,0);
        text.round=true;
        group.add(text,true);
        text_y+=height*0.1;
        //text.setVelocityY(height*(-0.05));
    }
    
}

function update_endingscene(){
    group.incY(-1);
}
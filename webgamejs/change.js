function loading_transition (where,x,y){//載入黑畫面
    transition = where.physics.add.sprite(x, y, 'transition').setOrigin(0, 0).setDisplaySize(width*2.1,height*1.1);
    transition.depth = 65536;
}
function start_transition (where){//畫面漸亮
    clearTimeout(anime);
    transition.setVelocityX(-2500*width/800);
    function keep_move(){
        if(transition.x<-2.1*width){
            transition.setVelocityX(0);
        }else{
            anime=setTimeout(function(){
                keep_move();
            },200);
        }
            
    }keep_move();
}
function finish_transition (where,x,y){//畫面漸暗
    clearTimeout(anime);
    transition.x=x;
    transition.y=y;
    transition.setVelocityX(-2500*width/800);
    function keep_move(){
        if(transition.x<-2.1*width){
            transition.setVelocityX(0);
        }else{
            anime=setTimeout(function(){
                keep_move();
            },200);
        }
    }keep_move();
}
function load_transition(where){//載入動畫檔
    load_talkbox(where);
    where.load.image('transition', 'img/main/transition.png');
}
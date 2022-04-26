function loading_transition (where,x,y){
    transition = where.physics.add.sprite(x, y, 'transition').setOrigin(0, 0).setDisplaySize(width*2.1,height*1.1);
    transition.depth = 1024;
}
function start_transition (where){
    transition.setVelocityX(-2500*width/800);
    setTimeout(function(){
        transition.setVelocityX(0);
    },1200);
}
function finish_transition (where,x,y){
    transition = where.physics.add.sprite(x, y, 'transition').setOrigin(0, 0).setDisplaySize(width*2.1,height*1.1);
    transition.depth = 1024;
    transition.setVelocityX(-2500*width/800);
}
function load_transition(where){
    where.load.image('transition', 'img/main/transition.png');
}
function preload_stage3_shoot(){
    this.load.image('background', 'img/stage2/background.png');//載入一般圖片
    load_transition(this);
    this.load.image('back', 'img/main/back.png');
    this.load.image('bar', 'img/main/green.png');
    // this.load.image('card_plasmid', 'img/stage2/card_back.jpg');
    // this.load.image('card_target_gene', 'img/stage2/card_target_gene.jpg');
    // for(var i=0;i<18;i++){
    //     var i_0=i.toString();
    //     var i_1=(i+1).toString();
    //     var locate;
    //     if(i+1<10){
    //         locate='0'+i_1;
    //     }else{
    //         locate=i_1;
    //     }
    //     this.load.image('end'+i_0, 'img/stage1/congratulations/congratulations_'+locate+'.png');
    // }
    // this.load.spritesheet('card',
    //     'img/stage2/card.jpg',
    //     { frameWidth: 367, frameHeight: 519 }
    // );
}
var bullets;
var bullets_queue=[];
function create_stage3_shoot (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    var bars = this.physics.add.staticGroup();
    bars.create(0.3*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.01*width,height).refreshBody();
    bars.create(0.7*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.01*width,height).refreshBody();
    bars.create(0.3*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.4*width,0.01*width).refreshBody();
    var guns = this.physics.add.group();
    var gun = guns.create(0.5*width, 0.9*height, 'bar').setOrigin(0.5, 0).setDisplaySize(0.01*width,height*0.2);
    var score_text=this.add.text(width*0.95, height*0.15, '0', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1, 1);
    var score=0;
    var angle;
    var delta_x,delta_y;
    this.input.on('pointermove', function (pointer) {
        delta_x=pointer.x-gun.x;
        delta_y=pointer.y-gun.y;
        if(pointer.x-gun.x>0){
            angle=Math.atan((delta_y)/(delta_x))/Math.PI*180-90;
        }else{
            angle=Math.atan((delta_y)/(delta_x))/Math.PI*180+90;
        }
        gun.setAngle(angle);
    },this);
    bullets = this.physics.add.group();
    this.physics.add.collider(bullets, bars);
    // this.physics.add.collider(bullets, bullets);
    //alert(this.scale.isLandscape);//橫屏
    //bullet
    this.input.on('pointerdown', function (pointer) {
        var bullet;
        if(bullets_queue.length>0){
            bullet=bullets_queue.pop();
            bullet.x=0.5*width;
            bullet.y=0.9*height;
            bullet.setVisible(true);
        }else{
            bullet = bullets.create(0.5*width, 0.9*height, 'bar').setOrigin(0.5, 0).setDisplaySize(height*0.02,height*0.02);
            
        }
        bullet.setAngle(angle);
        bullet.setBounce(1);
        // bullet.setCollideWorldBounds(true,0.5,0.5);
        var scale=400/Math.sqrt((delta_x*delta_x)+(delta_y*delta_y));
        bullet.setVelocityX(delta_x*scale);
        bullet.setVelocityY(delta_y*scale);
        // console.log(bullets_queue.length);
    },this);
    var ecolis = this.physics.add.staticGroup();//this.physics.add.group();
    // var ecolis = this.physics.add.group();
    //ecoli
    this.physics.add.collider(bullets, ecolis, hitdown, null, this);
    for(var i=0;i<4;i++){
        for(var j=0;j<3;j++){
            var ecoli = ecolis.create(0.3*width+0.08*width*(i+1), 0.1*height+0.1*height*j, 'bar').setOrigin(0.5, 0).setDisplaySize(width*0.06,height*0.06);
            ecoli.refreshBody();
            ecoli.y-=0.015*height;
        }
    }
    var falling_ecolis = this.physics.add.group();
    function hitdown(bullet, ecoli){
        var falling_ecoli = falling_ecolis.create(ecoli.x, ecoli.y, 'bar').setOrigin(0.5, 0).setDisplaySize(width*0.06,height*0.06);
        bullet.disableBody(true, true);
        ecoli.disableBody(true, true);
        falling_ecoli.setVelocityY(height*0.3);
        score+=100;
        score_text.setText(score.toString());
    }
    // spinTween.oncomplete.add(this.winPrize, this);
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
function update_stage3_shoot (){//與外界有關的互動
    bullets.children.entries.forEach(item =>  {
        if(item.y>height){
            item.setVelocityX(0);
            item.setVelocityY(0);
            item.setVisible(false);
            item.x=0.1*width;
            item.y=0.1*height;
            bullets_queue[bullets_queue.length]=item;
        }
        /*item.alpha -= 0.05;
        if (item.alpha < 0.001 || item.alpha > 0.999){
            item.alpha = 1;
        }*/
    });
    // cursors = this.input.keyboard.createCursorKeys();
}

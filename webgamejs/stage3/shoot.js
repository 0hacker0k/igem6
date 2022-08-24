function preload_stage3_shoot(){
    this.load.image('background', 'img/stage3/background.jpg');//載入一般圖片
    load_transition(this);
    this.load.image('back', 'img/main/back.png');
    this.load.image('bar', 'img/main/green.png');
    this.load.image('ecoli', 'img/stage3/ecoli.png');
    this.load.image('ecoli_break', 'img/stage3/ecoli_break.png');
    this.load.image('aim', 'img/stage3/aim.png');
    this.load.image('gun', 'img/stage3/gene_gun.png');
    this.load.spritesheet('plastid',
        'img/stage3/plastid.png',
        { frameWidth: 30, frameHeight: 30 }
    );
    for(var i=1;i<=5;i++){
        this.load.image('antibiotic_'+i.toString(), 'img/stage3/'+'antibiotic_'+i.toString()+'.png');
    }
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
var common_array=[];
function create_stage3_shoot (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    {//畫禎設定
        this.anims.create({//back
            key: '1',
            frames: this.anims.generateFrameNumbers('plastid', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//plasmid
            key: '2',
            frames: this.anims.generateFrameNumbers('plastid', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: '3',
            frames: this.anims.generateFrameNumbers('plastid', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//plasmid
            key: '4',
            frames: this.anims.generateFrameNumbers('plastid', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: '5',
            frames: this.anims.generateFrameNumbers('plastid', { start: 4, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
    }
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    var bars = this.physics.add.staticGroup();
    bars.create(0.126*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.01*width,height).refreshBody().alpha=0;
    bars.create(0.844*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.01*width,height).refreshBody().alpha=0;
    bars.create(0.126*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.718*width,0.01*height).refreshBody().alpha=0;
    var bottom = this.physics.add.staticGroup();
    common_array=[];
    for(var i=1;i<=5;i++){
        common_array[i-1]=bottom.create(0.131*width, 0.80*height, 'antibiotic_'+i.toString()).setOrigin(0, 0).setDisplaySize(0.718*width,0.02*height).refreshBody();
    }
    laser(0);
    function laser(light){
        for(var i=0;i<5;i++){
            if(i==light){
                common_array[i].alpha=1;
                continue;
            }
            common_array[i].alpha=0.3;
        }
        light++;
        if(light>=5)light=0;
        setTimeout(function(){
            laser(light);
        },100);
    }
    var guns = this.physics.add.group();
    var gun = guns.create(0.485*width, 0.95*height, 'gun').setOrigin(0.5, 1).setDisplaySize(0.02*width,height*0.08);
    var score_text=this.add.text(width*0.98, height*0.15, '0', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1, 1);
    var score=0;
    var angle;
    var delta_x,delta_y;
    var aim_count=50;
    var aims = this.physics.add.group();
    var aim=[];
    var next_bullet=[];
    //建立預先清單
    if(debug==1){
        for(var i=0;i<5;i++){
            next_bullet.push(i+1);
        }
    }
    var rand_buffer=[];
    var rand_list=[];
    for(var i=0;i<15;i++){
        rand_list.push(i%5+1);
    }
    for(var i=0;i<15;i++){
        var rnd=Math.floor(Math.random()*15);
        var temp=rand_list[i];
        rand_list[i]=rand_list[rnd];
        rand_list[rnd]=temp;
    }
    for(var i=0;i<15;i++){
        rand_buffer.push(rand_list[i]);
    }
    for(var i=0;i<2;i++){
        next_bullet.push(myrand());
    }
    function myrand(){
        // return 3;
        if(rand_buffer.length<1){
            for(var i=0;i<15;i++){
                var rnd=Math.floor(Math.random()*15);
                var temp=rand_list[i];
                rand_list[i]=rand_list[rnd];
                rand_list[rnd]=temp;
            }
            for(var i=0;i<15;i++){
                rand_buffer.push(rand_list[i]);
            }
            
        }
        return rand_buffer.pop();
    }
    //瞄準線產生
    for(var i=aim_count-1;i>=0;i--){
        aim[i]=aims.create(-width, -width, 'aim').setOrigin(0.5, 0.5).setDisplaySize(0.01*width,0.01*width);
        aim[i].id=i;
    }
    //滑鼠移動 瞄準線移動
    var scale1,scale2;
    var second=this.physics.add.sprite(0.485*width, 0.9*height, 'plastid').setOrigin(0.5, 0.5).setDisplaySize(height*0.02,height*0.02);
    var first=this.physics.add.sprite(0.485*width, 0.9*height, 'plastid').setOrigin(0.5, 0.5).setDisplaySize(height*0.02,height*0.02);
    first.anims.play(next_bullet[0].toString());
    second.anims.play(next_bullet[1].toString());
    first.x=0.485*width;
    first.y=0.87*height;
    second.x=0.485*width;
    second.y=0.95*height;
    var cool_down=0;
    var cool_down_reduce_status=null;
    var cool_down_locate=1;
    this.input.on('pointermove', function (pointer) {
        delta_x=pointer.x-gun.x;
        delta_y=pointer.y-gun.y;
        if(pointer.x-gun.x>0){
            angle=Math.atan((delta_y)/(delta_x))/Math.PI*180+90;
        }else{
            angle=Math.atan((delta_y)/(delta_x))/Math.PI*180-90;
        }
        gun.setAngle(angle);
        scale1=20/Math.sqrt((delta_x*delta_x)+(delta_y*delta_y));
        for(var i=0;i<aim_count;i++){
            aim[i].x=delta_x*scale1*(i+8)+gun.x;
            aim[i].y=delta_y*scale1*(i+8)+gun.y;
            aim[i].alpha=1;
            while(1){
                if(aim[i].x < (0.126+0.015)*width){
                    aim[i].x=2*(0.126+0.015)*width-aim[i].x;
                }else if(aim[i].x > (0.844-0.0052)*width){
                    aim[i].x=2*(0.844-0.0052)*width-aim[i].x;
                }else if(aim[i].y < (0.01+0.0075)*height){
                    aim[i].y=2*(0.01+0.0075)*height-aim[i].y;
                }else{
                    break;
                }
            }
        }
        first.x=delta_x*scale1*(3*cool_down_locate)+gun.x;
        first.y=delta_y*scale1*(3*cool_down_locate)+gun.y;
        second.x=delta_x*scale1*(0)+gun.x;
        second.y=delta_y*scale1*(0)+gun.y;
    },this);
    //子彈射擊
    bullets = this.physics.add.group();
    this.physics.add.collider(bullets, bars);
    // this.physics.add.collider(bullets, bullets);
    //alert(this.scale.isLandscape);//橫屏
    //bullet
    var status=0;
    
    this.input.on('pointerup', function (pointer) {
        if(cool_down!=0){
            return ;
        }
        // if(status){
        //     status=0;
        // }
        var bullet;
        if(bullets_queue.length>0){
            bullet=bullets_queue.pop();
            bullet.x=delta_x*scale1*(3)+gun.x;
            bullet.y=delta_y*scale1*(3)+gun.y;
            bullet.type=next_bullet.shift();
            bullet.anims.play(bullet.type.toString());
            bullet.setVisible(true);
        }else{
            bullet = bullets.create(delta_x*scale1*(3)+gun.x, delta_y*scale1*(3)+gun.y, 'plastid').setOrigin(0.5, 0.5).setDisplaySize(height*0.02,height*0.02);
            bullet.refreshBody();
            bullet.type=next_bullet.shift();
            bullet.anims.play(bullet.type.toString());
        }
        next_bullet.push(myrand());
        bullet.setAngle(angle);
        bullet.setBounce(1);
        // bullet.setCollideWorldBounds(true,0.5,0.5);
        scale2=400/Math.sqrt((delta_x*delta_x)+(delta_y*delta_y));
        bullet.setVelocityX(delta_x*scale2);
        bullet.setVelocityY(delta_y*scale2);
        cool_down=15;
        first.x=gun.x;
        first.y=gun.y;
        first.anims.play(next_bullet[0].toString());
        second.anims.play(next_bullet[1].toString());
        cool_down_reduce_status=setTimeout(function(){
            cool_down_reduce(cool_down);
        },25);
    },this);
    //設定子彈冷卻時間
    function cool_down_reduce(count){
        cool_down_locate=1-cool_down/count;
        first.x=delta_x*scale1*(3*cool_down_locate)+gun.x;
        first.y=delta_y*scale1*(3*cool_down_locate)+gun.y;
        if(cool_down<=0){
            clearTimeout(cool_down_reduce_status);
            cool_down=0;
            return ;
        }
        cool_down-=1;
        
        if(cool_down>0){
            cool_down_reduce_status=setTimeout(function(){
                cool_down_reduce(count);
            },25);
        }
    }
    //生成目標物
    var ecolis = this.physics.add.staticGroup();//this.physics.add.group();
    // var ecolis = this.physics.add.group();
    //ecoli
    for(var i=0;i<4;i++){
        for(var j=7-i;j>=0;j--){
            var ecoli = ecolis.create(0.126*width+0.08*width*(j+1)+0.04*i*width, 0.1*height+0.1*height*i, 'ecoli').setOrigin(0.5, 0.5).setDisplaySize(width*0.06,height*0.06);
            ecoli.refreshBody();
            // ecoli.y-=0.015*height;
            ecoli.plastid=[];
            ecoli.plastid_count=0;
            ecoli.check=-1;
        }
    }
    //目標物移動
    function ecoli_falling(){
        ecolis.children.entries.forEach(item =>  {
            if(item.check==-1)return ;
            if(item.y>height+0.03*height){
                item.disableBody(true, true);
                item.check=-1;
                score+=100;
                score_text.setText(score.toString());
            }
            var x_v,y_v;
            y_v=0.2;
            x_v=0;
            var len=item.plastid.length;
            for(var i=0;i<len;i++){
                switch(item.plastid[i].type){
                    case 0:
                        y_v+=0.2;
                        break;
                    case 1:
                        y_v-=0.1;
                        break;
                    case 2:
                        x_v+=0.2;
                        y_v+=0.2;
                        break;
                    case 3:
                        x_v-=0.2;
                        y_v+=0.2;
                        break;
                    case 4:
                        y_v+=0.4;
                        break;
                }
            }
            if(item.check==1){
                y_v=8.8;
                x_v=0;
            }
            if(item.x<=0.168*width || item.x>=0.812*width){
                x_v=0;
            }
            item.y+=y_v;
            item.x+=x_v;
            item.refreshBody();
            for(var i=0;i<len;i++){
                item.plastid[i].x=item.x+(i%2)*width*0.02-width*0.01;
                item.plastid[i].y=item.y+Math.floor(i/2)*height*0.02-height*0.01;
                if(i==4){
                    item.plastid[i].x=item.x;
                    item.plastid[i].y=item.y;
                }
            }
        });
        setTimeout(function(){
            ecoli_falling();
        },30);
    }ecoli_falling();
    //目標物彼此碰撞
    // this.physics.add.collider(ecolis, ecolis, merge, null, this);
    // function merge(ecoli1, ecoli2){
    //     var len1=ecoli1.plastid.length;
    //     var len2=ecoli2.plastid.length;
    //     var same=0;
    //     for(var i=0;i<len1;i++){
    //         same==0;
    //         for(var j=0;j<len2;j++){
    //             if(ecoli1.plastid[i].type==ecoli2.plastid[j].type){
    //                 same=1;
    //                 break;
    //             }
    //         }if(same==0){
    //             var bullet;
    //             if(bullets_queue.length>0){
    //                 bullet=bullets_queue.pop();
    //                 bullet.setVisible(true);
    //             }else{
    //                 bullet = bullets.create(0.5*width, 0.9*height, 'plastid').setOrigin(0.5, 0.5).setDisplaySize(height*0.02,height*0.02);
    //                 bullet.refreshBody();
    //             }
    //             bullet.type=ecoli1.plastid[i].type;
    //             bullet.anims.play(bullet.type.toString());
    //             ecoli2.plastid.push(bullet);
    //             ecoli2.plastid_count+=1;
    //         }
    //     }
    //     for(var i=0;i<len2;i++){
    //         same==0;
    //         for(var j=0;j<len1;j++){
    //             if(ecoli2.plastid[i].type==ecoli1.plastid[j].type){
    //                 same=1;
    //                 break;
    //             }
    //         }if(same==0){
    //             var bullet;
    //             if(bullets_queue.length>0){
    //                 bullet=bullets_queue.pop();
    //                 bullet.setVisible(true);
    //             }else{
    //                 bullet = bullets.create(0.5*width, 0.9*height, 'plastid').setOrigin(0.5, 0.5).setDisplaySize(height*0.02,height*0.02);
    //                 bullet.refreshBody();
    //             }
    //             bullet.type=ecoli2.plastid[i].type;
    //             bullet.anims.play(bullet.type.toString());
    //             ecoli1.plastid.push(bullet);
    //             ecoli1.plastid_count+=1;
    //         }
    //     }
    //     if(ecoli1.plastid_count>=5){
    //         ecoli1.disableBody(true, false);
    //         for(var i=0;i<5;i++){
    //             var temp=ecoli1.plastid.pop();
    //             temp.setVisible(false);
    //             bullets_queue.push(temp);
    //         }
    //         ecoli_die(ecoli1,40);
    //     }
    //     if(ecoli2.plastid_count>=5){
    //         ecoli2.disableBody(true, false);
    //         for(var i=0;i<5;i++){
    //             var temp=ecoli2.plastid.pop();
    //             temp.setVisible(false);
    //             bullets_queue.push(temp);
    //         }
    //         ecoli_die(ecoli2,40);
    //     }
    // }
    this.physics.add.collider(bullets, ecolis, hit, null, this);
    var ecolis_breaken = this.physics.add.group();
    //擊中目標物
    function hit(bullet, ecoli){
        // var ecoli_breaken = ecolis_breaken.create(ecoli.x, ecoli.y, 'bar').setOrigin(0.5, 0).setDisplaySize(width*0.06,height*0.06);
        if(ecoli.check==1){
            return;
        }
        // ecoli.disableBody(true, true);
        // falling_ecoli.setVelocityY(height*0.3);
        //不重複打入質體
        // for(var i=0;i<ecoli.plastid_count;i++){
        //     if(ecoli.plastid[i].type==bullet.type){
        //         return ;
        //     }
        // }
        bullet.disableBody(true, false);
        if(ecoli.plastid_count==5){//原先已經有五個
            ecoli.disableBody(true, true);
            ecoli.check=-1;
            for(var i=0;i<5;i++){
                ecoli.plastid.pop().disableBody(true, true);
            }bullet.disableBody(true, true);
            // bullet.disableBody(true, true);
            var ecoli_breaken = ecolis_breaken.create(ecoli.x, ecoli.y, 'ecoli_break').setOrigin(0.5, 0.5).setDisplaySize(width*0.06,height*0.06);
            ecoli_die(ecoli_breaken,40);
            return ;
        }
        bullet.setVelocityX(0);
        bullet.setVelocityY(0);
        bullet.x=ecoli.x+(ecoli.plastid_count%2)*width*0.02-width*0.01;
        bullet.y=ecoli.y+Math.floor(ecoli.plastid_count/2)*height*0.02-height*0.01;
        if(ecoli.plastid_count==4){
            bullet.x=ecoli.x;
            bullet.y=ecoli.y;
        }
        ecoli.check=0;
        ecoli.plastid_count+=1;
        ecoli.plastid.push(bullet);
        var state;
        if(ecoli.plastid_count==5){//加入後有五個
            for(var i=0;i<5;i++){
                state=0;
                for(var j=0;j<5;j++){
                    if(ecoli.plastid[j].type==i+1){
                        state=1;
                        break;
                    }
                }
                if(state==0){
                    state=2;
                    break;
                }
            }
        }
        if(state==1){
            ecoli.check=1;
            ecoli.disableBody(true, false);
            for(var i=0;i<5;i++){
                ecoli.plastid[i].type=-1;
            }
            
        }
    }
    //目標物死亡
    function ecoli_die(ecoli,count){
        ecoli.setDisplaySize(width*0.06*count/40,height*0.06*count/40);
        ecoli.alpha=count/40;
        if(count==0){
            ecoli.disableBody(true, true);
        }else{
            setTimeout(function(){
                ecoli_die(ecoli,count-1);
            },30);
        }
    }
    this.physics.add.collider(aims, ecolis, invisible, null, this);
    function invisible(aimii, ecoli){
        for(var i=aimii.id;i<aim_count;i++){
            aim[i].alpha=0;
        }
    }
    //目標物與底線接觸
    this.physics.add.collider(ecolis, bottom, dead_check, null, this);
    function dead_check(ecoli, bottom){
        var state=2;
        if(ecoli.check==1||ecoli.check==-1)return ;
        for(var i=0;i<ecoli.plastid_count;i++){
            ecoli.plastid[i].type=-1;
        }
        if(ecoli.plastid_count<5 || state==2){
            ecoli.disableBody(true, false);
            for(var i=0;i<ecoli.plastid_count;i++){
                ecoli.plastid.pop().disableBody(true, true);
            }
            ecoli.plastid_count=0;
            ecoli.check=-1;
            ecoli.disableBody(true, true);
            var ecoli_breaken = ecolis_breaken.create(ecoli.x, ecoli.y, 'ecoli_break').setOrigin(0.5, 0.5).setDisplaySize(width*0.06,height*0.06);
            ecoli_die(ecoli_breaken,40);
        }
        
    }
    // spinTween.oncomplete.add(this.winPrize, this);
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
function update_stage3_shoot (){//與外界有關的互動
    bullets.children.entries.forEach(item =>  {
        if(item.y>height && item.type!=-1){
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

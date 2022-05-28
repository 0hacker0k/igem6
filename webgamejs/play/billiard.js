function play_2_preload(){
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
    this.load.spritesheet('antibiotic',
        'img/stage3/antibiotic.png',
        { frameWidth: 713, frameHeight: 42 }
    );
    this.load.spritesheet('button',
        'img/stage3/plastid1.png',
        { frameWidth: 30, frameHeight: 30 }
    );
}
var keys;
var information;
var common_array=[];
function play_2_create (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    {//畫禎設定
        this.anims.create({//back
            key: 'p1',
            frames: this.anims.generateFrameNumbers('plastid', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//plasmid
            key: 'p2',
            frames: this.anims.generateFrameNumbers('plastid', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'p3',
            frames: this.anims.generateFrameNumbers('plastid', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//plasmid
            key: 'p4',
            frames: this.anims.generateFrameNumbers('plastid', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'p5',
            frames: this.anims.generateFrameNumbers('plastid', { start: 4, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'a1',
            frames: this.anims.generateFrameNumbers('antibiotic', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'a2',
            frames: this.anims.generateFrameNumbers('antibiotic', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'a3',
            frames: this.anims.generateFrameNumbers('antibiotic', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'a4',
            frames: this.anims.generateFrameNumbers('antibiotic', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'a5',
            frames: this.anims.generateFrameNumbers('antibiotic', { start: 4, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'b1',
            frames: this.anims.generateFrameNumbers('button', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'b2',
            frames: this.anims.generateFrameNumbers('button', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'b3',
            frames: this.anims.generateFrameNumbers('button', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'b4',
            frames: this.anims.generateFrameNumbers('button', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'b5',
            frames: this.anims.generateFrameNumbers('button', { start: 4, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
    }
    var stop=0;
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    var bars = this.physics.add.staticGroup();
    bars.create(0.126*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.01*width,height).refreshBody().alpha=0;
    bars.create(0.844*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.01*width,height).refreshBody().alpha=0;
    bars.create(0.126*width, 0, 'bar').setOrigin(0, 0).setDisplaySize(0.718*width,0.01*height).refreshBody().alpha=0;
    var bottom = this.physics.add.staticGroup();
    var antibiotic=bottom.create(0.131*width, 0.60*height, 'antibiotic').setOrigin(0, 0).setDisplaySize(0.718*width,0.02*height).refreshBody();
    information=antibiotic;
    information.type=1;
    var score_text=this.add.text(width*0.99, height*0.25, '0', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1, 1);
    var score=0;
    var next_bullet=[];
    //建立預先清單
    if(debug==1){
        for(var i=0;i<5;i++){
            next_bullet.push(i+1);
        }
    }
    var rand_list=[];
    var rand_list_temp=[];
    for(var i=0;i<5;i++){
        rand_list.push(i+1);
    }
    function random_plastid_count(){//1 3 8 10 1
        var rnd=Math.floor(Math.random()*23)+1;
        if(rnd<=1)return 5;
        if(rnd<=4)return 4;
        if(rnd<=12)return 3;
        if(rnd<=22)return 2;
        if(rnd<=23)return 1;
    }
    function random_plastid_type_all(){
        for(var i=0;i<5;i++){
            var rnd=Math.floor(Math.random()*5);
            var temp=rand_list[i];
            rand_list[i]=rand_list[rnd];
            rand_list[rnd]=temp;
        }
    }
    function random_plastid_temp(count){
        for(var i=0;i<count;i++){
            rand_list_temp[i]=rand_list[i];
        }
        for(var i=0;i<count;i++){
            var rnd=Math.floor(Math.random()*count);
            var temp=rand_list_temp[i];
            rand_list_temp[i]=rand_list_temp[rnd];
            rand_list_temp[rnd]=temp;
        }
    }
    function random_plastid_type_part(count){
        for(var i=1;i<5;i++){
            var rnd=Math.floor(Math.random()*4)+1;
            var temp=rand_list[i];
            rand_list[i]=rand_list[rnd];
            rand_list[rnd]=temp;
        }random_plastid_temp(count);
    }
    function random_ecoli_count(cnt1,cnt2){
        var rnd=Math.floor(Math.random()*10)+1;
        if(rnd<=6+cnt1-cnt2*2)return 1;
        return 0;
    }
    
    keys = this.input.keyboard.addKeys('Q,W,E,R,T');
    var bullets = this.physics.add.staticGroup();
    //生成目標物
    var ecolis = this.physics.add.staticGroup();//this.physics.add.group();
    // var ecolis = this.physics.add.group();
    //ecoli
    var speed=3.5;
    create_ecoli();
    function create_ecoli(){
        if(stop)return;
        var ecoli_count=0;
        random_plastid_type_all();
        for(var i=0;i<5;i++){
            if(random_ecoli_count(i,ecoli_count)==0){
                continue;
            }ecoli_count++;
            var ecoli = ecolis.create(0.126*width-0.065*width+((0.718-5*0.13)/6+0.13)*(i+1)*width, -0.2*height, 'ecoli').setOrigin(0.5, 0.5).setDisplaySize(width*0.13,height*0.13);
            ecoli.refreshBody();//0.718
            // ecoli.y-=0.015*height;
            ecoli.plastid=[];
            ecoli.plastid_count=random_plastid_count();
            random_plastid_type_part(ecoli.plastid_count);
            for(var j=0;j<ecoli.plastid_count;j++){
                var temp=bullets.create(0, 0, 'plastid').setOrigin(0.5, 0.5).setDisplaySize(width*0.03,width*0.03);
                temp.anims.play("p"+rand_list_temp[j].toString());
                temp.type=rand_list_temp[j];
                ecoli.plastid.push(temp);
                temp.x=ecoli.x+(j%2)*width*0.038-width*0.019;
                temp.y=ecoli.y+Math.floor(j/2)*height*0.044-height*0.022;
                if(j==4){
                    temp.x=ecoli.x;
                    temp.y=ecoli.y;
                }
            }
            ecoli.check=0;
        }
        setTimeout(function(){
            create_ecoli();
        },100+10000/speed);
    }
    //目標物移動
    function ecoli_falling(){
        if(stop)return;
        speed=3.5+(score/5/5);
        ecolis.children.entries.forEach(item =>  {
            if(item.check==-1)return ;
            if(item.y>0.7*height+0.03*height){
                for(var i=0;i<item.plastid_count;i++){
                    item.plastid.pop().disableBody(true, true);
                }
                item.disableBody(true, true);
                item.check=-1;
                score+=1;
                score_text.setText(score.toString());
                return ;
            }
            item.y+=speed;
            item.refreshBody();
            for(var i=0;i<item.plastid_count;i++){
                item.plastid[i].x=item.x+(i%2)*width*0.038-width*0.019;
                item.plastid[i].y=item.y+Math.floor(i/2)*height*0.044-height*0.022;
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
    var ecolis_breaken = this.physics.add.group();
    
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
    //目標物與抗生素接觸
    this.physics.add.collider(ecolis, bottom, dead_check, null, this);
    function dead_check(ecoli, bottom){
        var state=2;
        if(ecoli.check==1||ecoli.check==-1)return ;
        for(var i=0;i<ecoli.plastid_count;i++){
            if(ecoli.plastid[i].type==antibiotic.type)state=1;
            // alert(antibiotic.type);
        }
        if(state==1)ecoli.check=1;
        for(var i=0;i<ecoli.plastid_count;i++){
            ecoli.plastid[i].type=-1;
        }
        if(state==2){
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
    var time_text=this.add.text(width*0.99, height*0.01, '1:00', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' }).setOrigin(1,0);
    var time_clock;
    var count_time=120;
    function time_count(){
        count_time-=1;
        time_text.setText(((Math.floor(count_time/60)).toString())+':'+((count_time%60)>=10?'':'0')+((Math.floor(count_time%60)).toString()));
        
        if(count_time>0){
            time_clock=setTimeout(function(){
                time_count();
            },1000);
        }else{
            stop=1;
            score_text.alpha=0.1;
            score_text.setFontSize(12);
            score_text.setOrigin(0.5,0.5);
            score_text.x=0.5*width;
            score_text.y=0.5*height;
            score_text.depth = 1023;
            end(12);
        }
        return ;
    }
    function end(fontSize){
        score_text.alpha+=0.02;
        fontSize+=6;
        score_text.setFontSize(fontSize);
        if(score_text.alpha<1){
            setTimeout(function(){
                end(fontSize);
            },10);
        }
    }
    function time_stop(){
        clearTimeout(time_clock);
        // alert("game finished with "+count_time.toString()+" seconds.");
        return ;
    }
    time_clock=setTimeout(function(){
        time_count();
    },1000);
    //按鈕建立
    var button=[5];
    for(var i=0;i<5;i++){
        add_button(this,i);
    }
    function add_button(locate,id){
        button[id] = locate.physics.add.sprite(0.126*width+0.12*width*(id+1), 0.9*height, 'button').setOrigin(0.5, 0.5).setDisplaySize(width*0.1,width*0.1).setInteractive();
        button[id].refreshBody();
        button[id].anims.play("b"+(id+1).toString());
        button[id].on('pointerdown', function (){
            console.log("888");
            antibiotic.type=id+1;
            antibiotic.play("a"+(id+1).toString());
        },this);
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
function play_2_update (){//與外界有關的互動
    
    // cursors = this.input.keyboard.createCursorKeys();
    if(keys.Q.isDown){
        information.type=1;
        information.anims.play("a1");
    }else if(keys.W.isDown){
        information.type=2;
        information.anims.play("a2");
    }else if(keys.E.isDown){
        information.type=3;
        information.anims.play("a3");
    }else if(keys.R.isDown){
        information.type=4;
        information.anims.play("a4");
    }else if(keys.T.isDown){
        information.type=5;
        information.anims.play("a5");
    }
    // information.alpha=Math.floor(Math.random()*6)/10+0.5;
}

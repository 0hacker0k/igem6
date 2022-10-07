function preload_stage3_flop(){
    this.load.image('background', prefix+'/stage3/background.png');//載入一般圖片
    load_transition(this);
    preload_congratulation(this);
    this.load.image('back', prefix+'/main/back.png');
    this.load.spritesheet('card',
        prefix+'/stage3/card1.png',
        { frameWidth: 367, frameHeight: 519 }
    );
}
function create_stage3_flop (){
    where=this;
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    {//畫禎設定
        this.anims.create({//back
            key: 'back',
            frames: this.anims.generateFrameNumbers('card', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//plasmid
            key: 'plasmid',
            frames: this.anims.generateFrameNumbers('card', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//target_gene
            key: 'target_gene',
            frames: this.anims.generateFrameNumbers('card', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
    }
    // 產生card
    // var card_group=this.physics.add.staticGroup();
    var card_count=18;//總共幾張牌
    var card=[card_count];//卡片的object
    var card_gene=[card_count];//卡片上的基因object
    var card_num=[card_count];//卡片上的基因編號
    var flop=0;//現在翻了幾張牌
    var flop_last=-1;//上一張牌的物件
    var flop_last_num=-1;//前一張牌的數字
    var last_gene;//上一張牌的基因文字物件
    var gene_table=[32];//隨機基因序列
    var count_time=0;
    for(var i=0;i<32;i++){//拿 ACGT 當作四進位 
        gene_table[i]=i;
    }
    for(var i=0;i<32;i++){
        var rnd=Math.floor(Math.random() * 32);
        var temp=gene_table[i];
        gene_table[i]=gene_table[rnd];
        gene_table[rnd]=temp;
    }
    for(var i=0;i<card_count/2;i++){
        card_num[i]=gene_table[i];
    }
    for(var i=card_count/2;i<card_count;i++){
        card_num[i]=63-card_num[i-card_count/2];
    }
    for(var i=0;i<card_count;i++){
        var rnd=Math.floor(Math.random() * card_count);
        var temp=card_num[i];
        card_num[i]=card_num[rnd];
        card_num[rnd]=temp;
    }
    for(var i=0;i<3;i++){
        for(var j=0;j<6;j++){
            add_card(this,i,j);
        }
    }
    function add_card(where,i,j){
        card[i*6+j]=where.physics.add.sprite(width*0.05+0.15*width*j, height*0.19+0.25*height*i, 'card').setOrigin(0, 0).setDisplaySize(width*21*0.0065 ,height*40*0.0065);
        card_gene[i*6+j]=where.add.text(width*0.092+0.15*width*j, height*0.38+0.25*height*i, '', { fontFamily: 'fantasy', fontSize: '32px', fill: '#111111' });
        card[i*6+j].setInteractive();
        // card[i*6+j].enable();
        var temp="";
        var temp_num=card_num[i*6+j];
        for(var k=0;k<3;k++){
            switch(temp_num%4){
                case 0:
                    temp='A'+temp;
                    break;
                case 1:
                    temp='C'+temp;
                    break;
                case 2:
                    temp='G'+temp;
                    break;
                case 3:
                    temp='T'+temp;
                    break;
            }temp_num=Math.floor(temp_num/4);
        }
        card_gene[i*6+j].setText(temp);
        card_gene[i*6+j].alpha=0;
        if(debug==1){
            card_gene[i*6+j].alpha=1;
        }
        card[i*6+j].on('pointerdown', function (){
            flop++;
            if(card_num[i*6+j]>=32){
                card[i*6+j].anims.play('target_gene');
            }else{
                card[i*6+j].anims.play("plasmid");
            }
            card_gene[i*6+j].alpha=1;
            if(flop%2==1){
                flop_last_num=card_num[i*6+j];
                last_gene=card_gene[i*6+j];
                flop_last=card[i*6+j];
                return;
            }else{
                if(card_num[i*6+j]+flop_last_num==63){//match
                    if(flop==card_count){
                        time_stop();
                    }
                    ready_match(card,card_gene,flop_last,last_gene,i*6+j);
                }else{// no match
                    ready_nomatch(card,card_gene,flop_last,last_gene,i*6+j);
                    flop-=2;
                }
                return;
            }
            //alert(card_num[i*6+j]);
        },this);
    }
    function ready_match(c1,c2,c3,c4,id){
        c1[id].disableInteractive();
        c3.disableInteractive();
        setTimeout(function(){
            match(c1,c2,c3,c4,id);
        },1000);
    }
    function ready_nomatch(c1,c2,c3,c4,id){
        c1[id].disableInteractive();
        c3.disableInteractive();
        setTimeout(function(){
            nomatch(c1,c2,c3,c4,id);
        },1000);
    }
    function match(c1,c2,c3,c4,id){
        if(c1[id].alpha==0){
            if(flop==card_count){
                //end_stage1();
                end_stage(where,3);
            }
            c1[id].setInteractive();
            c3.setInteractive();
            return;
        }
        c1[id].alpha-=0.1;
        c2[id].alpha-=0.1;
        c3.alpha-=0.1;
        c4.alpha-=0.1;
        setTimeout(function(){
            match(c1,c2,c3,c4,id);
        },80);
        return ;
    }
    function nomatch(c1,c2,c3,c4,id){
        if(c2[id].alpha==0){
            c1[id].anims.play('back');
            c3.anims.play('back');
            c1[id].setInteractive();
            c3.setInteractive();
            return;
        }
        c2[id].alpha-=0.1;
        c4.alpha-=0.1;
        setTimeout(function(){
            nomatch(c1,c2,c3,c4,id);
        },80);
        return ;
    }
    var time_text=this.add.text(width*0.70, height*0.05, '00:00', { fontFamily: 'fantasy', fontSize: (width*0.07).toString()+'px', fill: '#111111' });
    var time_clock;
    function time_count(){
        if(stop==0){
            count_time+=1;
        }
        time_text.setText((count_time>=600?'':'0')+((Math.floor(count_time/60)).toString())+':'+((count_time%60)>=10?'':'0')+((Math.floor(count_time%60)).toString()));
        time_clock=setTimeout(function(){
            time_count();
        },1000);
        return ;
    }
    function time_stop(){
        clearTimeout(time_clock);
        // alert("game finished with "+count_time.toString()+" seconds.");
        return ;
    }
    time_clock=setTimeout(function(){
        time_count();
    },1000);
    create_congratulation(this,map_1);
    //返回
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.depth=1024;
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(map_1);
        },500);
        //end_stage(where,3);
    },this);
    //轉場動畫
    start_transition(this);
}

function update_stage3_flop (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

function preload_stage2_flop(){
    this.load.image('background', 'img/stage2/background.png');//載入一般圖片
    load_transition(this);
    this.load.image('back', 'img/main/back.png');
    // this.load.image('card_back', 'img/stage2/card_back.jpg');
    // this.load.image('card_plasmid', 'img/stage2/card_back.jpg');
    // this.load.image('card_target_gene', 'img/stage2/card_target_gene.jpg');
    
    this.load.spritesheet('card',
        'img/stage2/card.jpg',
        { frameWidth: 361, frameHeight: 519 }
    );
}
function create_stage2_flop (){
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
    var flop_last=-1;//上一張牌
    var flop_last_num=-1;
    var last_gene;
    var gene_table=[32];//隨機基因序列
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
        card[i*6+j]=where.physics.add.sprite(width*0.05+0.15*width*j, height*0.19+0.25*height*i, 'card').setOrigin(0, 0).setInteractive().setDisplaySize(width*21*0.0065 ,height*40*0.0065);
        card_gene[i*6+j]=where.add.text(width*0.05+0.15*width*j, height*0.4+0.25*height*i, '', { fontFamily: 'fantasy', fontSize: '32px', fill: '#111111' });
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
        card_gene[i*6+j].alpha=1;
        card[i*6+j].on('pointerdown', function (){
            flop++;
            if(card_num[i*6+j]>=card_count){
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
                    card[i*6+j].alpha=0;
                    flop_last.alpha=0;
                    last_gene.alpha=0;
                    card_gene[i*6+j].alpha=0;
                }else{// no match
                    card[i*6+j].anims.play('back');
                    flop_last.anims.play('back');
                    flop-=2;
                }
                return;
            }
            //alert(card_num[i*6+j]);
        },this);
    }
    // card_group.on('pointerdown', function (){
    //     finish_transition(this,width,0);
    //     setTimeout(function(){
    //         load_page(map_1);
    //     },500);
    // },this);
    //back
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

function update_stage2_flop (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

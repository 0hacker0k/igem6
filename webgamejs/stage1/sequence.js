function preload_stage1_sequence(){
    this.load.image('background', prefix+'/stage1/step-2-background.jpg');//載入一般圖片
    load_transition(this);
    
    this.load.image('back', prefix+'/main/back.png');
    this.load.spritesheet('check',
        prefix+'/stage1/check-button.png',
        { frameWidth: 250, frameHeight: 25 }
    );
    this.load.spritesheet('card',
        prefix+'/stage1/atcg.png',
        { frameWidth: 140, frameHeight: 192 }
    );//載入畫楨
    this.load.spritesheet('button',
        prefix+'/stage1/small-atcg.png',
        { frameWidth: 90, frameHeight: 90 }
    );
}
var codon=["","","","",""];
var ans=["C","C","C","C","C"];
var output="";

function create_stage1_sequence (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    create_audio(this,"stage");
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    var card=[];
    var button=[];
    var stack=0;
    var len=level+2;
    codon=["","","","",""];
    for(var i=len-1;i>=0;i--){
        card[i] = this.physics.add.sprite(width*(0.13-(len*0.02))+(width*0.04)*(8-len)*i, 80*height/600+0.0256*height, 'card').setOrigin(0, 0).setInteractive().setDisplaySize(0.14*width*((13-len)/10),0.256*height*((13-len)/10));
    }
    check_button = this.physics.add.sprite(width*(0.13-(len*0.02))+((width*0.04)*(8-len)*(len-1)+0.256*height*((13-len)/10))/2, 265*height/600, 'check').setOrigin(0.55, 0).setInteractive().setDisplaySize(0.35*width,0.05*height);
    for(var i=3;i>=0;i--){
        button[i] = this.physics.add.sprite((70+120*i)*width/800, 330*height/600, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
    }
    //--------------------卡片設定--------------------
    {//畫禎設定
        this.anims.create({//A
            key: 'A',
            frames: this.anims.generateFrameNumbers('card', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//T
            key: 'T',
            frames: this.anims.generateFrameNumbers('card', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//C
            key: 'C',
            frames: this.anims.generateFrameNumbers('card', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//G
            key: 'G',
            frames: this.anims.generateFrameNumbers('card', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//不動動畫
            key: 'N',
            frames: this.anims.generateFrameNumbers('card', { start: 4, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//不動動畫
            key: 'check_no',
            frames: this.anims.generateFrameNumbers('check', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//不動動畫
            key: 'check_on',
            frames: this.anims.generateFrameNumbers('check', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//sA
            key: 'sA',
            frames: this.anims.generateFrameNumbers('button', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//sT
            key: 'sT',
            frames: this.anims.generateFrameNumbers('button', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//sC
            key: 'sC',
            frames: this.anims.generateFrameNumbers('button', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//sG
            key: 'sG',
            frames: this.anims.generateFrameNumbers('button', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
    }
    
    //隨機密碼
    function getRandom(max){
        if(debug==1){
            return 1;
        }
        return Math.floor(Math.random() * max)+1;
    }
    for(var i=0;i<len;i++){
        switch(getRandom(4)){
            case 1:
                ans[i]='A';
                break;
            case 2:
                ans[i]='T';
                break;
            case 3:
                ans[i]='C';
                break;
            case 4:
                ans[i]='G';
                break;    
        }
    }
    //function
    for(var i=0;i<len;i++){
        card[i].anims.play('N');
    }
    button[0].anims.play('sA');
    button[1].anims.play('sT');
    button[2].anims.play('sC');
    button[3].anims.play('sG');
    check_button.on('pointerover', function (){check_button.anims.play('check_on');},this);
    check_button.on('pointerout', function (){check_button.anims.play('check_no');},this);
    button[0].on('pointerdown', function (){clickButton(0)},this);
    button[1].on('pointerdown', function (){clickButton(1)},this);
    button[2].on('pointerdown', function (){clickButton(2)},this);
    button[3].on('pointerdown', function (){clickButton(3)},this);
    card[0].on('pointerdown', function (){clickCard(0)},this);
    card[1].on('pointerdown', function (){clickCard(1)},this);
    card[2].on('pointerdown', function (){clickCard(2)},this);
    if(level>1)
        card[3].on('pointerdown', function (){clickCard(3)},this);
    if(level>2)
        card[4].on('pointerdown', function (){clickCard(4)},this);
    // card1.on('wheel', function (deltaY) {if(deltaY>0)clickCard(card4,3);});
    check_button.on('pointerdown', function (){checkAns(this)},this);
    var x=0;
    function clickButton(id){//輸入序列
        // console.log(stack);
        if(x==1){
            stack=0;
            for(var i=0;i<len;i++){
                codon[i]="";
                card[i].anims.play('N');
            }x=0;
        }
        if(stack>=len){
            return ;
        }
        while(stack<len && codon[stack]!="")stack++;
        switch(id){
            case 0:
                card[stack].anims.play('A');
                codon[stack]='A';
                break;
            case 1:
                card[stack].anims.play('T');
                codon[stack]='T';
                break;
            case 2:
                card[stack].anims.play('C');
                codon[stack]='C';
                break;
            case 3:
                card[stack].anims.play('G');
                codon[stack]='G';
                break;
        }
        stack++;
    }
    function clickCard(id){//刪除序列
        card[id].anims.play('N');
        codon[id]='';
        x=0;
        if(stack>id)stack=id;
    }
    // ans=['T', 'T', 'C', 'C'];
    instruction=this.add.text(0.26*width, 0.7*height, '\nC: '+lan_text.correct+'\nM: '+lan_text.misplaced+'\nW: '+lan_text.wrong, { fontFamily: 'fantasy', fontSize: '32px', fill: '#000000' });
    text=this.add.text(0.7*width, 150*height/600, '', { fontFamily: 'fantasy', fontSize: '32px', fill: '#111111' });
    condition=this.add.text(0.7*width, 55*height/600, '', { fontFamily: 'fantasy', fontSize: '48px', fill: '#000000' });
    output="";
    function checkAns(where){
        for(var i=0;i<len;i++){
            if(codon[i]==""){
                //alert("")
                return ;
            }
        }
        var correct=0;
        var misplaced=0;
        var accept=[0,0,0,0];
        //compute
        var ans_status=[0,0,0,0];
        var coden_status=[0,0,0,0];
        for(var i=0 ; i<len ; i++){
            if(ans[i]==codon[i]){
                accept[i]=1;
                correct+=1;
                ans_status[i]=1;
                coden_status[i]=1;
                continue;
            }
        }
        for(var i=0 ; i<len ; i++){
            if(coden_status[i]==1)continue;
            for(var j=0;j<len;j++){
                if(ans_status[j]==1)continue;
                if(ans[j]==codon[i]){
                    misplaced++;
                    ans_status[j]=1;
                    coden_status[i]=1;
                    console.log(i,j);
                    break;
                }
            }
        }
        condition.setText(output);
        var output_temp=correct.toString()+" C, "+misplaced.toString()+" M, "+(len-correct-misplaced).toString()+" W";
        for(var i=0;i<len;i++){
            output+=codon[i];
        }
        output+="  "+output_temp+"\n";
        text.setText(output);
        condition.setText(output_temp);
        x=1;
        if(correct==len){
            output="";
            for(var i=0;i<len;i++){
                output+=ans[i];
            }
            send_string=output;
            finish_transition(where,width,0);
            setTimeout(function(){
                load_page(stage_1_pcr);
            },500);
        }
    }//console.log(ans);
    //文字說明
    PACO=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'PACO');
    Sprite=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'Sprite');
    backer=new createTextBox(this, TextBox_x, TextBox_y, TalkBox_config, 'backer');
    descript_count=1;
    descript_limit=descript_limit=Object.keys(lan_stage1_seq).length;
    //back
    back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.depth=1024;
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(stage_1_choose);
        },500);
    },this);
    //轉場動畫
    start_transition(this);
    
    
}

function update_stage1_sequence (){//與外界有關的互動
    updateTalkbox(lan_stage1_seq);
    // cursors = this.input.keyboard.createCursorKeys();
}

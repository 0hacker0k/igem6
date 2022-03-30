function preload_stage1_sequence(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    this.load.image('transition', 'img/main/transition.png');
    // this.load.image('stage1', 'img/stage1/ATCG.png');
    this.load.spritesheet('check',
        'img/stage1/check_button.png',
        { frameWidth: 250, frameHeight: 25 }
    );
    this.load.spritesheet('gene',
        'img/stage1/small_ATCG.png',
        { frameWidth: 90, frameHeight: 90 }
    );
    this.load.spritesheet('card',
        'img/stage1/ATCG.png',
        { frameWidth: 140, frameHeight: 192 }
    );//載入畫楨
    this.load.spritesheet('button',
        'img/stage1/small_ATCG.png',
        { frameWidth: 90, frameHeight: 90 }
    );
}
var codon=["","","",""];
var ans=["C","C","C","C"];
var output="";

function create_stage1_sequence (){
    //轉場設定
    transition = this.physics.add.sprite(-1100, 0, 'transition').setOrigin(0, 0).setScale(2,1);
    transition.depth = 1024;
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0);
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    // card = this.physics.add.group();//動態群組
    // card1 = this.physics.add.sprite(100, 50, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
    // card2 = this.physics.add.sprite(250, 50, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
    // card3 = this.physics.add.sprite(400, 50, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
    // card4 = this.physics.add.sprite(550, 50, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
    var card=[];
    var button=[];
    var stack=0;
    var len=4;
    for(var i=len-1;i>=0;i--){
        card[i] = this.physics.add.sprite(50+120*i, 50, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
    }
    check_button = this.physics.add.sprite(160, 235, 'check').setOrigin(0, 0).setInteractive();
    for(var i=len-1;i>=0;i--){
        button[i] = this.physics.add.sprite(70+120*i, 300, 'card').setOrigin(0, 0).setInteractive().setScale(0.8);
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
    card[3].on('pointerdown', function (){clickCard(3)},this);
    // card1.on('wheel', function (deltaY) {if(deltaY>0)clickCard(card4,3);});
    check_button.on('pointerdown', function (){checkAns()},this);
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
    instruction=this.add.text(100, 460, 'C: correct\nM: misplaced\nW: wrong', { fontSize: '32px', fill: '#000000' });
    text=this.add.text(540, 150, '', { fontFamily: 'fantasy', fontSize: '32px', fill: '#111111' });
    condition=this.add.text(540, 55, '', { fontFamily: 'fantasy', fontSize: '48px', fill: '#000000' });
    
    function checkAns(){
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
        var output_temp=correct.toString()+" C, "+misplaced.toString()+" M, "+(4-correct-misplaced).toString()+" W";
        output+=codon[0]+codon[1]+codon[2]+codon[3]+"  "+output_temp+"\n";
        text.setText(output);
        condition.setText(output_temp);
        x=1;
    }//console.log(ans);

    //轉場動畫
    transition.setVelocityX(-2500);
    setTimeout(function(){
        transition.setVelocityX(0);
    },800);
    
    
}

function update_stage1_sequence (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

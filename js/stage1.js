function preload_stage_1(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    // this.load.image('stage1', 'img/stage1/ATCG.png');
    this.load.image('button', 'img/main/green.png');
    this.load.spritesheet('card',
        'img/stage1/ATCG.png',
        { frameWidth: 140, frameHeight: 192 }
    );//載入畫楨
}
var codon=["A","A","A","A"];
var ans=["C","C","C","C"];
var output="";
function create_stage_1 (){
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0);
    platforms = this.physics.add.staticGroup();//分為靜態與動態，靜態的只有大小與位置，動態的有速度、加速度、反彈、碰撞。
    card = this.physics.add.group();//動態群組
    card1 = this.physics.add.sprite(100, 50, 'card').setOrigin(0, 0).setInteractive();
    card2 = this.physics.add.sprite(250, 50, 'card').setOrigin(0, 0).setInteractive();
    card3 = this.physics.add.sprite(400, 50, 'card').setOrigin(0, 0).setInteractive();
    card4 = this.physics.add.sprite(550, 50, 'card').setOrigin(0, 0).setInteractive();
    button = this.physics.add.sprite(720, 140, 'button').setOrigin(0, 0).setInteractive();
    //--------------------卡片設定--------------------
    this.anims.create({//向左移動動畫
        key: 'A',
        frames: this.anims.generateFrameNumbers('card', { start: 0, end: 0 }),
        frameRate: 10,
        repeat: -1
    });
    this.anims.create({//向右移動動畫
        key: 'T',
        frames: this.anims.generateFrameNumbers('card', { start: 1, end: 1 }),
        frameRate: 10,
        repeat: -1
    });
    this.anims.create({//不動動畫
        key: 'C',
        frames: this.anims.generateFrameNumbers('card', { start: 2, end: 2 }),
        frameRate: 10,
        repeat: -1
    });
    this.anims.create({//不動動畫
        key: 'G',
        frames: this.anims.generateFrameNumbers('card', { start: 3, end: 3 }),
        frameRate: 10,
        repeat: -1
    });
    //隨機密碼
    function getRandom(max){
        return Math.floor(Math.random() * max)+1;
    }
    for(var i=0;i<4;i++){
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
    card1.on('pointerdown', function (){clickCard(card1,0)},this);
    card2.on('pointerdown', function (){clickCard(card2,1)},this);
    card3.on('pointerdown', function (){clickCard(card3,2)},this);
    card4.on('pointerdown', function (){clickCard(card4,3)},this);
    // card1.on('wheel', function (deltaY) {if(deltaY>0)clickCard(card4,3);});
    button.on('pointerdown', function (){checkAns()},this);
    function clickCard(card,id){//進入關卡
        switch(codon[id]){
            case 'A':
                card.anims.play('T');
                codon[id]='T';
                break;
            case 'T':
                card.anims.play('C');
                codon[id]='C';
                break;
            case 'C':
                card.anims.play('G');
                codon[id]='G';
                break;
            case 'G':
                card.anims.play('A');
                codon[id]='A';
                break;
        }
    }
    // ans=['G', 'A', 'T', 'T'];
    text=this.add.text(300, 300, '', { fill: '#000000' });
    function checkAns(){
        var correct=0;
        var misplaced=0;
        var len=4;
        //compute
        var ans_status=[0,0,0,0];
        var coden_status=[0,0,0,0];
        for(var i=0 ; i<len ; i++){
            if(ans[i]==codon[i]){
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
        }//TCTA
        output+=codon[0]+codon[1]+codon[2]+codon[3]+"  "+correct.toString()+" correct , "+misplaced.toString()+" misplaced\n";
        text.setText(output);
        
    }console.log(ans);
}

function update_stage_1 (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}
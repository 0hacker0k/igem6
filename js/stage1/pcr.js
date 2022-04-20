function preload_stage1_pcr(){
    this.load.image('background', 'img/stage1/background.png');//載入一般圖片
    load_transition(this);
    this.load.image('back', 'img/main/back.png');
    for(var i=0;i<18;i++){
        var i_0=i.toString();
        var i_1=(i+1).toString();
        var locate;
        if(i+1<10){
            locate='0'+i_1;
        }else{
            locate=i_1;
        }
        this.load.image('end'+i_0, 'img/stage1/congratulations/congratulations_'+locate+'.png');
    }
    this.load.image('end', 'img/stage1/congratulations.jpg');
    this.load.spritesheet('gene',
        'img/stage1/small_ATCG.png',
        { frameWidth: 90, frameHeight: 90 }
    );
}
function create_stage1_pcr (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    {//畫禎設定
        this.anims.create({//A
            key: 'A',
            frames: this.anims.generateFrameNumbers('gene', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//T
            key: 'T',
            frames: this.anims.generateFrameNumbers('gene', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//C
            key: 'C',
            frames: this.anims.generateFrameNumbers('gene', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//G
            key: 'G',
            frames: this.anims.generateFrameNumbers('gene', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
    }
    //send_string是前面送來的序列
    var frames = this.textures.get('gene').getFrameNames();
    var x = 100*width/800;
    var y = 100*width/800;
    var x2 = 100*width/800;
    var y2 = 400*width/800;
    var len = level+2;
    var gene_goal=[];
    var gene_move=[];
    var final_x,final_y;
    var final_object;
    var correct=0;
    var input_string=[];
    var game_end=0;
    var move_string=['A','T','C','G'];
    for(var i=0;i<len;i++){
        input_string[i]='N';
        move_string[i+4]=send_string[i];
    }
    for(var i=0;i<len+4;i++){
        var temp=move_string[i];
        var rnd=Math.floor(Math.random() * (len+4));
        move_string[i]=move_string[rnd];
        move_string[rnd]=temp;
    }
    for (var i = 0; i < len; i++){
        gene_goal[i] = this.physics.add.sprite(x, y, 'gene').setInteractive().setDisplaySize(width/800*80,height/600*80);
        gene_goal[i].anims.play(send_string[i]);
        //this.input.setDraggable(image);
        x += 90*width/800;
    }
    for (var i = 0; i < len+4; i++){
        gene_move[i] = this.physics.add.sprite(x2, y2, 'gene').setInteractive().setDisplaySize(width/800*80,height/600*80);
        var temp="";
        switch(move_string[i]){
            case 'A':
                temp="T";
                break;
            case 'T':
                temp="A";
                break;
            case 'C':
                temp="G";
                break;
            case 'G':
                temp="C";
                break;
        }gene_move[i].anims.play(temp);
        this.input.setDraggable(gene_move[i]);
        x2 += 90*width/800;
    }
    // this.input.topOnly = true;//只抓最上面的
    this.input.on('drag', function (pointer, gameObject, dragX, dragY) {
        gameObject.x = dragX;
        gameObject.y = dragY;
        final_x = dragX;
        final_y = dragY;
        final_object=gameObject;
        
    });
    this.input.on('pointerdown', function (pointer, gameObject, dragX, dragY) {
        // console.log(gameObject);
        // console.log(dragX);
        // console.log(dragY);
        // console.log(input_string);
    });
    this.input.on('pointerup', function (pointer) {
        if(game_end==1){
            load_page(map_1);
            return ;
        }
        var status=0;
        var temp=0;
        for(var i=0;i<len;i++){
            var tempx=final_x-gene_goal[i].x;
            var tempy=final_y-(gene_goal[i].y+90*height/600);
            if(tempx*tempx+tempy*tempy<800){
                status=1;
                temp=i;
                // console.log("at");
                break;
            }
        }
        for(var i=0;i<len+4;i++){
            if(gene_move[i]==final_object){
                if(move_string[i]!=send_string[temp] || input_string[temp]!='N'){
                    status=0;
                }
                if(status==0){
                    final_object.x=100*width/800+(90*width/800*i);
                    final_object.y=y2;
                    //input_string[i]='N';
                }else{
                    correct++;
                    final_object.x=gene_goal[temp].x;
                    final_object.y=gene_goal[temp].y+(90*width/800);
                    input_string[temp]=move_string[i];
                    this.setDraggable(final_object,false);
                }
                final_object=0;
                //console.log(i,temp);
                //console.log(move_string[i],send_string[temp]);
                break;
            }
        }
        if(correct==len){
            end_stage1();
        }
        //console.log(input_string);
        
        //alert(status);
    });
    var end=this.physics.add.staticGroup();
    var count=0;
    var last_one=null;
    var sett;
    function end_stage1(){
        if(last_one!=null){
            last_one.alpha=0;
        }
        last_one=end.create(0, 0, 'end'+count.toString()).setOrigin(0, 0).setInteractive().setDisplaySize(width,height);
        if(count<17){
            count++;
        }else{
            count=16;
            game_end=1;
        }
        clearTimeout(sett);
        sett=setTimeout(function(){
            end_stage1();
        },166);
        // if(alpha<1){
        //     setTimeout(function(){
        //         end_stage1();
        //     },10);
        // }
        // end.alpha=alpha;
        // alpha+=0.01;
    }
    //back
    back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.on('pointerdown', function (){
        finish_transition(this,width,0);
        setTimeout(function(){
            load_page(stage_1_sequence);
        },500);
    },this);
    //轉場動畫
    start_transition(this);
    
    
}

function update_stage1_pcr (){//與外界有關的互動
    // cursors = this.input.keyboard.createCursorKeys();
}

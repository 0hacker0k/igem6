function preload_stage1_pcr(){
    this.load.image('background', 'img/stage1/step_3_background.jpg');//載入一般圖片
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
        'img/stage1/pcr/ATCG.png',
        { frameWidth: 220, frameHeight: 462 }
    );
}
function create_stage1_pcr (){
    //轉場設定
    loading_transition(this,-500*width/800,0);
    
    //--------------------場景設定--------------------
    this.add.image(0, 0, 'background').setOrigin(0, 0).setDisplaySize(width,height);
    {//畫禎設定
        this.anims.create({//A
            key: 'Au',
            frames: this.anims.generateFrameNumbers('gene', { start: 0, end: 0 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//T
            key: 'Tu',
            frames: this.anims.generateFrameNumbers('gene', { start: 1, end: 1 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//C
            key: 'Cu',
            frames: this.anims.generateFrameNumbers('gene', { start: 2, end: 2 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//G
            key: 'Gu',
            frames: this.anims.generateFrameNumbers('gene', { start: 3, end: 3 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//A
            key: 'Ad',
            frames: this.anims.generateFrameNumbers('gene', { start: 4, end: 4 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//T
            key: 'Td',
            frames: this.anims.generateFrameNumbers('gene', { start: 5, end: 5 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//C
            key: 'Cd',
            frames: this.anims.generateFrameNumbers('gene', { start: 6, end: 6 }),
            frameRate: 10,
            repeat: -1
        });
        this.anims.create({//G
            key: 'Gd',
            frames: this.anims.generateFrameNumbers('gene', { start: 7, end: 7 }),
            frameRate: 10,
            repeat: -1
        });
    }
    //send_string是前面送來的序列
    var frames = this.textures.get('gene').getFrameNames();
    var len = level+2;
    var goal_each_spacing=90*width/800;
    var move_each_spacing=0.15*width;
    var x = (width-((len-1)*goal_each_spacing)-0.05*width)/2;
    var y = 0.3*height;
    var x2 = 0.17*width;
    var y2 = 0.81*height;
    var gene_goal=[];
    var gene_move=[];
    var final_x,final_y;
    var final_object;
    var correct=0;
    var input_string=[];
    var game_end=0;
    var move_string=['T','A','G','C'];
    if(debug==1){
        send_string=['A','T','C','G','A'];
    }
    for(var i=0;i<len;i++){
        input_string[i]='N';
    }
    for (var i = 0; i < len; i++){
        gene_goal[i] = this.physics.add.sprite(x+goal_each_spacing*i, y, 'gene').setInteractive().setDisplaySize(0.1*width,0.3*height);
        gene_goal[i].anims.play(send_string[i]+"u");
        //this.input.setDraggable(image);
    }
    for (var i = 0; i < 4; i++){
        gene_move[i] = this.physics.add.sprite(x2+move_each_spacing*i, y2, 'gene').setInteractive().setDisplaySize(0.1*width,0.3*height);
        var temp="";
        switch(i){
            case 0:
                temp="Ad";
                break;
            case 1:
                temp="Td";
                break;
            case 2:
                temp="Cd";
                break;
            case 3:
                temp="Gd";
                break;
        }gene_move[i].anims.play(temp);
        this.input.setDraggable(gene_move[i]);
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
    var space=this;
    this.input.on('pointerup', function (pointer) {
        if(game_end==1){
            load_page(map_1);
            return ;
        }
        var status=0;
        var temp=0;
        for(var i=0;i<len;i++){
            var tempx=final_x-gene_goal[i].x;
            var tempy=final_y-(gene_goal[i].y+(0.16*height));
            if(tempx*tempx+tempy*tempy<900){
                status=1;
                temp=i;
                break;
            }
        }
        for(var i=0;i<len+4;i++){
            if(gene_move[i]==final_object){
                if(move_string[i]!=send_string[temp] || input_string[temp]!='N'){
                    status=0;
                }
                if(status==0){
                    final_object.x=x2+(move_each_spacing*i);
                    final_object.y=y2;
                    //input_string[i]='N';
                }else{
                    correct++;
                    final_object.x=gene_goal[temp].x;
                    final_object.y=gene_goal[temp].y+(0.16*height);
                    input_string[temp]=move_string[i];
                    this.setDraggable(final_object,false);
                    gene_move[i]=space.physics.add.sprite(x2+move_each_spacing*i, y2, 'gene').setInteractive().setDisplaySize(0,0);
                    var temp="";
                    switch(i){
                        case 0:
                            temp="Ad";
                            break;
                        case 1:
                            temp="Td";
                            break;
                        case 2:
                            temp="Cd";
                            break;
                        case 3:
                            temp="Gd";
                            break;
                    }gene_move[i].anims.play(temp);
                    bigger(gene_move[i],1);
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
    function bigger(object,count){
        object.setDisplaySize(count*0.0025*width,count*0.0075*height);
        if(count==40){
            space.input.setDraggable(object);
            return ;
        }
        setTimeout(function(){
            bigger(object,count+1);
        },13);
    }
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
        },130);
        stage_complete[1]=1;
        // if(alpha<1){
        //     setTimeout(function(){
        //         end_stage1();
        //     },10);
        // }
        // end.alpha=alpha;
        // alpha+=0.01;
    }
    //文字說明
    TextBox_x=width*0.15;
    TextBox_y=height*0.75;
    var config =
    {
        wrapWidth: width*0.5,
        fixedWidth: width*0.55,
        fixedHeight: height*0.15,
    };
    //PACO=new createTextBox(this, TextBox_x, TextBox_y, config, 'PACO');
    Sprite=new createTextBox(this, TextBox_x, TextBox_y, config, 'Sprite');
    //Sprite.start(lan_stage1_pcr.vo_1,50);
    descript_count=1;
    descript_limit=11;
    //back
    var back=this.physics.add.sprite(width*0.02, height*0.03, 'back').setOrigin(0, 0).setInteractive().setDisplaySize(height*0.1,height*0.1);
    back.depth=1024;
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
    updateTalkbox(lan_stage1_pcr);
    // cursors = this.input.keyboard.createCursorKeys();
}

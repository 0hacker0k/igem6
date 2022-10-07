//Warning: All the necessary images are all in the stage1's folder
var count=0;
var sett;
function preload_congratulation(where){
    count=0
    game_end=0;
    last_one=null;
    for(var i=0;i<18;i++){
        var i_0=i.toString();
        var i_1=(i+1).toString();
        var locate;
        if(i+1<10){
            locate='0'+i_1;
        }else{
            locate=i_1;
        }
        where.load.image('end'+i_0, prefix+'/stage1/congratulations/congratulations_'+locate+'.png');
    }
    where.load.image('end', prefix+'/stage1/congratulations.jpg');
}

function create_congratulation(where,nextscene=map_1){
    where.input.on("pointerup",function(){
        if(game_end==1){
            load_page(nextscene);
            return ;
        }
    },where);
}

function end_stage(where,stageid){
    if(last_one!=null){
        last_one.alpha=0;
    }
    // console.log(where);
    last_one=where.add.image(0, 0, 'end'+count.toString()).setOrigin(0, 0).setDisplaySize(width,height);
    if(count<17){
        count++;
    }else{
        count=16;
        game_end=1;
    }
    clearTimeout(sett);
    sett=setTimeout(function(){
        end_stage(where,stageid);
    },100);
    stage_complete[stageid]=1;
}
// function update_congratulation(where){

// }
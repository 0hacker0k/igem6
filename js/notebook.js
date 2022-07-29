var x=1,y=10;
// var lab;
// var month;
function setpage(x1,y1){
    x=x1;
    y=y1;
}
function switchbtn(id){
    if(id>=10)y=id;
    else{
        x=id+4;
    }
    id=x+y;
    var lab="";
    switch(y){
        case 10:
            lab="wl";
            break;
        case 20:
            lab="dl";
            break;
        case 30:
            lab="hp";
            break;
    }
    
    if(!document.getElementById("right_div")){
        location.href = "./notebook_detail.php?group="+lab+"&month="+x;
    }else{
        goal="./notebook/notebook_"+lab+"_"+x+".php";
        $("#right_div").load(goal);
    }
    // var month=x;
    // location.href = "./notebook_detail.php?group="+lab+"&month="+month;
}
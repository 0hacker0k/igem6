var x=1,y=10;
function setpage(x1,y1){
    x=x1;
    y=y1;
}
function switchbtn(id){
    if(id>=10)y=id;
    else x=id;
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
    var month=x+4;
    location.href = "./notebook_detail.php?group="+lab+"&month="+month;
}
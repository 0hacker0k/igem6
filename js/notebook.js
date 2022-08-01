var x=5,y=10;
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
    goal="./notebook/notebook_"+lab+"_"+x+".php";
    $("#right_div").load(goal);
    if (location.href.includes('?')) {
        history.pushState({}, null, location.href.split('?')[0]);
    }
    const url = new URL(location.href);
    url.searchParams.set('group', lab);
    history.pushState(null, '', url);
    url.searchParams.set('month', x);
    history.pushState(null, '', url);
    // var month=x;
    // location.href = "./notebook_detail.php?group="+lab+"&month="+month;
}
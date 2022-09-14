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
    jump(lab);
}
var urlParams = new URLSearchParams(window.location.search);

function next_page(){
    if(x<10)
        x+=1;
    var lab="wl";
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
    }jump(lab);
}
function last_page(){
    if(x>5)
        x-=1;
    var lab="wl";
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
    }jump(lab);
}
function jump(lab){
    var goal;
    if (location.href.includes('.php')) {
        goal="./notebook/notebook_"+lab+"_"+x+".php";
    }else{
        goal="./notebook/notebook_"+lab+"_"+x+".html";
    }
    $("#content").load(goal);
    if (location.href.includes('?')) {
        history.pushState({}, null, location.href.split('?')[0]);
    }
    const url = new URL(location.href);
    url.searchParams.set('group', lab);
    history.pushState(null, '', url);
    url.searchParams.set('month', x);
    history.pushState(null, '', url);
    var left_labels = document.getElementsByClassName("leftlabel");
    for (i = 0; i < left_labels.length; i++) {
        var left_label = left_labels[i];
        if (left_label.classList.contains('current_leftlabel')) {
            left_label.classList.remove('current_leftlabel');
        }
    }
    var top_labels = document.getElementsByClassName("toplabel");
    for (i = 0; i < top_labels.length; i++) {
        var top_label = top_labels[i];
        if (top_label.classList.contains('current_toplabel')) {
            top_label.classList.remove('current_toplabel');
        }
    }
    left_labels[x-5].classList.toggle("current_leftlabel");
    top_labels[y/10-1].classList.toggle("current_toplabel");
    control_button();
}
function control_button(){
    urlParams = new URLSearchParams(window.location.search);
    if(!(x>5)){
        if (!document.getElementById("last").classList.contains('invisible')) {
            document.getElementById("last").classList.toggle("invisible");
        }
    }else{
        if (document.getElementById("last").classList.contains('invisible')) {
            document.getElementById("last").classList.remove("invisible");
        }
    }
    if(!(x<10)){
        if (!document.getElementById("next").classList.contains('invisible')) {
            document.getElementById("next").classList.toggle("invisible");
        }
    }else{
        if (document.getElementById("next").classList.contains('invisible')) {
            document.getElementById("next").classList.remove("invisible");
        }
    }
    if(urlParams.has('month')==false || urlParams.has('group')==false){
        if (!document.getElementById("next").classList.contains('invisible')) {
            document.getElementById("next").classList.toggle("invisible");
        }
        if (!document.getElementById("last").classList.contains('invisible')) {
            document.getElementById("last").classList.toggle("invisible");
        }
    }
    
    $('html,body').animate({ scrollTop: 0 }, 0);
}

control_button();
if(urlParams.has('month')==true && urlParams.has('group')==true){
    var group=urlParams.get('group');
    var month=urlParams.get('month');
    var goal;
    if (location.href.includes('.php')) {
        goal="./notebook/notebook_"+group+"_"+Number(month)+".php";
    }else{
        goal="./notebook/notebook_"+group+"_"+Number(month)+".html";
    }
    $("#content").load(goal);
    x=Number(month);
    switch(group){
        case "wl":
            y=10;
            break;
        case "dl":
            y=20;
            break;
        case "hp":
            y=30;
            break;
    }
    jump(group);
}
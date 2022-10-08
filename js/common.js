var screen_height=window.innerHeight;
var screen_width=window.innerWidth;
function guide_change(){
    var guide=document.getElementById("guide");
    var guide_content=document.getElementById("guide_content");
    var guide_control=document.getElementById("expansion");
    var content=document.getElementsByClassName("in_center")[0];
    guide_content.style.paddingTop=document.getElementById("navbar").clientHeight+"px";
    guide_content.style.height=screen_height+"px";
    guide_content.style.marginTop=(screen_height*0.1)+"px";
    guide_control.style.height=screen_height+"px";
    guide_control.style.marginTop=(screen_height*0.1)+"px";
    guide.style.height=(screen_height*1.1)+"px";
    guide.style.left= "calc("+(-document.getElementById("guide_content").clientWidth)+"px)";// - 0.5em
    guide.style.transition="0.0s";
    setTimeout(() => {
        guide.style.transition="0.5s";
    }, 1);
    // if(guide.clientWidth+content.clientWidth+1>screen_width){

    // }
    
}
// display_mod=1;
function guide_toggle(){
    var guide=document.getElementById("guide");
    var triangle=document.getElementsByClassName("triangle_to_left")[0];
    if(triangle==undefined){
        triangle=document.getElementsByClassName("triangle_to_right")[0];
        guide.style.left= "0%";
        triangle.classList.add("triangle_to_left");
        triangle.classList.remove("triangle_to_right");
    }else{
        guide.style.left= "calc("+(-document.getElementById("guide_content").clientWidth)+"px)";// - 0.5em
        triangle.classList.add("triangle_to_right");
        triangle.classList.remove("triangle_to_left");
    }
}

window.addEventListener('resize',
    () => {
        guide_change();
        screen_height=window.innerHeight;
        screen_width=window.innerWidth
    }
, false );
guide_change();

var screen_height=window.innerHeight;
var screen_width=window.innerWidth;
function guide_change(){
    var guide=document.getElementById("guide");
    var guide_content=document.getElementById("guide_content");
    var content=document.getElementsByClassName("in_center")[0];
    
    // console.log(guide[0].style);
    guide_content.style.paddingTop=document.getElementById("navbar").clientHeight+"px";
    if(guide.clientWidth+content.clientWidth+1>screen_width){

    }
}

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
    }
, false );
guide_change();
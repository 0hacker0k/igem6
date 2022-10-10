var screen_height=window.innerHeight;
var screen_width=window.innerWidth;
display_mod=0;
var protocol_count=16;
function protocol_change(id){
    var content;
    for(var i=1;i<=protocol_count;i++){
        content=document.getElementById(i);
        if(content==null) continue;
        content.style.display="none";
    }
    content=document.getElementById(id);
    content.style.display="block";
}
window.addEventListener('resize',
    () => {
        screen_height=window.innerHeight;
        screen_width=window.innerWidth;
    }
    , false );
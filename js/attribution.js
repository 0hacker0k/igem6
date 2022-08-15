var sticker=null;
var note;
var myPosition;
var temp;
var myWindow = $(window); 
var noteheight;
var notePosition;
document.addEventListener('DOMContentLoaded', function(){
    jQuery(function($){
        myPosition = myWindow.scrollTop();
        note=document.getElementById("nav_note");
        notePosition = $('#nav_note').offset().top;
        noteheight=note.scrollHeight;
        temp=notePosition-noteheight*0.4;
        move_note();
        // myPosition = myWindow.scrollTop();
        myWindow.scroll(function(){
            temp=notePosition-((view_to_pixels("100vh")-note.clientHeight)/2);
            move_note();
        }); 
    });  
});
function view_to_pixels(value) {
    var parts = value.match(/([0-9]+[\.]*[0-9]+)(vh|vw)/);
    var num = Number(parts[1]);
    var h_and_w = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]];
    // alert(h_and_w * (num/100));
    return h_and_w * (num/100);
}

function locate_note(){
    notePosition = $('#attribution_left').offset().top;
    temp=notePosition-((view_to_pixels("100vh")-note.clientHeight)/2);
    move_note();
}
function move_note(){
    // console.log(notePosition,noteheight);
    if (myPosition > temp) {
        if (myPosition > temp) {
            if(sticker!=null)
                clearTimeout(sticker);
            note.style.top=(myPosition-temp)+"px";
            note.style.backgroundImage="url(img/note_touch3.png)";
            sticker=setTimeout(function(){
                note_stick(note);
            },300);
        } else {
            note.style.top=0+"px";
        }
    }
    myPosition = myWindow.scrollTop();
}
function move_note2(){
    setTimeout(() => {
        move_note();
    }, 0.1);
}
function note_stick(item){
    item.style.backgroundImage="url(img/note_untouch3.png)";
}

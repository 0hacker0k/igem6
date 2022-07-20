var sticker=null;
document.addEventListener('DOMContentLoaded', function(){
    jQuery(function($){
        var myWindow = $(window); 
        var myPosition = myWindow.scrollTop();
        var note=document.getElementById("nav_note");
        var notePosition = $('#nav_note').offset().top;
        var noteheight=note.scrollHeight;
        temp=notePosition-noteheight*0.4;
        move_note(note,myPosition,temp);
        myPosition = myWindow.scrollTop();
        myWindow.scroll(function(){
            temp=notePosition-noteheight*0.4;
            move_note(note,myPosition,temp);
            myPosition = myWindow.scrollTop();
        }); 
    });  
});
function move_note(note,myPosition,temp){
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
    
}
function note_stick(item){
    item.style.backgroundImage="url(img/note_untouch3.png)";
}
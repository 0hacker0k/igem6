var sticker=null;
document.addEventListener('DOMContentLoaded', function(){
    jQuery(function($){
        var myWindow = $(window); 
        var myPosition = myWindow.scrollTop();
        var note=document.getElementById("nav_note");
        var notePosition = $('#nav_note').offset().top;
        var noteheight=note.scrollHeight;
        myWindow.scroll(function(){
            temp=notePosition-noteheight*0.6;
        if (myPosition > temp) {
            if (myWindow.scrollTop() > temp) {
                if(sticker!=null)
                    clearTimeout(sticker);
                note.style.top=(myPosition-temp)+"px";
                note.style.backgroundImage="url(img/note_touch.png)";
                sticker=setTimeout(function(){
                    note_stick(note);
                },300);
            } else {
                note.style.top=0+"px";
            }
        }
        myPosition = myWindow.scrollTop();
        }); 
    });  
});
function note_stick(item){
    item.style.backgroundImage="url(img/note_untouch.png)";
}
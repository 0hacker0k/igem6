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
                note.style.top=(myPosition-temp)+"px";
            } else {
                note.style.top=0+"px";
            }
        }
        myPosition = myWindow.scrollTop();
        }); 
    });  
});
// function note_move(item,goal){
//     note.style.top=(myPosition-notePosition+noteheight)+"px";
// }
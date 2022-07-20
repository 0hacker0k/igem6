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
        myPosition = myWindow.scrollTop();
        myWindow.scroll(function(){
            temp=notePosition-noteheight*0.4;
            move_note();
        }); 
    });  
});
function move_note(){
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
    myPosition = $(window).scrollTop();
}
function move_note2(){
    setTimeout(() => {
        move_note();
    }, 0.1);
}
function note_stick(item){
    item.style.backgroundImage="url(img/note_untouch3.png)";
}
let lazyImages = []
const option = {
    root: null,
    rootMargin: "200px 0px 200px 0px",
    threshold: [0]
}
const observer = new IntersectionObserver(entries => {
    entries.forEach( image => {
        if(image.isIntersecting) {
            image.target.src = image.target.dataset.src;
            observer.unobserve(image.target);
        }
    });
}, option);
const imgGroup = document.getElementsByClassName("lazy");

function watt(){
    Array.prototype.forEach.call(imgGroup,element => observer.observe(element));
}
setTimeout(() => {
    watt();
}, 500);

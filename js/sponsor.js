var card_wait=[];
var card_run=[];
var card_row=2;
var all_id= new Map();
var card_move=[];

var myWindow = $(window); 
var screen_width=view_to_pixels("100vw");
// document.addEventListener('DOMContentLoaded', function(){
//     jQuery(function($){
//         myPosition = myWindow.scrollTop();
//         note=document.getElementById("sponsor_card_1");
//         notePosition = $('#nav_note').offset().top;
//         noteheight=note.scrollHeight;
//         temp=notePosition-noteheight*0.4;
//         move_note();
//         // myPosition = myWindow.scrollTop();
//         myWindow.scroll(function(){
//             temp=notePosition-((view_to_pixels("100vh")-note.clientHeight)/2);
//             move_note();
//         }); 
//     });  
// });
function stop_move(div){
    var temp=div;
    while(temp.getAttribute("data-id")==null){
        temp=temp.parentNode;
    }
    card_move[all_id.get(temp.getAttribute("data-id"))]=0;
}
function start_move(div){
    var temp=div;
    while(temp.getAttribute("data-id")==null){
        temp=temp.parentNode;
    }
    card_move[all_id.get(temp.getAttribute("data-id"))]=1;
}
function move_init(){
    var all_run=document.getElementsByClassName("sponsor_body");
    card_row=all_run.length;
    for(var i=0;i<card_row;i++){
        card_wait[i]=new Array();
        card_run[i]=new Array();
    }
    for(var i=0;i<card_row;i++){
        all_id.set(all_run[i].getAttribute("data-id"), i);
        var cards=all_run[i].getElementsByClassName("sponsor_card");
        var cards_length=cards.length;
        for(var j=0;j<cards_length;j++){
            cards[j].style.display="none";
            card_wait[i].push(cards[j]);
        }
        all_run[i].onmouseover = function(event){stop_move(event.target)};
        all_run[i].onmouseout = function(event){start_move(event.target)};
    }
    for(var i=0;i<card_row;i++){
        card_move[i]=1;
    }
}
function card_moving(){
    for(var i=0;i<card_row;i++){
        var max_x=0;
        if(card_run[i].length>0){
            max_x=remove_px(card_run[i][card_run[i].length-1].style.left)+card_run[i][card_run[i].length-1].clientWidth;
        }//console.log(max_x);
        if(max_x<screen_width){
            if(card_wait[i][0]!=null){
                card_run[i].push(card_wait[i].shift());
                card_run[i][card_run[i].length-1].style.display="block";
                card_run[i][card_run[i].length-1].style.left=screen_width+"px";
            }
        }
        if(card_run[i][0]!=null && remove_px(card_run[i][0].style.left)+(card_run[i][0].clientWidth*1.05)<0){
            card_wait[i].push(card_run[i].shift());
        }
        if(card_move[i]==1){
            cards_length=card_run[i].length;
            for(var j=0;j<cards_length;j++){
                card_run[i][j].style.left=(remove_px(card_run[i][j].style.left)-2) + "px";
                // console.log(card_run[i][j].style.left);
                // if(cards[i].left<screen_width){
                //     ;
                // }
            }
        }
        // console.log(card_move[i]);
    }
    
    // if(document.getElementById("mylist"+id).classList.contains('show'))
    // document.getElementById("mylist"+id).classList.toggle("show");
    setTimeout(function(){
        card_moving();
    },10);
}
function view_to_pixels(value) {
    var parts = value.match(/([0-9]+[\.]*[0-9]+)(vh|vw)/);
    var num = Number(parts[1]);
    var h_and_w = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]];
    return h_and_w * (num/100);
}
function remove_px(string){
    if(string=="")return screen_width;
    var num=parseInt(string.substr(0,string.indexOf("px")));
    return num;
}

// function locate_note(){
//     notePosition = $('#attribution_left').offset().top;
//     temp=notePosition-noteheight*0.4;
//     move_note();
// }
// function move_note(){
//     // console.log(notePosition,noteheight);
//     if (myPosition > temp) {
//         if (myPosition > temp) {
//             if(sticker!=null)
//                 clearTimeout(sticker);
//             note.style.top=(myPosition-temp)+"px";
//             note.style.backgroundImage="url(img/note_touch3.png)";
//             sticker=setTimeout(function(){
//                 note_stick(note);
//             },300);
//         } else {
//             note.style.top=0+"px";
//         }
//     }
//     myPosition = myWindow.scrollTop();
// }
// function move_note2(){
//     setTimeout(() => {
//         move_note();
//     }, 0.1);
// }
// function note_stick(item){
//     item.style.backgroundImage="url(img/note_untouch3.png)";
// }

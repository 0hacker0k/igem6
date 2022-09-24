var map_icon = document.getElementById("map_icon");
var button = document.getElementById("testBtn");
var screen_height=window.innerHeight;
var now_page;
if (map_icon.classList && map_icon && button) {
    button.onclick = function() {
        if (this.value == '暂停') {
            map_icon.classList.add('stop');
            this.value = '播放';
        } else {
            map_icon.classList.remove('stop');
            this.value = '暂停';
        }
    };
}
window.addEventListener('click',function(){
    
});
document.addEventListener('DOMContentLoaded', function(){
    jQuery(function($){
        var myWindow = $(window); 
        myWindow.scroll(function(){
            screen_move(myWindow.scrollTop());
        }); 
    });  
});
function screen_move(scroll){
    var go_page=Math.floor(scroll/screen_height+1);
    move_epa(go_page);
    if(go_page>now_page){
        var last_page=document.getElementById("page_"+(now_page));
        var next_page=document.getElementById("page_"+(now_page+1));
        if(last_page!=null){
            last_page.style.top=((screen_height-last_page.clientHeight)/2-screen_height)+"px";
            if(last_page.first==undefined){
                last_page.first=1;
            }else{
                last_page.style.transition="1.0s";
            }
        }
        if(next_page!=null){
            next_page.style.top=((screen_height-next_page.clientHeight)/2)+"px";
            if(next_page.first==undefined){
                next_page.style.transition="1.0s";
            }
        }
    }else if(go_page<now_page){
        var next_next_page=document.getElementById("page_"+(now_page-2));
        var next_page=document.getElementById("page_"+(now_page-1));
        var last_page=document.getElementById("page_"+(now_page));
        if(next_next_page!=null){
            next_next_page.style.top=(-screen_height)+"px";
            if(next_next_page.first==undefined){
                next_next_page.first=1;
            }
        }
        if(next_page!=null){
            next_page.style.top=((screen_height-next_page.clientHeight)/2)+"px";
            next_page.style.transition="1.0s";
        }
        if(last_page!=null){
            last_page.style.top=(screen_height+(screen_height-last_page.clientHeight)/2)+"px";
        }
    }
    now_page=Math.floor(scroll/screen_height+1);
};
function move_epa(go_page){
    console.log(go_page);
    var epa=document.getElementById("epa");
    var map_icon=document.getElementById("map_icon");
    var map=document.getElementById("map");
    if(go_page>=1 && go_page<=3){
        map.style.bottom="-100%";
    }else{
        map.style.bottom="2%";
    }
    switch(go_page){
        case 4:
            epa.move_to(0.36,0.45);
            break;
        case 5:
            epa.move_to(0.36,0.25);
            break;
        case 6:
            epa.move_to(0.45,0.55);
            break;
        case 7:
            epa.move_to(0.35,0.60);
            break;
        case 8:
            epa.move_to(0.17,0.47);
            break;
        case 9:
            epa.move_to(0.15,0.30);
            break;
        case 10:
            epa.move_to(0.25,0.10);
            break;
        case 11:
            epa.move_to(0.45,0.04);
            break;
        case 12:
            epa.move_to(0.55,0.09);
            break;
        case 13:
            epa.move_to(0.67,0.20);
            break;
        case 14:
            epa.move_to(0.67,0.37);
            break;
        case 15:
            epa.move_to(0.54,0.45);
            break;
        case 16:
            epa.move_to(0.47,0.27);
            break;
        case 17:
            epa.move_to(0.46,0.55);
            break;
        case 18:
            epa.move_to(0.42,0.68);
            break;
        case 19:
            epa.move_to(0.28,0.67);
            break;
        case 20:
            epa.move_to(0.36,0.45);
            break;
        default:
            ;
    }
}
HTMLImageElement.prototype.move_to=function(x,y){
    this.style.bottom=(map_icon.clientHeight*y)+"px";
    this.style.right=(map_icon.clientWidth*x)+"px";
}
var parameter=document.getElementById("parameter");
parameter.innerHTML = "#first_page{--nav_height: "+document.getElementById("navbar").clientHeight+"px;}";
now_page=Math.floor($(window).scrollTop()/screen_height);
screen_move($(window).scrollTop());
// if (myWindow.scrollTop() > myPosition) {
//     // $("#navbar").addClass("header-hide");
//     var item=document.getElementById("navbar");
//     item.style.top="-"+(item.clientHeight+1)+"px";
// }

//  else if(location.href.indexOf('webgame')==-1 && myWindow.scrollTop() < myPosition-20){
//     document.getElementById("navbar").style.top="0px";
// }

    // // alert(myPosition);
    // if (myPosition > 60) {
           
    // }else if(myPosition <= 3){
    //     document.getElementById("navbar").style.top="0px";
    // }
    // myPosition = myWindow.scrollTop();
    
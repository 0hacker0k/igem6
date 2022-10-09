var map_icon = document.getElementById("map_icon");
var button = document.getElementById("testBtn");
var screen_height=window.innerHeight;
var screen_width=window.innerWidth;
var now_page;
document.addEventListener('DOMContentLoaded', function(){
    jQuery(function($){
        var myWindow = $(window); 
        myWindow.scroll(function(){
            screen_move(myWindow.scrollTop());
        }); 
    });  
});
var page_running=false;
var going_top=false;

function screen_move(scroll){
    if(page_running==true)return ;
    var go_page=Math.floor(scroll/screen_height+1.5);
    var status_temp=0;
    while(go_page!=now_page){
        move_epa(go_page);
        if(go_page>now_page){
            var last_page=document.getElementById("page_"+(go_page-1));
            var next_page=document.getElementById("page_"+(go_page));
            if(last_page!=null){
                last_page.page_num=now_page;
                if(other_animation(last_page,"down","last")){
                    last_page.style.top=((screen_height-last_page.clientHeight)/2)+"px";
                    last_page.style.transition="0.0s";
                    last_page.style.opacity=1;
                    if(last_page.animate!=null)clearTimeout(last_page.animate);
                    last_page.animate=setTimeout(() => {
                        last_page.style.top=((screen_height-last_page.clientHeight)/2-screen_height)+"px";
                        last_page.style.transition="1.0s";
                        last_page.animate=null;
                    }, 1);
                }
            }
            if(next_page!=null){
                next_page.page_num=now_page+1;
                if(other_animation(next_page,"down","next")){
                    next_page.style.top=((screen_height-next_page.clientHeight)/2+screen_height)+"px";
                    next_page.style.transition="0.0s";
                    next_page.style.opacity=1;
                    // var page_text=next_page.getElementsByClassName("white_background")[0];
                    // var text_temp;
                    // if(page_text!=undefined){
                        
                    //     text_temp=page_text.getBoundingClientRect().top;
                    //     console.log(text_temp);
                    //     page_text.style.transition="0.0s";
                    //     page_text.style.top=screen_height+"px";
                    // }
                    if(next_page.animate!=null)clearTimeout(next_page.animate);
                    next_page.animate=setTimeout(() => {
                        next_page.style.top=((screen_height-next_page.clientHeight)/2)+"px";
                        next_page.style.transition="1.0s";
                        next_page.animate=null;
                        // if(page_text!=undefined){
                        //     setTimeout(() => {
                        //         page_text.style.transition="1.0s";
                        //         page_text.style.top=text_temp+"px";
                        //     }, 1000);
                        // }
                    }, 1);
                }
            }
        }else if(go_page<now_page){
            var next_page=document.getElementById("page_"+(go_page));
            var last_page=document.getElementById("page_"+(go_page+1));
            if(next_page!=null){
                next_page.page_num=now_page-1;
                if(other_animation(next_page,"up","next")){
                    next_page.style.top=((screen_height-next_page.clientHeight)/2-screen_height)+"px";
                    next_page.style.transition="0.0s";
                    next_page.style.opacity=1;
                    if(next_page.animate!=null)clearTimeout(next_page.animate);
                    next_page.animate=setTimeout(() => {
                        next_page.style.top=((screen_height-next_page.clientHeight)/2)+"px";
                        next_page.style.transition="1.0s";
                        next_page.animate=null;
                    }, 1);
                }
            }
            if(last_page!=null){
                last_page.page_num=now_page;
                if(other_animation(last_page,"up","last")){
                    last_page.style.top=((screen_height-last_page.clientHeight)/2)+"px";
                    last_page.style.transition="0.0s";
                    last_page.style.opacity=1;
                    if(last_page.animate!=null)clearTimeout(last_page.animate);
                    last_page.animate=setTimeout(() => {
                        last_page.style.top=((screen_height-last_page.clientHeight)/2+screen_height)+"px";
                        last_page.style.transition="1.0s";
                        last_page.animate=null;
                    }, 1);
                }
            }
        }
        // now_page+=(go_page>now_page)?1:-1;
        while(go_page!=now_page+1 && go_page!=now_page-1){
            var page=document.getElementById("page_"+(now_page));
            if(page.animate!=null)clearTimeout(page.animate);
            page.style.transition="0.0s";
            page.style.top=((screen_height-last_page.clientHeight)/2-screen_height)+"px";
            now_page+=(go_page>now_page)?1:-1;
        }
        now_page+=(go_page>now_page)?1:-1;
        status_temp=1;
    }
    // if(status_temp==1 && going_top==false){
    //     page_running=true;
    //     $('html,body').stop(true,false);
    //     $('html,body').animate({ scrollTop: ((go_page-1)*screen_height) }, 1000);
    //     setTimeout(() => {
    //         page_running=false;
    //     }, 1000);
    // }
};
function other_animation(page,direct,position){
    if(direct=="down"){
        if(position=="last"){
            switch(page.page_num){
                case 1://pair1
                    page.style.transition="1.0s";
                    page.style.opacity='0';
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="0.0s";
                        page.style.top=((screen_height-page.clientHeight)/2-screen_height)+"px";
                        page.animate=setTimeout(() => {
                            page.style.opacity='1';
                            page.animate=null;
                        }, 1000);
                    }, 1000);
                    return false;
                case 2://pair2
                        var logo = document.getElementById('team_logo');
                        logo.style.transition="1.0s";
                        logo.style.opacity="0";
                        logo.style.width="55%";
                        if(page.animate!=null)clearTimeout(page.animate);
                        page.animate=setTimeout(() => {
                            page.style.transition="0.0s";
                            logo.style.transition="0.0s";
                            page.style.top=((screen_height-page.clientHeight)/2-screen_height)+"px";
                            logo.style.opacity="1";
                            page.animate=null;
                        }, 1000);
                        return false;
                case 3://pair3
                    var earth = document.getElementById('earth');
                    earth.style.transition="0.0s";
                    earth.style.width='50%';
                    earth.style.opacity='1';
                    page.style.opacity='1';
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        earth.style.transition="1.0s";
                        earth.style.width='150%';
                        earth.style.opacity='0';
                        page.animate=null;
                    }, 1);
                    return false;
                case 14://pair9
                    var logo = document.getElementById('team_logo_2');
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    logo.style.transition="0.0s";
                    logo.style.width="55%";
                    logo.style.marginTop="0%";
                    logo.style.opacity="1";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        logo.style.transition="1.0s";
                        logo.style.marginTop=(-screen_width*0.035)+"px";
                        logo.style.width="22%";
                        page.animate=setTimeout(() => {
                            logo.style.transition="0.0s";
                            logo.style.opacity="0";
                            page.animate=null;
                        }, 1000);
                    }, 1);
                    return false;
            }
        }else if(position=="next"){
            switch(page.page_num){
                case 2://pair4
                    var logo = document.getElementById('team_logo');
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="1";
                    logo.style.marginTop="calc("+(document.getElementById("navbar").clientHeight*1.03)+"px - "+(screen_width*0.038)+"px)";
                    logo.style.width="22%";
                    logo.style.transition="0.0s";
                    logo.style.opacity="1";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        logo.style.transition="1.0s";
                        logo.style.marginTop="0%";
                        logo.style.width="55%";
                        page.animate=null;
                    }, 1);
                    return false;
                case 3://pair5
                        page.style.transition="0.0s";
                        page.style.top=((screen_height-page.clientHeight)/2)+"px";
                        page.style.opacity="0";
                        var earth = document.getElementById('earth');
                        earth.style.width="50%";
                        earth.style.opacity="1";
                        if(page.animate!=null)clearTimeout(page.animate);
                        page.animate=setTimeout(() => {
                            page.style.transition="1.0s";
                            page.style.opacity="1";
                            page.animate=null;
                        }, 1);
                        return false;
                case 4://pair6
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="0";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity="1";
                        page.animate=null;
                    }, 500);
                    return false;
                case 5://pair7
                    var epa = document.getElementById('page5_epa');
                    page.style.transition="1.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="1";
                    epa.style="--rotate:"+(-30)+"deg;";
                    epa.style.transition="0.0s linear";
                    epa.style.opacity="0";
                    epa.style.top=(-epa.clientHeight*1.3)+"px";
                    epa.style.left=(screen_width*0.2)+"px";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        epa.style.opacity="1";
                        page.animate=setTimeout(() => {
                            epa.style.transition="1.0s linear";
                            epa.style.top=((screen_height*0.7-epa.clientHeight))+"px";
                            epa.style.left=(screen_width*0.3)+"px";
                            page.animate=setTimeout(() => {
                                epa.style.transition="0.25s linear";
                                epa.style.top=((screen_height*0.58-epa.clientHeight))+"px";
                                epa.style.left=(screen_width*0.415)+"px";
                                page.animate=setTimeout(() => {
                                    epa.style.top=((screen_height*0.5-epa.clientHeight))+"px";
                                    epa.style.left=(screen_width*0.53)+"px";
                                    page.animate=setTimeout(() => {
                                        epa.style.top=((screen_height*0.46-epa.clientHeight))+"px";
                                        epa.style.left=(screen_width*0.645)+"px";
                                        page.animate=setTimeout(() => {
                                            epa.style.top=((screen_height*0.5-epa.clientHeight))+"px";
                                            epa.style.left=(screen_width*0.76)+"px";
                                            page.animate=setTimeout(() => {
                                                epa.style.top=((screen_height*0.58-epa.clientHeight))+"px";
                                                epa.style.left=(screen_width*0.875)+"px";
                                                page.animate=setTimeout(() => {
                                                    epa.style.top=((screen_height*0.7-epa.clientHeight))+"px";
                                                    epa.style.left=(screen_width*1)+"px";
                                                    page.animate=null;
                                                }, 250);
                                            }, 250);
                                        }, 250);
                                    }, 250);
                                }, 250);
                            }, 1000);
                        }, 1);
                    }, 1000);
                    return false;
                case 15://pair8
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity='0';
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity='1';
                    }, 1);
                    return false;
            }
        }
    }else if(direct=="up"){
        if(position=="next"){
            switch(page.page_num){
                case 1://pair1
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity='0';
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity='1';
                    }, 1);
                    return false;
                case 2://pair2
                    var logo = document.getElementById('team_logo');
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="0";
                    logo.style.opacity="1";
                    logo.style.width="55%";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity="1";
                        page.animate=null;
                    }, 1);
                    return false;
                case 3://pair3
                    page.style.transition="0.0s";
                    page.style.opacity='1';
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    var earth = document.getElementById('earth');
                    earth.style.transition="0.0s";
                    earth.style.width='150%';
                    earth.style.opacity='0';
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        earth.style.transition="1.0s";
                        earth.style.opacity='1';
                        earth.style.width='50%';
                        page.style.transition="1.0s";
                        page.animate=null;
                    }, 1);
                    return false;
                case 5://pair-
                    var epa = document.getElementById('page5_epa');
                    page.style.transition="1.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="1";
                    epa.style="--rotate:"+(-30)+"deg;";
                    epa.style.transition="0.0s linear";
                    epa.style.opacity="0";
                    epa.style.top=(-epa.clientHeight*1.3)+"px";
                    epa.style.left=(screen_width*0.2)+"px";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        epa.style.opacity="1";
                        page.animate=setTimeout(() => {
                            epa.style.transition="1.0s linear";
                            epa.style.top=((screen_height*0.7-epa.clientHeight))+"px";
                            epa.style.left=(screen_width*0.3)+"px";
                            page.animate=setTimeout(() => {
                                epa.style.transition="0.25s linear";
                                epa.style.top=((screen_height*0.58-epa.clientHeight))+"px";
                                epa.style.left=(screen_width*0.45)+"px";
                                page.animate=setTimeout(() => {
                                    epa.style.top=((screen_height*0.5-epa.clientHeight))+"px";
                                    epa.style.left=(screen_width*0.55)+"px";
                                    page.animate=setTimeout(() => {
                                        epa.style.top=((screen_height*0.46-epa.clientHeight))+"px";
                                        epa.style.left=(screen_width*0.65)+"px";
                                        page.animate=setTimeout(() => {
                                            epa.style.top=((screen_height*0.5-epa.clientHeight))+"px";
                                            epa.style.left=(screen_width*0.75)+"px";
                                            page.animate=setTimeout(() => {
                                                epa.style.top=((screen_height*0.58-epa.clientHeight))+"px";
                                                epa.style.left=(screen_width*0.85)+"px";
                                                page.animate=setTimeout(() => {
                                                    epa.style.top=((screen_height*0.7-epa.clientHeight))+"px";
                                                    epa.style.left=(screen_width*1)+"px";
                                                    page.animate=null;
                                                }, 250);
                                            }, 250);
                                        }, 250);
                                    }, 250);
                                }, 250);
                            }, 1000);
                        }, 1);
                    }, 1000);
                    return false;
                case 14://pair9
                    var logo = document.getElementById('team_logo_2');
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="1";
                    logo.style.marginTop=(-screen_width*0.035)+"px";
                    logo.style.width="22%";
                    logo.style.transition="0.0s";
                    logo.style.opacity="1";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        logo.style.transition="1.0s";
                        logo.style.marginTop="0%";
                        logo.style.width="55%";
                        page.animate=null;
                    }, 1);
                    return false;
            }
        }else if(position=="last"){
            switch(page.page_num){
                case 2://pair4
                    var logo = document.getElementById('team_logo');
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    logo.style.transition="0.0s";
                    logo.style.width="55%";
                    logo.style.marginTop="0%";
                    logo.style.opacity="1";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        logo.style.transition="1.0s";
                        logo.style.marginTop="calc("+(document.getElementById("navbar").clientHeight*1.03)+"px - "+(screen_width*0.038)+"px)";
                        logo.style.width="22%";
                        page.animate=setTimeout(() => {
                            logo.style.transition="0.0s";
                            logo.style.opacity="0";
                            page.animate=null;
                        }, 1000);
                    }, 1);
                    return false;
                case 3://pair5
                    var earth = document.getElementById('earth');
                    earth.style.transition="0.0s";
                    earth.style.width="50%";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.transition="0.0s";
                    page.style.opacity="1";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity="0";
                        page.animate=null;
                    }, 1);
                    return false;
                case 4://pair6
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity="1";
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity="0";
                        page.animate=null;
                    }, 1);
                    return false;
                case 15://pair8
                    page.style.transition="0.0s";
                    page.style.top=((screen_height-page.clientHeight)/2)+"px";
                    page.style.opacity='1';
                    if(page.animate!=null)clearTimeout(page.animate);
                    page.animate=setTimeout(() => {
                        page.style.transition="1.0s";
                        page.style.opacity='0';
                    }, 1);
                    return false;
            }
        }
    }
    return true;
}//6
function move_epa(go_page){
    var epa=document.getElementById("epa");
    var bottomleft=document.getElementById("bottomleft");
    var map=document.getElementById("map");
    if(go_page>=4 && go_page<=16){
        map.style.bottom="2%";
    }else{
        map.style.bottom="-100%";
    }
    if(go_page>=6 && go_page<=11){
        bottomleft.style.bottom="0%";
    }else{
        bottomleft.style.bottom="-100%";
    }
    switch(go_page){
        case 4:
            epa.move_to(0.37,0.45);
            break;
        case 5:
            epa.move_to(0.36,0.27);
            break;
        case 6:
            epa.move_to(0.45,0.55);
            break;
        case 7:
            epa.move_to(0.35,0.65);
            break;
        case 8:
            epa.move_to(0.19,0.57);
            break;
        case 9:
            epa.move_to(0.15,0.40);
            break;
        case 10:
            epa.move_to(0.17,0.20);
            break;
        case 11:
            epa.move_to(0.28,0.07);
            break;
        case 12:
            epa.move_to(0.45,0.04);
            break;
        case 13:
            epa.move_to(0.55,0.06);
            break;
        case 14:
            epa.move_to(0.67,0.15);
            break;
        case 15:
            epa.move_to(0.72,0.37);
            break;
        case 16:
            epa.move_to(0.56,0.46);
            break;
        case 17:
            epa.move_to(0.47,0.27);
            break;
        case 18:
            epa.move_to(0.46,0.55);
            break;
        case 19:
            epa.move_to(0.42,0.68);
            break;
        case 20:
            epa.move_to(0.28,0.67);
            break;
        case 21:
            epa.move_to(0.36,0.45);
            break;
        default:
            ;
    }
}
function more_information(change,show_tag,hidden_tag){
    var text=document.getElementById(change);
    var triangle=text.getElementsByClassName("triangle_to_right");
    var self=document.getElementById(show_tag);
    var another=document.getElementById(hidden_tag);
    if(triangle.length!=0){
        triangle[0].classList.toggle("triangle_to_down");
        triangle[0].classList.remove('triangle_to_right');
        self.style="display: block;";
        another.style="display: none;";
    }else{
        triangle=text.getElementsByClassName("triangle_to_down");
        triangle[0].classList.toggle("triangle_to_right");
        triangle[0].classList.remove('triangle_to_down');
        self.style="display: none;";
        another.style="display: block;";
    }
}
HTMLImageElement.prototype.move_to=function(x,y){
    this.style.bottom=(map_icon.clientHeight*y)+"px";
    this.style.right=(map_icon.clientWidth*x)+"px";
}
function go_top(){
    going_top=true;
    $('html,body').animate({ scrollTop: 0 }, 1000);
    setTimeout(() => {
        going_top=false;
        screen_move($(window).scrollTop());
    }, 1000);
    
}
function index_move_to_page(id){
    going_top=true;
    display_mod=1;
    // var target=document.getElementById(id);
    $('html,body').stop(true,false);
    $('html,body').animate({ scrollTop: id*screen_height }, 1000);
    if(move_to_item_temp!=null)clearTimeout(move_to_item_temp);
    close_header();
    move_to_item_temp=setTimeout(() => {
        display_mod=0;
        move_to_item_temp=null;
        going_top=false;
    }, 1000);
} 
var parameter=document.getElementById("parameter");
parameter.innerHTML = ".first_page{--nav_height: "+document.getElementById("navbar").clientHeight+"px;}";
parameter=document.getElementById("first_background");
parameter.style = "--nav_height: "+document.getElementById("navbar").clientHeight+"px;";
parameter=document.getElementById("page_12_content");
parameter.style.top=(document.getElementById("page_12_white").clientHeight+1)+"px";
parameter=document.getElementById("page_13_content");
parameter.style.top=(document.getElementById("page_13_white").clientHeight+1)+"px";
now_page=Math.floor($(window).scrollTop()/screen_height+0.5);
screen_move($(window).scrollTop());
display_mod=1;
window.addEventListener('resize',
    () => {
        screen_height=window.innerHeight;
        screen_width=window.innerWidth;
        parameter=document.getElementById("page_12_content");
        parameter.style.top=(document.getElementById("page_12_white").clientHeight+1)+"px";
        parameter=document.getElementById("page_13_content");
        parameter.style.top=(document.getElementById("page_13_white").clientHeight+1)+"px";
    }
    , false );

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
    
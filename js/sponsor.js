var card_wait=[];
var card_run=[];
var card_row=2;
var all_id= new Map();
var card_move=[];
var isMobile;
var myWindow = $(window); 
var screen_width=view_to_pixels("100vw");
var mouse_x,mouse_y;
var direction_control=[];
var run_speed=[];
function stop_move(div){
    var temp=div.target;
    temp.setAttribute("draggable","false");
    while(temp.getAttribute("data-id")==null){
        temp.setAttribute("draggable","false");
        temp=temp.parentNode;
    }
    card_move[all_id.get(temp.getAttribute("data-id"))]=0;
}
function start_move(div){
    var temp=div.target;
    while(temp.getAttribute("data-id")==null){
        temp=temp.parentNode;
    }
    var i=all_id.get(temp.getAttribute("data-id"));
    card_move[i]=1;
    direction_control[i]=0;
}
function mouse_move(div){
    var temp=div.target;
    while(temp.getAttribute("data-id")==null){
        temp=temp.parentNode;
    }
    var i=all_id.get(temp.getAttribute("data-id"));
    if(isMobile && card_move[i]==0){
        var cards_length=card_run[i].length;
        for(var j=0;j<cards_length;j++){
            card_run[i][j].style.left=(remove_px(card_run[i][j].style.left)+div.targetTouches[0].pageX-mouse_x) + "px";
        }
    }else{
        return ;
    }
    if(mouse_x<div.targetTouches[0].pageX)direction_control[i]=1;
    else if(mouse_x>div.targetTouches[0].pageX) direction_control[i]=0;
    mouse_x=div.targetTouches[0].pageX;
    mouse_y=div.targetTouches[0].pageY;
}
function move_init(){
    isMobile=isMobileDevice();
    var all_run=document.getElementsByClassName("sponsor_body");
    card_row=all_run.length;
    for(var i=0;i<card_row;i++){
        card_wait[i]=new Array();
        card_run[i]=new Array();
        direction_control[i]=0;
        run_speed[i]=view_to_pixels(all_run[i].getAttribute("data-speed"));
    }
    for(var i=0;i<card_row;i++){
        all_id.set(all_run[i].getAttribute("data-id"), i);
        var cards=all_run[i].getElementsByClassName("sponsor_card");
        var cards_length=cards.length;
        for(var j=0;j<cards_length;j++){
            cards[j].style.display="none";
            card_wait[i].push(cards[j]);
        }
        if(isMobile){
            all_run[i].addEventListener('touchstart',
                (event) => {
                    stop_move(event);
                    mouse_x=event.targetTouches[0].pageX;
                    mouse_y=event.targetTouches[0].pageY;
                }
            , {passive: true});
            all_run[i].addEventListener('touchmove',
                (event) => {
                    mouse_move(event);
                }
            , {passive: true});
            all_run[i].addEventListener('touchend',
                (event) => {
                    start_move(event);
                }
            , {passive: true});
        }else{
            all_run[i].addEventListener('mouseover',
                (event) => {
                    stop_move(event);
                }
            , false );
            all_run[i].addEventListener('mouseout',
                (event) => {
                    start_move(event);
                }
            , false );
        }
        
    }
    for(var i=0;i<card_row;i++){
        card_move[i]=1;
    }
}
function card_moving(){
    for(var i=0;i<card_row;i++){
        var max_x=0;
        var min_x=screen_width;
        if(card_run[i].length>0){
            max_x=remove_px(card_run[i][card_run[i].length-1].style.left)+card_run[i][card_run[i].length-1].clientWidth;
            min_x=remove_px(card_run[i][0].style.left);
        }
        if(max_x<screen_width){
            if(card_wait[i][0]!=null && (!isMobile || direction_control[i]==0)){
                card_run[i].push(card_wait[i].shift());
                card_run[i][card_run[i].length-1].style.display="block";
                if(card_run[i].length-2>=0){
                    card_run[i][card_run[i].length-1].style.left=(remove_px(card_run[i][card_run[i].length-2].style.left)+card_run[i][card_run[i].length-2].clientWidth)+"px";
                }else{
                    card_run[i][card_run[i].length-1].style.left=screen_width+"px";
                }
            }
        }
        if(min_x>0){
            if(card_wait[i][0]!=null && (!isMobile || direction_control[i]==1)){
                card_run[i].unshift(card_wait[i].pop());
                card_run[i][0].style.display="block";
                if(card_run[i].length-2>=0){
                    card_run[i][0].style.left=(remove_px(card_run[i][1].style.left)-card_run[i][0].clientWidth)+"px";
                }else{
                    card_run[i][0].style.left=(-card_run[i][0].clientWidth)+"px";
                }
            }
        }
        if(card_run[i][0]!=null && remove_px(card_run[i][0].style.left)+(card_run[i][0].clientWidth*1.1)<0){
            card_wait[i].push(card_run[i].shift());
            card_wait[i][card_wait[i].length-1].style.display="none";
        }
        if(card_run[i][card_run[i].length-1]!=null && remove_px(card_run[i][card_run[i].length-1].style.left)>screen_width){
            card_wait[i].unshift(card_run[i].pop());
            card_wait[i][0].style.display="none";
        }
        if(card_move[i]==1){
            cards_length=card_run[i].length;
            for(var j=0;j<cards_length;j++){
                if(direction_control[i]==0)
                    card_run[i][j].style.left=(remove_px(card_run[i][j].style.left)-run_speed[i]) + "px";
                else if(direction_control[i]==1)
                    card_run[i][j].style.left=(remove_px(card_run[i][j].style.left)+run_speed[i]) + "px";
            }
        }
    }
    setTimeout(function(){
        card_moving();
    },10);
}
function view_to_pixels(value) {
    var parts = value.match(/([0-9]+[\.]*[0-9]+)(vh|vw)/);
    if(parts==null)return parseInt(value);
    var num = Number(parts[1]);
    var h_and_w = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]];
    return h_and_w * (num/100);
}
function remove_px(string){
    if(string=="")return screen_width;
    var num=parseInt(string.substr(0,string.indexOf("px")));
    return num;
}
function isMobileDevice(){
    // return true;
    var mobileDevices = ['Android', 'webOS', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'Windows Phone','Samsung','MiuiBrowser','XiaoMi'];
    var isMobileDevice=false;
    for(var i=0;i<mobileDevices.length;i++){
        if(navigator.userAgent.match(mobileDevices[i])){
            isMobileDevice=true;
        }
    }
    return isMobileDevice;
}
move_init();
card_moving();
window.addEventListener('resize',
() => {
    screen_width=view_to_pixels("100vw");
}
, false );
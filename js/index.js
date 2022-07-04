/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
var hidden=0;
function out_bar(id) {
    if(hidden==1){
        return ;
    }if(id==null)return ;
    document.getElementById(id).classList.remove('show');
} 
function in_bar(id) {
    if(hidden==1){
        return ;
    }if(id==null)return ;
    document.getElementById(id).classList.toggle("show");
}
function click_bar(id) {
    if(hidden==0){
        return ;
    }if(id==null)return ;
    if(document.getElementById(id).classList.contains('show')){
        document.getElementById(id).classList.remove('show');
    }else{
        document.getElementById(id).classList.toggle("show");
    }
}
 
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
        if (!event.target.matches('.click')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                        }
                }
        }
}
function loadingFunction(){
    $(".loading").delay(1000).fadeOut();
}
document.addEventListener('DOMContentLoaded', function(){
    jQuery(function($){
        var myWindow = $(window); 
        var myPosition = myWindow.scrollTop(); 
        myWindow.scroll(function(){
            // alert(myPosition);
        if (myPosition > 90) {
            if (myWindow.scrollTop() > myPosition) {
                // $("#navbar").addClass("header-hide");
                var item=document.getElementById("navbar");
                item.style.top="-"+item.clientHeight+"px";
            } else {
                document.getElementById("navbar").style.top="0px";
                // $("#navbar").removeClass("header-hide");
            }
        }
        myPosition = myWindow.scrollTop();
        }); 
    });  
});
function load_finish(){
    // return ;
    var loading=document.getElementById("loading");
    $(".loading").fadeOut();
    loading.style.visibility = "hidden";
}
var x=1,y=10;
function setpage(x1,y1){
    x=x1;
    y=y1;
}
function switchbtn(id){
    if(id>=10)y=id;
    else x=id;
    id=x+y;
    var lab="";
    switch(y){
        case 10:
            lab="wl";
            break;
        case 20:
            lab="dl";
            break;
        case 30:
            lab="hp";
            break;
    }
    var month=x+4;
    location.href = "./notebook_"+lab+"_"+month+".php";
}
var nav_len=0;
function check_navbar(){
    if(nav_len==0){
        var nav = document.getElementsByClassName("dropdown");
        for(var i=0;i<nav.length;i++){
            nav_len+=nav[i].clientWidth;
        }
    }
    var navbar = document.getElementById("navbar").clientWidth;
    var logo = document.getElementById("logo").clientWidth;
    if(navbar<=logo+nav_len*1.03){
        hidden=1;
        document.getElementById("nav_style").innerHTML=".dropdown{display: none;}.dropdown_rwd{display: block;}";
    }else{
        hidden=0;
        document.getElementById("nav_style").innerHTML=".dropdown{display: block;}.dropdown_rwd{display: none;}";
    }
    // our_footer
    // console.log(logo+nav);
    document.getElementById("blank_top").style.height=document.getElementById("navbar").clientHeight+"px";
}
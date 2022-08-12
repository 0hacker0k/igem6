/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
var hide_mod=0;
var isShow=0;
var temp_down_nav=null;
function out_bar(id) {
    if(hide_mod==1){
        return ;
    }if(id==null)return ;
    document.getElementById(id).classList.remove('show');
    isShow=0;
} 
function in_bar(id) {
    if(hide_mod==1){
        return ;
    }if(id==null)return ;
    // e = event || window.event;
    // e.wheel.preventDefault();
    document.getElementById(id).classList.toggle("show");
    isShow=1;
}
function click_bar(id) {
    if(hide_mod==0){
        return ;
    }if(id==null)return ;
    if(document.getElementById(id).classList.contains('show')){
        document.getElementById(id).classList.remove('show');
        isShow=0;
        if(id=="myDropdown9"){
            if(temp_down_nav!=null)
                temp_down_nav.classList.remove('show');
            temp_down_nav=null;
            if(document.getElementById(id).classList.contains('helf_size')){
                document.getElementById(id).classList.remove('helf_size');
            }
        }
    }else{
        document.getElementById(id).classList.toggle("show");
        isShow=1;
    }
}
 
// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
        if (!event.target.matches('.click')) {
            isShow=0;
            temp_down_nav=null;
            var dropdowns = document.getElementsByClassName("show");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show') && !openDropdown.classList.contains('modal') && !openDropdown.classList.contains('modal-backdrop')) {
                            openDropdown.classList.remove('show');
                    }
            }
            dropdowns = document.getElementsByClassName("nav_rwd");
            for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                    }
            }
            dropdowns = document.getElementById("myDropdown9").classList.remove('show');;
            // if(document.getElementById("myDropdown9").classList.contains('helf_size')){
            //     document.getElementById("myDropdown9").classList.remove('helf_size');
            // }
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
        if (myPosition > 60) {
            if (myWindow.scrollTop() > myPosition && isShow==0) {
                // $("#navbar").addClass("header-hide");
                var item=document.getElementById("navbar");
                item.style.top="-"+(item.clientHeight+1)+"px";
            } else if(location.href.indexOf('webgame')==-1 && myWindow.scrollTop() < myPosition-20){

                document.getElementById("navbar").style.top="0px";
                // $("#navbar").removeClass("header-hide");
            }
        }else if(myPosition <= 3){
            document.getElementById("navbar").style.top="0px";
        }
        myPosition = myWindow.scrollTop();
        }); 
    });  
});
function close_header(){
    var item=document.getElementById("navbar");
    item.style.top="-"+(item.clientHeight+1)+"px";
}
function load_finish(){
    // return ;
    var loading=document.getElementById("loading");
    loading.style.visibility = "hidden";
    $(".loading").fadeOut();
    
}
var nav_len=0;
function check_navbar(){
    if(nav_len==0){
        var nav = document.getElementsByClassName("top_nav");
        for(var i=0;i<nav.length;i++){
            nav_len+=nav[i].clientWidth;
        }
    }
    var navbar = document.getElementById("navbar").clientWidth;
    var logo = document.getElementById("logo").clientWidth;
    if(navbar<=logo+nav_len*1.03){
        hide_mod=1;
        document.getElementById("nav_style").innerHTML=".dropdown{display: none;}.dropdown_rwd{display: block;}";
    }else{
        hide_mod=0;
        document.getElementById("nav_style").innerHTML=".dropdown{display: block;}.dropdown_rwd{display: none;}";
    }
    document.getElementById("blank_top").style.height=(document.getElementById("normal_nav").clientHeight-2)+"px";
}

function change_list(id){
    if(hide_mod==0){
        return ;
    }
    if(id==null)return ;
    if(document.getElementById("mylist"+id)==undefined)return;
    if(temp_down_nav!=null && temp_down_nav!=document.getElementById("mylist"+id)){
        temp_down_nav.classList.remove('show');
    }else{
        // if(document.getElementById("myDropdown9").classList.contains('helf_size')){
        //     document.getElementById("myDropdown9").classList.remove('helf_size');
        // }else{
        //     document.getElementById("myDropdown9").classList.toggle("helf_size");
        // }
    }
    if(document.getElementById("mylist"+id).classList.contains('show')){
        document.getElementById("mylist"+id).classList.remove('show');
        temp_down_nav=null;
    }else{
        temp_down_nav=document.getElementById("mylist"+id);
        document.getElementById("mylist"+id).classList.toggle("show");
    }
    return;
}
// On document ready set the div height to window
$(document).ready(function(){ 

    // Assign a variable for the application being used
    var nVer = navigator.appVersion;
    // Assign a variable for the device being used
    var nAgt = navigator.userAgent;
    var nameOffset,verOffset,ix;


    // First check to see if the platform is an iPhone or iPod
    if(navigator.platform == 'iPhone' || navigator.platform == 'iPod'){
        // In Safari, the true version is after "Safari" 
        if ((verOffset=nAgt.indexOf('Safari'))!=-1) {
          // Set a variable to use later
          var mobileSafari = 'Safari';
        }
    }

  //===== FULL HEIGHT =====\\

    // If is mobile Safari set window height +60
    if (mobileSafari == 'Safari') { 
        // Height + 60px
        $('.full-height').css('height',(($(window).height()) + 60)+'px');
    } else {
        // Else use the default window height
        $('.full-height').css({'height':(($(window).height()))+'px'});  
    };


});

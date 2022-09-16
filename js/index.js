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
    if($(window).scrollTop()>0){
         var item=document.getElementById("navbar");
        item.style.top="-"+(item.clientHeight+1)+"px";
    }
   
}
function load_finish(){
    // return ;
    watt();
    check_navbar();
    var loading=document.getElementById("loading");
    loading.style.visibility = "hidden";
    $(".loading").fadeOut();
    
}
var nav_len=0;
function check_navbar(){
    if(hide_mod==0){
        nav_len=0;
        var nav = document.getElementsByClassName("top_nav");
        for(var i=0;i<nav.length;i++){
            nav_len+=nav[i].clientWidth;
        }
    }
    var navbar = document.getElementById("navbar").clientWidth;
    var logo = document.getElementById("logo").clientWidth;
    if(navbar*0.98<=logo+nav_len*1.0){
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
let lazyImages = []
const option = {
    root: null,
    rootMargin: "200px 200px 200px 200px",
    threshold: [0]
}
const observer = new IntersectionObserver(entries => {
    entries.forEach( image => {
        if(image.isIntersecting) {
            start_to_show(image.target);
        }
    });
}, option);
var imgGroup = document.getElementsByClassName("lazy");
// var count_lazy=0;
function start_to_show(image){
    // console.log(count_lazy++);
    image.src = image.dataset.src;
    observer.unobserve(image);
    if(image.classList.contains('lazy')){
        image.classList.remove('lazy');
    }
    // console.log(document.getElementsByClassName("lazy").length);
}
function auto_show(){
    imgGroup = document.getElementsByClassName("lazy");
    if(imgGroup[0]!=null)
        start_to_show(imgGroup[0]);
    setTimeout(() => {
        auto_show();
    }, 1000);
}
function watt(){
    Array.prototype.forEach.call(imgGroup,element => observer.observe(element));
    setTimeout(() => {
        auto_show();
    }, 1000);
}
check_navbar();
window.addEventListener('resize',
    () => {
        check_navbar();
    }
, false );